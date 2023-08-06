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
    <title>Algolia</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    

     <!-- Algolia Search API Client -->
     <script src="https://unpkg.com/algoliasearch@4.0.0/dist/algoliasearch-lite.umd.js"></script>
    
     
     <!-- InstantSearch.js -->
     <script src="https://unpkg.com/instantsearch.js@4.56.8/dist/instantsearch.production.min.js"></script>
    
</head>
<body>
<main>
      <div class="left-column">
      </div>

        <!-- <div class="right-column" id="hits"></div> -->
        <!-- <div id="pagination"></div> -->
</main>


<!-- <div id="test-widget"></div> -->
        <div class="dropdown">
            <div   class="dropbtn"  onclick="myFunction()">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                </svg>
            </div>
            <div id="myDropdown"  class="dropdown-content"  >

            <div id="searchBox"></div>
            <div id="autocomplete"></div>

                <div class="container-fluid" >
                    <div class="row ">

                        <!-- Sidebar content -->
                        <div class="col-md-4 col-sm-12 sidebar">
                        <p class="search-title">CATEGORIES</p>
                        <div class="filter-widget" id="categories"></div>
                            <ul>
                                <li> <i class="fa fa-search"></i>First</li>
                                <li><i class="fa fa-search"></i>Second</li>
                                <li><i class="fa fa-search"></i>Third</li>
                                <li><i class="fa fa-search"></i>Fourth</li>
                                <li><i class="fa fa-search"></i>Fifth</li>

                            </ul>
                        </div>

                        <!-- Products content -->
                        
                        <div class="col-md-8">
                        <p class="search-title">PRODUCTS</p>
                            <!-- <div class="arrow">
                                    <i class="arrow-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M15 6l-6 6l6 6"></path>
                                    </svg>
                                    </i>

                                    <i class="arrow-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 6l6 6l-6 6"></path>
                                        </svg>
                                    </i>
                            </div> -->

                   
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


    <script src="{{ asset('assets/js/search.js') }}"></script>
    <!-- <script src="{{ mix('js/search.js') }}"></script> -->

</body>
</html>
