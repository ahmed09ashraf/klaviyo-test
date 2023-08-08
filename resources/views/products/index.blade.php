<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/reset-min.css') }}">
    <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/instantsearch.css@7/themes/satellite-min.css"
    /> -->

    <title>Algolia</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    

     <!-- Algolia Search API Client -->
     <script src="https://unpkg.com/algoliasearch@4.0.0/dist/algoliasearch-lite.umd.js"></script>
    
     
     <!-- InstantSearch.js -->
     <script src="https://unpkg.com/instantsearch.js@4.56.8/dist/instantsearch.production.min.js"></script>
    
</head>
<body>
        <div class="dropdown">
            <div   class="dropbtn fa fa-search"  onclick="myFunction()" aria-hidden="true">

        </div>

        <div id="myDropdown"  class="dropdown-content"  >

            <div id="searchBox">

            </div>
            <!-- <div id="autocomplete"></div> -->

                <div class="container-fluid" >
                    <div class="row ">

                        <!-- Sidebar content -->
                        <div class="col-md-3 col-sm-12 sidebar">
                            <p class="search-title">CATEGORIES</p>
                            <div class="filter-widget" id="categories"></div>
                        </div>

                        <!-- Products content -->
                        
                        <div class="col-md-9 col-sm-12">
                            <p class="search-title">PRODUCTS</p>
                            
                            <div class="row">
                                <div id="hits"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="module" src="{{ asset('assets/js/search.js') }}"></script>
    <!-- <script src="{{ mix('js/search.js') }}"></script> -->
<script>function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>