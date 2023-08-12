import algoliasearch from 'algoliasearch/lite';
import instantsearch from 'instantsearch.js';
import {  searchBox,  menu, hierarchicalMenu,  hits,  pagination,} from 'instantsearch.js/es/widgets';
import { autocomplete , getAlgoliaResults } from '@algolia/autocomplete-js';
import searchInsights from 'search-insights';
import historyRouter from 'instantsearch.js/es/lib/routers/history';
import { createQuerySuggestionsPlugin } from '@algolia/autocomplete-plugin-query-suggestions';
// import { createLocalStorageRecentSearchesPlugin } from '@algolia/autocomplete-plugin-recent-searches';

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
          item(item, { html, components }) {
            return html`
            <div class="col-md-3 col-sm-6">
              <div id="product" class="product-card product">
              <p>
                <img class="img-fluid" style="min-height: 130px; max-height: 200px;" src="${item.image}" alt="${item.title}">
              </p>
                <div class="book-name">
                  ${components.Highlight({ hit:item, attribute: 'title' })}
                </div>
                <i class="author-name">
                  ${components.Highlight({ hit:item, attribute: 'author' })}
                </i>
                 <b class="price">
                  ${item.price}
                </b>
              </div>
            </div>
            `;
          },
        },
      }),

    ]) ;
    
    search.start();

    const querySuggestionsPlugin = createQuerySuggestionsPlugin({
      searchClient,
      indexName: 'books_query_suggestions',
      getSearchParams({ state }) {
        return { hitsPerPage: state.query ? 5 : 10 };
      },
      categoryAttribute: [
        'books',
        'facets',
        'exact_matches',
        'categories',
      ],
      itemsWithCategories: 2,
      categoriesPerItem: 2,



      transformSource({ source }) {
        return {
          ...source,
          getItemUrl({ item }) {
            return `/search?q=${item.query}`;
          },
          templates: {
            item(params) {
              const { item, html } = params;
    
              return html`<a class="aa-ItemLink" href="/search?q=${item.query}">
                ${source.templates.item(params).props.children}
              </a>`;
            },
          },
        };
      },





    });

    // const recentSearchesPlugin = createLocalStorageRecentSearchesPlugin({
    //   key: 'RECENT_SEARCH',
    //   limit: 5,
    // });

// ----Auto Complete---- //
    autocomplete({
      container: '#autocomplete',
      placeholder: 'Search for books',
      openOnFocus: true,
      insights: true,
      plugins: [querySuggestionsPlugin /*, recentSearchesPlugin*/],
      getSources({ query }) {
        return [
          {
            sourceId: 'books_query_suggestions',
            getItems() {
              return getAlgoliaResults({
                searchClient,
                queries: [
                  {
                    indexName: 'books',
                    query,
                    params: {
                      hitsPerPage: 5,
                      attributesToSnippet: ['title:5'],
                      snippetEllipsisText: '…',
                    },
                  },
                ],
              });
            },
            templates: {
              item({item,  html, components }){
                return html`<div class="aa-ItemWrapper">
                  <div class="aa-ItemContent">
                    
                    <div class="aa-ItemContentBody">
                      <div class="aa-ItemContentTitle">
                        ${components.Highlight({
                          hit: item,
                          attribute: 'title',
                        })}
                      </div>
                    </div>
                  </div>
                </div>`;
              },

              noResults() {
                return 'No results.';
              },
            },

            getItemUrl({ item }) {
              return item.url;
            },
          },
        ];
      },
    })