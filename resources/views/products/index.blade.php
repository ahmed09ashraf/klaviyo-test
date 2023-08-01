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
            width:100% ;
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
            border-bottom: 1px solid #ddd;
            width:1200px;
        }

        /* The search field when it gets focus/clicked on */
        #myInput:focus {outline: 3px solid #ddd;}

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            /* display: none; */
            position: absolute;
            background-color: #f9f9f9;
            height:100px;
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
            display: block;
            opacity: 1;
            visibility: visible;
            height:620px ;
            transform: translateY(0);
            transition-delay: 0s, 0s, 0s;
        ;}

        ul{
        border-right: #ddd 2px solid;
        width: 100%;
        margin-right: 80px;
        }
        li{
            list-style: none;
            font-weight: bold;
            cursor : pointer;
            padding : 10px ;
            margin :10px ;
        }

        li:hover{
            background-color: #718096;
        }

        .arrow{
            display: flex;
            justify-content: space-between;
        }

        .arrow-left , .arrow-right {
            cursor: pointer;
        }

        .arrow-left :hover , .arrow-right :hover{
            color :grey ;
        }


        .nav{
        display :none;
            transform: translateY(-10px);
            /* opacity: 0;
            visibility: hidden; */
            top: 100%;
            left: 0;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            
            box-sizing: border-box;
            transition: transform 0.3s ease, opacity 0.3s ease, visibility 0s linear 0.3s;
            justify-content: space-between;
            flex-wrap: nowrap;
            position: absolute;
            width:100% ;
            height:600px ;
            background-color: red;
            margin :5px ;
            padding :10px ;
            overflow: hidden;
            z-index: 999;

        }

    </style>

</head>
<body>



<div   class="dropbtn"  onclick="myFunction()">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                </svg>
            </div>


<div class="nav" id="myNav">
                        <!-- Sidebar content -->
                        <div>
                            <ul>
                                <h2>Catalogue</h2>
                                <li>First</li>
                                <li>Second</li>
                                <li>Third</li>
                                <li>Fourth</li>
                                <li>Fifth</li>
                                <li>Sixth</li>
                                <li>Seventh</li>
                            </ul>

                        </div>

                        <!-- Products content -->
                        <div>

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

                                
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97805/9780571376483.jpg" alt="Demon Copperhead">
                                        <h5>Demon Copperhead</h5>
                                        <i>xx</i>
                                        <b>12 $</b>
                                    
                                </div>

                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781786892737.jpg" alt="The Midnight Library">
                                        <h5>The Midnight Library</h5>
                                        <i>xx</i>
                                        <b>24 $</b>
                                    
                                </div>

                                
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97808/9780861546732.jpg" alt="The Way I Used to Be">
                                        <h5>The Way I Used to Be</h5>
                                        <i>xx</i>
                                        <b>15 $</b>
                                   
                                </div>

                          
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781728205489.jpg" alt="If He Had Been with Me">
                                        <h5>If He Had Been with Me</h5>
                                        <i>xx</i>
                                        <b>14 $</b>
                                </div>
                               

                              
                                  <!-- <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97805/9780571365425.jpg" alt="Beautiful World, Where Are You">
                                        <h5>Beautiful World, Where Are You</h5>
                                        <i>xx</i>
                                        <b>15 $</b>
                                   </div>
                               -->

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="product-card product">--}}
{{--                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97818/9781838770013.jpg" alt="The Beekeeper of Aleppo">--}}
{{--                                        <h5>The Beekeeper of Aleppo</h5>--}}
{{--                                        <i>xx</i>--}}
{{--                                        <b>15 $</b>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

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

                <div class="container-fluid">
                    <div class="row">

                        <!-- Sidebar content -->
                        <div class="col-md-3">
                            <ul>
                                <h2>Catalogue</h2>
                                <li>First</li>
                                <li>Second</li>
                                <li>Third</li>
                                <li>Fourth</li>
                                <li>Fifth</li>
                                <li>Sixth</li>
                                <li>Seventh</li>
                            </ul>

                        </div>

                        <!-- Products content -->
                        <div class="col-md-9">

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

                                <div class="col-md-4">
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97805/9780571376483.jpg" alt="Demon Copperhead">
                                        <h5>Demon Copperhead</h5>
                                        <i>xx</i>
                                        <b>12 $</b>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781786892737.jpg" alt="The Midnight Library">
                                        <h5>The Midnight Library</h5>
                                        <i>xx</i>
                                        <b>24 $</b>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="product-card product">
                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97808/9780861546732.jpg" alt="The Way I Used to Be">
                                        <h5>The Way I Used to Be</h5>
                                        <i>xx</i>
                                        <b>15 $</b>
                                    </div>
                                </div>

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="product-card product">--}}
{{--                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781728205489.jpg" alt="If He Had Been with Me">--}}
{{--                                        <h5>If He Had Been with Me</h5>--}}
{{--                                        <i>xx</i>--}}
{{--                                        <b>14 $</b>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="product-card product">--}}
{{--                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97805/9780571365425.jpg" alt="Beautiful World, Where Are You">--}}
{{--                                        <h5>Beautiful World, Where Are You</h5>--}}
{{--                                        <i>xx</i>--}}
{{--                                        <b>15 $</b>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="product-card product">--}}
{{--                                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97818/9781838770013.jpg" alt="The Beekeeper of Aleppo">--}}
{{--                                        <h5>The Beekeeper of Aleppo</h5>--}}
{{--                                        <i>xx</i>--}}
{{--                                        <b>15 $</b>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h1>Products</h1>
            <div class="row">
                    <div class="col-md-4 justify-content-around">
                        <div class="product-card product">
                            <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97805/9780571376483.jpg" alt="Demon Copperhead">
                            <h5>Demon Copperhead</h5>
                            <i>xx</i>
                            <b>12 $</b>
                        </div>

                    </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781786892737.jpg" alt="The Midnight Library">
                        <h5>The Midnight Library</h5>
                        <i>xx</i>
                        <b>24 $</b>
                    </div>

                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97808/9780861546732.jpg" alt="The Way I Used to Be">
                        <h5>The Way I Used to Be</h5>
                        <i>xx</i>
                        <b>15 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97817/9781728205489.jpg" alt="If He Had Been with Me">
                        <h5>If He Had Been with Me</h5>
                        <i>xx</i>
                        <b>14 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97802/9780241512449.jpg" alt="The Last Devil To Die">
                        <h5>The Last Devil To Die</h5>
                        <i>xx</i>
                        <b>19 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97805/9780571365425.jpg" alt="Beautiful World, Where Are You">
                        <h5>Beautiful World, Where Are You</h5>
                        <i>xx</i>
                        <b>15 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97800/9780008172145.jpg" alt="Eleanor Oliphant is Completely Fine">
                        <h5>Eleanor Oliphant is Completely Fine</h5>
                        <i>xx</i>
                        <b>11 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97813/9781398501874.jpg" alt="Legendborn">
                        <h5>Legendborn</h5>
                        <i>xx</i>
                        <b>13 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97813/9781398515697.jpg" alt="Seven Husbands of Evelyn Hugo">
                        <h5>Seven Husbands of Evelyn Hugo</h5>
                        <i>xx</i>
                        <b>21 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97818/9781838770013.jpg" alt="The Beekeeper of Aleppo">
                        <h5>The Beekeeper of Aleppo</h5>
                        <i>xx</i>
                        <b>15 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97814/9781472154668.jpg" alt="Where the Crawdads Sing">
                        <h5>Where the Crawdads Sing</h5>
                        <i>xx</i>
                        <b>18 $</b>
                    </div>
                </div>

                <div class="col-md-4 justify-content-around">
                    <div class="product-card product">
                        <img class="img-fluid" style="min-height: 130px;max-height: 200px;" src="https://images.awesomebooks.com/images/books/medium/97814/9781408726600.jpg" alt="Verity">
                        <h5>Verity</h5>
                        <i>xx</i>
                        <b>16 $</b>
                    </div>
                </div>

            </div>
        </div>


        <script>
            function myFunction() {
                document.getElementById("myNav").classList.toggle("show");
            }
        </script>

</body>
</html>
