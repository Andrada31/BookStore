<?php
include "server.php";
$row;
if (isset($_GET['bookId'])) {
    $bookId = $_GET['bookId'];

    $sql = "SELECT * FROM books WHERE bookID = '$bookId'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
} else header('Location: 404.html')
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (!isset($row)) echo "Book";
            else echo $row["title"] ?></title>
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
        <a class="sidenav-brand" style="font-size: 46px;" href="index.php">
            End&nbsp;of&nbsp;Story
            <img src="images/book2.png" alt="logo" width="130px" height="120px" style="margin-top: 30px;">
        </a>
        <br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&nbsp;&nbsp;&nbsp;&nbsp;&#8652;</a>
        <a class="active" href="#top">Home</a>
        <a href="#Mem">Memories</a>
        <a href="#quoteC">Quotes</a>
        <a href="#timeline">Thoughts</a>
        <a href="#">Lines</a>
        <a href="#">Drawings</a>
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
                    <h2 class="article-title" style="color:white;"><a><?php if (!isset($row)) echo "Title of the book";
                                                                        else echo $row["title"] ?></a></h2>
                    <h4 class="article-author" style="color:gray;margin-bottom: 40px;">by <?php if (!isset($row)) echo "author";
                                                                                            else echo $row["author"] ?></h4>
                    <p><?php if (!isset($row)) echo "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                        the Semantics, a large language ocean. A small river named Duden flows
                        by their place and supplies it with the necessary regelialia. It is a paradisematic
                        country, in which roasted parts of sentences fly into your mouth.</p>

                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life One day however a small line of blind text by the name of Lorem
                        Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do
                        so, because there were thousands of bad Commas, wild Question Marks and devious
                        Semikoli, but the Little Blind Text didn't listen. </p>

                    <>She packed her seven versalia, put her initial into the belt and made herself on the way.
                        When she reached the first hills of the Italic Mountains, she had a last view back on
                        the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                        subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek,
                        then she continued her way.";
                        else echo $row["summary"] ?></p>

                    <div class="highlight">
                        <h4>Highlight</h4>
                        <p><?php if (!isset($row)) echo "Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                            language ocean. A small river named Duden flows by their place and supplies it with
                            the necessary regelialia";
                            else echo $row["highlight"] ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wrapper">
                        <div class="product-img">
                            <img src="images/<?php if (!isset($row)) echo "pic_1.jpg";
                                                else echo $row["image"] ?>">
                        </div>
                        <div class="product-info">
                            <div class="product-text">
                                <h1><?php if (!isset($row)) echo "Dune";
                                    else echo $row["title"] ?></h1>
                                <h2>by <?php if (!isset($row)) echo "Frank Herbert";
                                        else echo $row["author"] ?></h2>
                                <p>EPUB (Electronic Publication) is a widely adopted open standard file format for
                                    digital books and publications. It is designed to provide a consistent and versatile
                                    reading experience across various platforms.</p>
                            </div>
                            <div class="product-price-btn">
                                <img title="epub" style="height: 50px; width: 50px; margin-left:30px;" src="images/epub.png">
                                <a href="epubs/<?php if (!isset($row)) echo "dune.epub";
                                                else echo $row["epub"] ?>"><button type="button">download</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <blockquote class="quote">
                        <p>&ldquo;<?php if (!isset($row)) echo "She packed her seven versalia, put her initial into the belt and made herself
                            on the way. When she reached the first hills of the Italic Mountains, she had a last
                            view back on the skyline of her hometown Bookmarksgrove";
                                    else echo $row["quote"] ?> &rdquo; <cite>&mdash; <?php if (!isset($row)) echo "author";
                                                                                                                                                else echo $row["author"] ?></cite></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

</body>