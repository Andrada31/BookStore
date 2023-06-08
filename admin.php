<?php
include "server.php";
if (isset($_POST['addBook'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $summary = $_POST['summary'];
    $highlight = $_POST['highlight'];
    $quote = $_POST['quote'];

    $image = $_FILES['image'];
    $imageName = $_FILES['image']['name'];
    $epub = $_FILES['epub'];
    $epubName = $epub['name'];

    $error;

    $image_path = "images/" . basename($image["name"]);
    $epub_path = "epubs/" . basename($epub["name"]);

    $imageFileType = strToLower(pathinfo($image_path, PATHINFO_EXTENSION));
    $epubFileType = strToLower(pathinfo($epub_path, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" || $imageFileType != "jpeg" || $imageFileType != "png")
        $error = "Image file type is not supported";

    if ($epubFileType != "epub" || $epubFileType != "pdf")
        $error = "Epub file type is not supported";

    move_uploaded_file($image["tmp_name"], $image_path);
    move_uploaded_file($epub["tmp_name"], $epub_path);

    $sql = "SELECT bookID FROM books ORDER BY bookID DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows == 0)
        $lastId = 0;
    else
        $lastId = $row['bookID'] + 1;

    $sql = "INSERT INTO books(title, author, summary, highlight, quote, image, epub, bookID)
            VALUES('$title', '$author', '$summary', '$highlight', '$quote', '$imageName', '$epubName', '$lastId')";
    $conn->query($sql);
}

if (isset($_POST["deleteBook"])) {
    $bookId = $_GET["bookId"];
    $sql = "DELETE FROM books WHERE bookID = '$bookId'";
    $conn->query($sql);
}

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="icon" type="image/x-icon" href="images/book2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0faddc1af8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_book.css">
    <link rel="stylesheet" href="style_panel.css">
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
                            <a class="nav-link" href="#">My Books</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" role="button">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin.php" role="button">Admin</a>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="index.php">
                        BookStore
                    </a>

                </div>
            </div>
        </nav>
        <!-- Navbar ending -->

        <!--admin panel-->
        <div class="container-fluid">
            <div class="row">
                <div class="panel-text">
                    <h2 class="panel-title" style="color:white;"><a>Admin panel</a></h2>
                </div>


                <!-- <div class="container-fluid col-lg-4" id="container-form">
                    <form id="form" method="POST">
                        <div>
                            <h1>Add a new book</h1>
                        </div>
                        <div class="formInput">
                            <label>Title</label>
                            <input placeholder="E-mail" type="email" name="email" required>
                        </div>
                        <div class="formInput">
                            <label>Author</label>
                            <input placeholder="Password" type="password" name="password" required>
                        </div>
                        <div class="formInput">
                            <label>Category</label>
                            <input placeholder="Repeat password" type="password" name="rpassword" required>
                        </div>
                        <input id="submit" type="submit" name="signup" value="Add">
                        <div class="changePage">
                            <p>Already have an account?</p>
                            <a href="login.php">Sign in</a>
                        </div>
                    </form>
                </div> -->
            </div>
            <br><br><br>


            <!--table of books-->
            <div class="row">
                <div class="bookContainer container my-5-col-md-6">
                    <br>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Summary</th>
                                <th scope="col">Highlight</th>
                                <th scope="col">Quote</th>
                                <th scope="col">Image</th>
                                <th scope="col">Epub</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                                <tr>
                                    <td><?php echo $row['bookID'] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['author'] ?></td>
                                    <td><?php echo $row['summary'] ?></td>
                                    <td><?php echo $row['highlight'] ?></td>
                                    <td><?php echo $row['quote'] ?></td>
                                    <td><?php echo $row['image'] ?></td>
                                    <td><?php echo $row['epub'] ?></td>
                                    <td>
                                        <form method="POST" action="admin.php?bookId=<?php echo $row['bookID'] ?>">
                                            <button type="submit" name="deleteBook" class="btn btn-secondary btn-sm" href="#"><i class="fa-solid fa-trash" style="color: rgb(235, 172, 78);"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                            <tr>
                                <form method="POST" enctype="multipart/form-data">
                                    <td>
                                    </td>
                                    <td>
                                        <textarea style="resize: none;" rows="1" placeholder="Title" name="title"></textarea>
                                    </td>
                                    <td>
                                        <textarea style="resize: none;" rows="1" placeholder="Author" name="author"></textarea>
                                    </td>
                                    <td>
                                        <textarea style="resize: none;" rows="1" placeholder="Summary" name="summary"></textarea>
                                    </td>
                                    <td>
                                        <textarea style="resize: none;" rows="1" placeholder="Highlight" name="highlight"></textarea>
                                    </td>
                                    <td>
                                        <textarea style="resize: none;" rows="1" placeholder="Quote" name="quote"></textarea>
                                    </td>
                                    <td>
                                        <input type="file" name="image"></input>
                                    </td>
                                    <td>
                                        <input type="file" name="epub"></input>
                                    </td>
                                    <td class="icons">
                                        <button type="submit" name="addBook" class="btn btn-secondary btn-sm" href="#"><i class="fa fa-plus"></i></button>
                                        <!-- <button type="submit" name="editBook" class="btn btn-secondary btn-sm" href="#"><i class="fa-solid fa-pen-to-square" style="color: royalblue"></i></button>
                                        <button type="submit" name="editBook" class="btn btn-secondary btn-sm" href="#"><i class="fa-solid fa-trash" style="color: rgb(235, 172, 78);"></i></button> -->
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
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
        </div> <!--admin panel ending-->

    </div>

</body>