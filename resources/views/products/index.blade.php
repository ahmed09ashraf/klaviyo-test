<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
{{--    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">--}}


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding: 10px;
        }

        b{
            margin-left:50px ;
        }

        /* Dropdown Button */
        .dropbtn {
            background-color: #dddddd;
            color: grey;
            padding: 10px;
            width: 70px;
            font-size: 16px;
            border: none;
            cursor:pointer ;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: #e2e8f0 ;
        }

        /* The search field */
        #myInput {
            box-sizing: border-box;
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 45px;
            border: none;
            border-bottom: 1px solid #ffb243;
            width:98%;
        }

        /* The search field when it gets focus/clicked on */
        #myInput:focus {outline: 3px solid #ffb243;}

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            /* display: none; */
            position: absolute;
            background-color: #f9f9f9;
            height:100px;
            width: 100%;
            border: 1px solid #ddd;
            z-index: 999;
            transform: translateY(-10px);
            opacity: 0;
            visibility: hidden;
            top: 100%;
            left: 0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            padding: 20px;
            box-sizing: border-box;
            transition: transform 0.3s ease, opacity 0.3s ease, visibility 0s linear 0.3s;
        }


        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            opacity: 1;
            visibility: visible;
            height:620px ;
            transform: translateY(0);
            transition-delay: 0s, 0s, 0s;
        }


        .search-title {
            font-size: 18px;
            font-weight: bold;
            border-bottom: 0.8px solid #ffb243;
        }

        ul{
        border-right: #ffb243 2px solid;
        width: 100%;
        margin-right: 80px;
        margin-top: -10px;
        }
        li{
            list-style: none;
            font-weight: bold;
            cursor : pointer;
            padding : 10px ;
            margin :10px ;
        }

        li:hover{
            background-color: #ffb243;
        }

        .arrow{
            display: flex;
            justify-content: space-between;
        }

        .arrow-left , .arrow-right {
            cursor: pointer;
        }

        .arrow-left :hover , .arrow-right :hover{
            color :#ffb243 ;
        }

        .product{
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
        }
        .product:hover{
            border-radius: 5%;
            background-color: #ffb243;
            cursor: pointer;
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .product:focus{
            outline: none;
            transform: scale(1.05);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }



    @media (max-width: 768px) {

        *{
            padding:2px ;
            margin:2px ;
        }

        .sidebar {
           text-align: start;
           font-size: 12px;
        }

        #myInput {
            margin-bottom: 10px ;
            padding: 10px;
        }


        ul{

            border:none ;
        }
        li{
            padding:5px ;
            margin:2px ;
        }
        .search-title{
            font-size: 14px ;
            text-align: start;
        }

        .dropdown {
            width: 100%;
        }
        .dropdown-content{
            height:auto;
            text-align: center;
            border: none;
            padding: 0px;
            margin: 0px;
        }

        .product{
            width: 100%;
            font-size: 14px ;
            display: flex;
            flex-direction: row;
            align-items: center;
            margin: 0px;
        }

        .arrow{
            display: none;
        }

        img{
            /* min-height: 20px;
            max-height: 30px; */
            height : 80px ;
            width: 120px;
        }

        .book-name {
            font-size: 13px ;
            font-weight: bold;
        }

        .author-name , .price {
            display:none  ;
        }
    


}


    </style>

</head>
<body>


</div>

        <div class="dropdown">
            <div   class="dropbtn"  onclick="myFunction()">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                </svg>
            </div>

            <div id="myDropdown"  class="dropdown-content"  >
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">

                <div class="container-fluid" >
                    <div class="row ">

                        <!-- Sidebar content -->
                        <div class="col-md-4 col-sm-12 sidebar">
                            <ul>
                                <p class="search-title">POPULAR SUGGESTIONS</p3>
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
                            <div class="arrow">
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
                            </div>
                            <div class="row">

                                <div class="col-md-3 col-sm-6">
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97805/9780571376483.jpg" alt="Demon Copperhead">
                                        <h5 class="book-name">Demon Copperhead</h5>
                                        <i class="author-name">xx</i>
                                        <b class="price">12 $</b>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781786892737.jpg" alt="The Midnight Library">
                                        <h5 class="book-name">The Midnight Library</h5>
                                        <i class="author-name">xx</i>
                                        <b class="price">24 $</b>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97808/9780861546732.jpg" alt="The Way I Used to Be">
                                        <h5 class="book-name">The Way I Used to Be</h5>
                                        <i class="author-name">xx</i>
                                        <b class="price">15 $</b>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-card product">
                                    <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781728205489.jpg" alt="If He Had Been with Me">
                                        <h5 class="book-name">If He Had Been with Me</h5>
                                        <i class="author-name">xx</i>
                                        <b class="price">14 $</b>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

     
       


        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
        </script>

</body>
</html>
