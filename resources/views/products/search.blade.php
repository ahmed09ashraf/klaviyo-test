@extends('layouts.app')

@section('title')Search @endsection

@section('content')

<div id="autocomplete" ></div>
<div id="pagination"></div>

<div class="search-container">
    <!-- Sidebar content -->
        <div class="col-md-2 col-sm-12 sidebar">
            
                            <h4 class="search-title">CATEGORIES</h4>
                            <div class="filter-widget" id="categories"></div>
                            <hr>
                            <h4 class="search-title">TYPE</h4>
                            <div class="filter-widget" id="type"></div>
                            <hr>
                            <h4 class="search-title">FORMAT</h4>
                            <div class="filter-widget" id="format-select"></div>
                            <hr>
                            <h4 class="search-title">Rating</h4>
                            <div class="filter-widget" id="rating"></div>
        </div>
        <div class="col-md-10 col-sm-12 sidebar">
        <div id="hits"></div>
        </div>
@endsection