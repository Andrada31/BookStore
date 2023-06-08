<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBooks</title>
    <link rel="icon" type="image/x-icon" href="images/book2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_book.css">
    <script src="script.js"></script>
</head>

<body onload="myFunction()" style="margin:0;">


    <!--Sidenav-->
    <div id="mySidenav" class="sidenav">
        <a class="sidenav-brand" style="font-size: 46px;" href="localhost/Bookstore/index.php">
            End&nbsp;of&nbsp;Story
            <img src="images/book2.png" alt="logo" width="130px" height="120px" style="margin-top: 30px;">
        </a>
        <br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&nbsp;&nbsp;&nbsp;&nbsp;&#8652;</a>
        <a class="active" href="#top">Home</a>
        <a href="#description">Description</a>
        <a href="#books">Books</a>
        <a href="#article">Discover</a>
    </div>

    <div id="main">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <span id="menu" onclick="openNav()">&#8652;</span>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Book
                                categories</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link</a></li>
                                <li><a class="dropdown-item" href="#">Another link</a></li>
                                <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-lg-flex ms-lg-auto">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn search-button" type="button" onclick="searchBooks()">
                            <img width="30px" height="30px" src="images/search.png" alt="Search">
                        </button>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">My Books</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" role="button">Login</a>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="index.php">
                        BookStore
                    </a>

                </div>
            </div>
        </nav>
        <!-- Navbar ending -->

        <!--book description-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" id="article-text">
                    <h2 class="article-title" style="color:white;"><a>My Books</a></h2>
                </div>
                <div class="col-lg-6">
                    <h1 style="font-family:'Oooh Baby';font-size: 70px; margin-top:90px;">To be continued...</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <blockquote class="quote">
                        <p>&ldquo;She packed her seven versalia, put her initial into the belt and made herself
                            on the way. When she reached the first hills of the Italic Mountains, she had a last
                            view back on the skyline of her hometown Bookmarksgrove &rdquo; <cite>&mdash; Jean
                                Smith</cite></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

</body>