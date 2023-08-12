@extends('layouts.app')

@section('title')Algolia @endsection

@section('content')

        <div class="dropdown">
            <div   class="dropbtn fa fa-search"  onclick="dropDown()" aria-hidden="true">

        </div>

        <div id="myDropdown"  class="dropdown-content"  >

        <header class="header">
            <div id="autocomplete"></div>
        </header>
            <!-- <div id="searchBox"></div>     -->

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
 
@endsection