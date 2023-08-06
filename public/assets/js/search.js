


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}



// initiliaze instantsearch
const searchClient = algoliasearch(
"UAYG2IU3S4",
"817841dbb829c46702f2a69a0da0d48f"
);

const search = instantsearch({
indexName: "books",
container:"#product" ,
searchClient
});


search.addWidgets([
    instantsearch.widgets.searchBox({
        container: '#searchBox',
        placeholder: 'Search for products',
        showSubmit: false,
    }),


  instantsearch.widgets.hierarchicalMenu({
    container: '#categories',
    attributes:  [
        "hierarchicalCategories.lvl0" ,
        // "hierarchicalCategories.lvl1" ,
        // "hierarchicalCategories.lvl2" ,
    ],
  }),




instantsearch.widgets.hits({
    container: '#hits',
    templates: {
      item : data => `
      <div class="col-md-3 col-sm-6">
      <div id="product" class="product-card product">
          <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="${data.image}" alt="Demon Copperhead">
             <h6 class="book-name">
                ${instantsearch.highlight({
                    attribute : "title" , 
                    hit : data
                        })
                    }
            </h6>
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
          , empty:"No Resultssss" ,
  
              },
  
  
          },
      )

]) ;

search.start();

console.log(search);





