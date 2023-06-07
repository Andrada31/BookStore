<?php
require_once "server.php";

if(isset($_POST["login"])) {
  unset($error);
  $error = "";
  $email = $conn->real_escape_string(stripslashes(strip_tags($_POST["email"])));
  $password = $conn->real_escape_string(stripslashes(strip_tags($_POST["password"])));
  // $hashedPass = password_hash($password, PASSWORD_DEFAULT);
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if($result->num_rows == 0)
    $error = "There is no account created with this email, try signing up.";
  else if($result->num_rows == 1 && password_verify($password, $row['pass']))
    header('Location: myBooks.html');
  if($error != "")
    echo $error;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="images/book2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <button class="btn search-button" type="button" onclick="searchElements()">
                            <img width="30px" height="30px" src="images/search.png" alt="Search">
                        </button>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="myBooks.html">My Books</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Sign Up</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="#" role="button">Login</a>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="index.php">
                        BookStore
                    </a>

                </div>
            </div>
        </nav>
        <!-- Navbar ending -->


        <div class="container-fluid" id="container-form">
            <form id="form" method="POST">
                <div>
                    <h1>Log in</h1>
                </div>
                <div class="formInput">
                    <label>E-mail</label>
                    <input placeholder="E-mail" type="email" name="email" required>
                </div>
                <div class="formInput">
                    <label>Password</label>
                    <input placeholder="Password" type="password" name="password" required>
                </div>
                <input id="submit" type="submit" name="login" value="Log in">
                <div class="changePage">
                    <p>Don't have an account?</p>
                    <a href="./register.php">Sign up</a>
                </div>
            </form>
        </div>

    </div><!--end main section-->



</body>

</html>