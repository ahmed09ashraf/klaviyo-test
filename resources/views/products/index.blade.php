@extends('layouts.app')

@section('title')Algolia @endsection

@section('content')
<main class="py-4">



            <header class="header">
                <div id="autocomplete"></div>
            <!-- <div id="searchBox"></div>   -->
                <div class="container-fluid" >
                    <div class="row ">
                       
                        <div id="pagination"></div>
                        <!-- Products content -->
                        <div class=" col-sm-12">
                            
                            
                            <div class="row">
                                <div id="hits"></div>
                            </div>
                            <div class="col-md-3 col-sm-12 sidebar">
                               
                                <div class="filter-widget" id="categories"  style="visibility: hidden;"></div>
                            </div>
                            <div class="filter-widget" id="rating-menu"  style="visibility: hidden;"></div>

                        </div>  
                        <div class="filter-widget" id="format-select" style="visibility: hidden;"></div>
                        <div class="filter-widget" id="type" style="visibility: hidden;"></div>
                        <div class="filter-widget" id="rating" style="visibility: hidden;"></div>
                        
                    </div>
                </div>
            </header>
    </main> 
@endsection