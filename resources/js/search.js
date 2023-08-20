import algoliasearch from 'algoliasearch/lite';
import instantsearch from 'instantsearch.js';
import {  searchBox,
        menu,
        menuSelect ,
        hierarchicalMenu,
        hits,
        pagination,
        ratingMenu,
        refinementList}
              from 'instantsearch.js/es/widgets';
import { autocomplete , getAlgoliaResults } from '@algolia/autocomplete-js';
import searchInsights from 'search-insights';
import historyRouter from 'instantsearch.js/es/lib/routers/history';
import { createQuerySuggestionsPlugin } from '@algolia/autocomplete-plugin-query-suggestions';
// import { createRecentSearchesPlugin } from '@algolia/autocomplete-plugin-recent-searches';
import { createLocalStorageRecentSearchesPlugin } from '@algolia/autocomplete-plugin-recent-searches';
import { connectSearchBox } from 'instantsearch.js/es/connectors';
import { createRedirectUrlPlugin } from '@algolia/autocomplete-plugin-redirect-url';


import '../../public/assets/css/style.css';
import '@algolia/autocomplete-theme-classic';

import {ProductItem} from "./ProductItem"


const indexName = 'books';
const suggestionsIndexName = 'books_query_suggestions';


// initiliaze instantsearch

const searchClient = algoliasearch(
"UAYG2IU3S4",
"817841dbb829c46702f2a69a0da0d48f"
);

const redirectUrlPlugin = createRedirectUrlPlugin(
  {
    transformResponse(response) {
      return response.myRedirectData?.url;
    },
    
  }
);


const instantSearchRouter = historyRouter();
const virtualSearchBox = connectSearchBox(() => {});

function cx(...classNames) {
    return classNames.filter(Boolean).join(' ');
}
const search = instantsearch({
    indexName: "books",
    container:"#product" ,
    routing: instantSearchRouter,
    searchClient
});


search.addWidgets([

virtualSearchBox({}),

// -----Pagination Filter----- //
pagination({
    container: '#pagination',
    showFirst: false,
    showPrevious: false,
    showNext:false ,
    showLast:false ,
    }),

// -----Format Filter----- //
refinementList({
    container: '#format-select',
    attribute: 'format',
    limit:4 ,
    showMore: true,
    sortBy: ['count:desc'],

    }),

// -----Categories Filter----- //
refinementList({
    container: '#categories',
    attribute: 'categories',
    limit: 7,
    searchableEscapeFacetValues: false,
    showMore: true,
    sortBy: ['count:desc'],
  }),


// -----Type Filter----- //
  refinementList({
    container: '#type',
    attribute: 'productType',
  }),


// -----Rating Filter----- //
  refinementList({
    container: '#rating',
    attribute: 'rating',
    limit: 4,
    showMore: true,
    sortBy: ['count:asc'],
  }),



    hits({
      container: '#hits',
      templates: {
          item(hit, params) {
          const { html, components } = params;
          return html`
          <a href="${hit.link}" rel="noreferrer noopener"
           class="${cx('aa-ItemLink', hit.objectID)}">
           <div class="product-card product">
            <div>
                <div >
                    <img class="hit-image" src="${hit.image}" alt="${hit.title}"/>
                </div>
                <div >
                    <div >
                        <div class="book-name">
                            ${hit.title}
                        </div>

                        <div >
                        <a href="/products/search?author=${hit.author}">${hit.author}</a>
                    </div>

                        <div class="price">
                        ${hit.price} $ 
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </a>
          `;
        },
      },
    }),

  ]) ;
    
  search.start();
  
// Set the InstantSearch index UI state from external events.
function setInstantSearchUiState(indexUiState) {
    search.setUiState(uiState => ({
      ...uiState,
      [indexName]: {
        ...uiState[indexName],
        // We reset the page when the search state changes.
        page: 1,
        ...indexUiState,
      },
    }));
  }

//   // Return the InstantSearch index UI state.
function getInstantSearchUiState() {
  const uiState = instantSearchRouter.read();

  return (uiState && uiState[indexName]) || {};
}

  
  const searchPageState = getInstantSearchUiState();
  
  let skipInstantSearchUiStateUpdate = false;
  // const { setQuery } = autocomplete({
  //   container: '#autocomplete',
  //   placeholder: 'Search for products',
  //   detachedMediaQuery: 'none',
  //   initialState: {
  //     query: searchPageState.query || '',
  //   //   query: new URL(window.location).searchParams.get('q') ?? '',
  //   },
  //   onSubmit({ state }) {
  //     setInstantSearchUiState({ query: state.query });
  //   },
  //   onReset() {
  //     setInstantSearchUiState({ query: '' });
  //   },
  //   onStateChange({ prevState, state }) {
  //     if (!skipInstantSearchUiStateUpdate && prevState.query !== state.query) {
  //       setInstantSearchUiState({ query: state.query });
  //     }
  //     skipInstantSearchUiStateUpdate = false;
  //   },
  // })
  
  // This keeps Autocomplete aware of state changes coming from routing
  // and updates its query accordingly
  // window.addEventListener('popstate', () => {
  //   skipInstantSearchUiStateUpdate = true;
  //   setQuery(search.helper?.state.query || '');
  // });


  function getInstantSearchUrl(indexUiState) {
    return search.createURL({ [indexName]: indexUiState });
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
    limit: 6,
    // getSearchParams({state}) {
    //   return {
    //     hitsPerPage: state.query ? 3 : 5
    // };
    // },
    transformSource({ source }) {
        return {
            ...source,

          //   onSelect({item}) {
          //     // Assuming the `setSearchState` function updates the search page state.
          //     setSearchState({query: item.query});
          // },

            // getItemUrl({item}) {
            //   return `/products/search?q=${item.query}`;

            // },
       

        onSelect({ setIsOpen, setQuery, item, event }) {
            onSelect({
              setQuery,
              setIsOpen,
              event,
              query: item.label,
            });
          },

          getItems(params) {
            // We don't display Query Suggestions when there's no query.
            if (params.state.query) {
              return [];
            }
    
            return source.getItems(params);
          },
        templates: {
          ...source,
       
          header({html}) {
            return html`
            <span class="aa-SourceHeaderTitle">Recent Search</span>
            <div class="aa-SourceHeaderLine"></div>
            `;
        },
            
        item(params) {
          const {item, html} = params;
                  const code = encodeURIComponent(`${indexName}[query]`);
                  return html`<a class="aa-ItemLink" href="/products/search?${code}=${item.label}">
                      ${source.templates.item(params).props.children}
                  </a>`;
        },

        },
      };
    },
  });



    const querySuggestionsPlugin = createQuerySuggestionsPlugin({
    searchClient,
    indexName: suggestionsIndexName,
    categoryAttribute: [
        'books',
        'facets',
        'exact_matches',
        'hierarchicalCategories.lvl0',
      ],
    getSearchParams({state}) {
      return {
        hitsPerPage: state.query ? 3 : 5
    };
    },
    transformSource({source, setSearchState}) 
     {
        return {
            ...source,
            sourceId: 'querySuggestionsPlugin',

            onSelect({item}) {
              // Assuming the `setSearchState` function updates the search page state.
              setSearchState({query: item.query});
          },

            getItemUrl({item}) {
              return `/products/search?q=${item.query}`;

            },
            // onSelect({ setIsOpen, setQuery, event, item }) {
            //   onSelect({
            //     setQuery,
            //     setIsOpen,
            //     event,
            //     query: item.query,
            //   });
            // },

            getItems(params) {
              // We don't display Query Suggestions when there's no query.
              if (!params.state.query) {
                return [];
              }
      
              return source.getItems(params);
            },
            
            templates: {
          

                header({html}) {
                    return html`
                    <span class="aa-SourceHeaderTitle">Popular Suggestions</span>
                    <div class="aa-SourceHeaderLine"></div>
                    `;
                },
                item(params) {
                  const {item, html} = params;
                  const code = encodeURIComponent(`${indexName}[query]`);
                  return html`<a class="aa-ItemLink" href="/products/search?${code}=${item.query}">
                      ${source.templates.item(params).props.children}
                  </a>`;
               
                },
            },
        };
    },
});


    autocomplete({
      container: '#autocomplete',
      placeholder: 'Enter your Author, Title, ISBN',
      openOnFocus: true,
      plugins: [ recentSearchesPlugin , querySuggestionsPlugin , redirectUrlPlugin ],
      initialState: {
        // This uses the `search` query parameter as the initial query
        query: new URL(window.location).searchParams.get('q') ?? '',
    },
      getSources({query , setQuery, refresh, setContext}) {
        return [{
            sourceId: 'products',
            getItemUrl({ item }) {
              return item.url;
            },
            getItems() {
                return getAlgoliaResults({
                    searchClient,
                    queries: [{
                        indexName,
                        query,
                        params: {
                            hitsPerPage: 4,
                            attributesToSnippet: ['title:15', 'author:10'],
                            snippetEllipsisText: '…', query,
                          },
                    }],
                    // You can now use `state.context.nbProducts`
                    // anywhere where you have access to `state`.
                    transformResponse({results, hits}) {
                        setContext({
                            nbProducts: results[0].nbHits,
                        });
                        return hits;
                    },
                });
            },
            templates: {
              header({html, state}) {
                  return html`
                      <span class="aa-SourceHeaderTitle">Products</span>
                      <div class="aa-SourceHeaderLine"></div>
                  `;
              },
                  noResults({state, html}) {
                      return html`
                          <div>
                              No results for "${state.query}".
                          </div>
                      `;
                  },
              item({ html, item, components }) {
                  return ProductItem({ html, hit: item, components });
              },
          },
          getItemUrl({item}) {
              return `http://www.awesomebooks.loc/${item.link}`;
          },

       
      }];
  },
  render({elements, render, html}, root) {
      const {recentSearchesPlugin , querySuggestionsPlugin, products} = elements;
      render(
          html`
              <div class="aa-PanelLayout aa-Panel--scrollable">
                  <div class="aa-PanelSections">
                      <div class="aa-PanelSection aa-PanelSection--left">
                      ${recentSearchesPlugin} ${querySuggestionsPlugin}
                      </div>
                      <div class="aa-PanelSection aa-PanelSection--right">
                          ${products}
                      </div>
                  </div>
              </div>`,
          root
        );
      },
  });

  