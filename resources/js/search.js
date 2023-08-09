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
    searchBox({
        container: '#searchBox',
        placeholder: 'Search for products',
        showSubmit: false,
    }),

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
                    ${instantsearch.highlight({
                        attribute : "title" , 
                        hit : data
                            })
                        }
                </p>
                <i class="author-name">
                    ${instantsearch.highlight({
                        attribute : "author" , 
                        hit : data
                            })
                        }
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

    // instantsearch.widgets.numericMenu({
    //   // ...
    //   container: '#numeric-menu',
    //   attribute: 'price',
    //   item : data => `
    //           <b class="price">
    //               ${data.price} $
    //           </b>
    //       `
      
    // })
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


