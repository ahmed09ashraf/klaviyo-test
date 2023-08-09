import algoliasearch from 'algoliasearch/lite';
import instantsearch from 'instantsearch.js';
import historyRouter from 'instantsearch.js/es/lib/routers/history';
import {
  searchBox,
  hierarchicalMenu,
  hits,
  pagination,
} from 'instantsearch.js/es/widgets';
import { autocomplete } from '@algolia/autocomplete-js';
import { createLocalStorageRecentSearchesPlugin } from '@algolia/autocomplete-plugin-recent-searches';
import { connectSearchBox } from 'instantsearch.js/es/connectors';

import '@algolia/autocomplete-theme-classic';




// initiliaze instantsearch
const searchClient = algoliasearch(
"UAYG2IU3S4",
"817841dbb829c46702f2a69a0da0d48f"
);

// const instantSearchRouter = historyRouter();
// const virtualSearchBox = connectSearchBox(() => {});

const search = instantsearch({
    indexName: "books",
    container:"#product" ,
    // routing: instantSearchRouter,
    searchClient
});



search.addWidgets([
    instantsearch.widgets.searchBox({
        container: '#searchBox',
        placeholder: 'Search for products',
        showSubmit: false,
    }),


    instantsearch.widgets.menu({
        container: '#categories',
        attribute: 'categories',
        limit: 6,
        sortBy: ['count:desc', 'name:asc'],
    }),


    instantsearch.widgets.hits({
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

console.log(search);


// ----Auto Complete---- //

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


