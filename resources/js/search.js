import algoliasearch from 'algoliasearch/lite';
import instantsearch from 'instantsearch.js';
import {  searchBox,  menu, hierarchicalMenu,  hits,  pagination,} from 'instantsearch.js/es/widgets';
import { autocomplete } from '@algolia/autocomplete-js';
import historyRouter from 'instantsearch.js/es/lib/routers/history';

import { createLocalStorageRecentSearchesPlugin } from '@algolia/autocomplete-plugin-recent-searches';
import { connectSearchBox } from 'instantsearch.js/es/connectors';

import '@algolia/autocomplete-theme-classic';




// initiliaze instantsearch
const searchClient = algoliasearch(
"UAYG2IU3S4",
"817841dbb829c46702f2a69a0da0d48f"
);

const AUTOCOMPLETE_INDEX_NAME = 'books_query_suggestions';

const instantSearchRouter = historyRouter();
const virtualSearchBox = connectSearchBox(() => {});

const search = instantsearch({
    indexName: "books",
    container:"#product" ,
    routing: instantSearchRouter,
    searchClient
});

  search.addWidgets([
    
menu({
        container: '#categories',
        attribute: 'categories',
        limit: 6,
        sortBy: ['count:desc', 'name:asc'],
    }),


hits({
        container: '#hits',
        templates: {
        item : data => `
        <div class="col-md-3 col-sm-6">
        <div id="product" class="product-card product">
            <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="${data.image}" alt="Demon Copperhead">
                <p class="book-name">
                   ${data.title}
                </p>
                <i class="author-name">
                  ${data.author}
                </i>
                <b class="price">
                    ${data.price} $
                </b>
        </div>
    </div>

            `
            , empty:"No results found." ,
    
                },
      }),



      // hits({
      //   container: '#hits',
      //   templates: {
      //     item(hit, { html, components }) {
      //       return html`
      //         <div>
      //           ${components({ attribute: `<img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="${components.image}" alt="Demon Copperhead">
      //           `, hit })}
      //           ${components.Highlight({ attribute: 'title', hit })}
      //           ${components.Highlight({ attribute: 'author', hit })}
      //           ${components({ attribute: 'price', hit })}
      //         </div>
      //       `;
      //     },
      //   },
      // }),
]) ;

search.start();
// console.log(search);

// ----Auto Complete---- //
// Set the InstantSearch index UI state from external events.
function setInstantSearchUiState(indexUiState) {
  search.setUiState(uiState => ({
    ...uiState,[AUTOCOMPLETE_INDEX_NAME]: {
      ...uiState[AUTOCOMPLETE_INDEX_NAME],
      // We reset the page when the search state changes.
      page: 1,
      ...indexUiState,
    },
  }));
}

// Return the InstantSearch index UI state.
function getInstantSearchUiState() {
  const uiState = instantSearchRouter.read();

  return (uiState && uiState[AUTOCOMPLETE_INDEX_NAME]) || {};
}

const searchPageState = getInstantSearchUiState();

let skipInstantSearchUiStateUpdate = false;

const { setQuery } = autocomplete({
    container: '#autocomplete',
    placeholder: 'Search for products',
    detachedMediaQuery: 'none',
    initialState: {
      query: searchPageState.query || '',
    },
    onSubmit({ state }) {
      setInstantSearchUiState({ query: state.query });
    },
    onReset() {
      setInstantSearchUiState({ query: '' });
    },
    onStateChange({ prevState, state }) {
      if (!skipInstantSearchUiStateUpdate && prevState.query !== state.query) {
        setInstantSearchUiState({ query: state.query });
      }
      skipInstantSearchUiStateUpdate = false;
    },
  })
  
  // This keeps Autocomplete aware of state changes coming from routing
  // and updates its query accordingly
  window.addEventListener('popstate', () => {
    skipInstantSearchUiStateUpdate = true;
    setQuery(search.helper?.state.query || '');
  });



// Build URLs that InstantSearch understands.
function getInstantSearchUrl(indexUiState) {
  return search.createURL({ [INSTANT_SEARCH_INDEX_NAME]: indexUiState });
}

// Detect when an event is modified with a special key to let the browser
// trigger its default behavior.
function isModifierEvent(event) {
  const isMiddleClick = event.button === 1;

  return (
    isMiddleClick ||
    event.altKey ||
    event.ctrlKey ||
    event.metaKey ||
    event.shiftKey
  );
}

function onSelect({ setIsOpen, setQuery, event, query }) {
  // You want to trigger the default browser behavior if the event is modified.
  if (isModifierEvent(event)) {
    return;
  }

  setQuery(query);
  setIsOpen(false);
  setInstantSearchUiState({ query });
}

function getItemUrl({ query }) {
  return getInstantSearchUrl({ query });
}

function createItemWrapperTemplate({ children, query, html }) {
  const uiState = { query };

  return html`<a
    class="aa-ItemLink"
    href="${getInstantSearchUrl(uiState)}"
    onClick="${(event) => {
      if (!isModifierEvent(event)) {
        // Bypass the original link behavior if there's no event modifier
        // to set the InstantSearch UI state without reloading the page.
        event.preventDefault();
      }
    }}"
  >
    ${children}
  </a>`;
}

const recentSearchesPlugin = createLocalStorageRecentSearchesPlugin({
  key: 'instantsearch',
  limit: 3,
  transformSource({ source }) {
    return {
      ...source,
      getItemUrl({ item }) {
        return getItemUrl({
          query: item.label,
        });
      },
      onSelect({ setIsOpen, setQuery, item, event }) {
        onSelect({
          setQuery,
          setIsOpen,
          event,
          query: item.label,
        });
      },
      // Update the default `item` template to wrap it with a link
      // and plug it to the InstantSearch router.
      templates: {
        ...source.templates,
        item(params) {
          const { children } = source.templates.item(params).props;

          return createItemWrapperTemplate({
            query: params.item.label,
            children,
            html: params.html,
          });
        },
      },
    };
  },
});

const { setQuery } = autocomplete({
  // You want recent searches to appear with an empty query.
  openOnFocus: true,
  // Add the recent searches plugin.
  plugins: [recentSearchesPlugin],
  // ...
});