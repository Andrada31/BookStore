<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookStore</title>
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



    <!--main section-->
    <div id="main">

        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/7.jpg" style="width:100%; opacity: 0.4;">
                    <div class="hero-text">
                        <h1>"I have hated the words and I have loved them and I hope, I have made them right."</h1>
                        <p>Markus Zusak</p>
                        <button class="hero-button">read more</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/9.jpg" style="width:100%; opacity: 0.4;">
                    <div class="hero-text">
                        <h1>"If I find in myself desires which nothing in this world
                            can satisfy, the only logical
                            explanation is that I was made for another world."</h1>
                        <p>C.S. Lewis</p>
                        <button class="hero-button">read more</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/8.jpg" alt="New York" class="d-block" style="width:100%;  opacity: 0.4;">
                    <div class="hero-text">
                        <h1>"I know that I have forgotten many things; have I now started to remember things that have
                            not
                            happened?"</h1>
                        <p>Susanna Clarke</p>
                        <button class="hero-button">read more</button>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

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
                        <input type="text" class="form-control" id="searchInput" placeholder="Search book titles">
                        <button class="btn search-button" type="button" onclick="searchBooks()">
                            <img width="30px" height="30px" src="images/search.png" alt="Search">
                        </button>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="myBooks.php">My Books</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Sign Up</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="login.php" role="button">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="admin.php" role="button">Admin</a>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="index.php">
                        BookStore
                    </a>

                </div>
            </div>
        </nav>
        <!-- Navbar ending -->

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
            <a href="#productContainer">Books</a>
            <a href="#article">Discover</a>
        </div>




        <div class="container p-5 my-5 bg-transparent text-white" id="description">
            <div id="searchResults"></div>
            <div class="highlight2">
                <h1 style="font-family:'Oooh Baby';font-size: 70px;">Description</h1>
                <p>Welcome to our beloved bookstore, a welcoming space for book enthusiasts of all kinds. Step into a
                    world
                    where stories come alive and imagination knows no bounds. Here, you'll find a carefully curated
                    collection of books that cater to a variety of interests and tastes.</p>

                <p> Our bookstore is a place where book lovers can gather, connect, and explore the wonders of
                    literature.
                    Whether you're in search of a captivating novel, an insightful non-fiction book, or a delightful
                    children's story, our shelves are filled with a diverse selection to satisfy every reader.</p>

                <p> Beyond being a destination for book purchases, our store serves as a community hub. Join us for
                    engaging
                    author events, lively book discussions, and creative workshops that foster a love for reading and
                    learning.</p>

                <p> Our dedicated staff is passionate about books and eager to assist you in finding your next great
                    read.
                    They are always available to offer recommendations, share their knowledge, and help you navigate our
                    shelves. So, take a moment to escape the outside world and immerse yourself in the cozy ambiance of
                    our
                    bookstore. Let the pages of a book transport you to new realms, introduce you to fascinating
                    characters,
                    and ignite your imagination. We invite you to discover the joy of reading and explore the literary
                    treasures that await within our doors.
                </p>
            </div>
        </div>


        <!-- Book gallery-->
        <div class="product-container" id="productContainer">
            <div class="row">
                <?php
                include "server.php";
                // Query to fetch data from the database
                $query = "SELECT bookID, title, author, image FROM books";

                // Execute the query
                $result = $conn->query($query);

                // Check if any rows are returned
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $title = $row['title'];
                        $author = $row['author'];
                        $image = $row['image'];
                        $bookId = $row['bookID'];

                        // Render the data in HTML
                        echo "<a href='book.php?bookId=$bookId' class=\"product-card\">";
                        echo '<div class="product-image">';
                        echo '<img src="images/' . $image . '" class="product-thumb" alt="' . $title . '">';
                        echo '<button class="card-btn">Add to My Books</button>';
                        echo '</div>';
                        echo '<div class="product-info">';
                        echo '<h2 class="product-title">' . $title . '</h2>';
                        echo '<p class="product-author">' . $author . '</p>';
                        echo '</div>';
                        echo '</a>';
                    }
                } ?>

                <!-- Book gallery ending -->

                <!--End article-->
                <div class="container-fluid">
                    <div class="row">
                        <article col-lg-8 id="article">

                            <div class="row">
                                <div class="col-lg-8" id="article-text">
                                    <h2 class="article-title"><a>Discover a chapter</a></h2>
                                    <p>There was no possibility of taking a walk that day. We
                                        had been wandering, indeed, in the leafless shrubbery
                                        an hour in the morning; but since dinner (Mrs. Reed, when
                                        there was no company, dined early) the cold winter wind
                                        had brought with it clouds so sombre, and a rain so penetrating, that further out-door
                                        exercise was now out of the
                                        question.</p>

                                    <p>I was glad of it: I never liked long walks, especially on
                                        chilly afternoons: dreadful to me was the coming home in
                                        the raw twilight, with nipped fingers and toes, and a heart
                                        saddened by the chidings of Bessie, the nurse, and humbled by the consciousness of my
                                        physical inferiority to Eliza,
                                        John, and Georgiana Reed.</p>

                                    <p>The said Eliza, John, and Georgiana were now clustered
                                        round their mama in the drawing-room: she lay reclined
                                        on a sofa by the fireside, and with her darlings about her
                                        (for the time neither quarrelling nor crying) looked perfectly happy. Me, she had
                                        dispensed from joining the
                                        group; saying, ‘She regretted to be under the necessity of
                                        keeping me at a distance; but that until she heard from Bessie, and could discover by
                                        her own observation, that I was
                                        endeavouring in good earnest to acquire a more sociable
                                        and childlike disposition, a more attractive and sprightly
                                        manner— something lighter, franker, more natural, as it were—she really must exclude me
                                        from privileges intended
                                        only for contented, happy, little children.’</p>
                                    <p>‘What does Bessie say I have done?’ I asked.</p>

                                    <p>‘Jane, I don’t like cavillers or questioners; besides, there is
                                        something truly forbidding in a child taking up her elders
                                        in that manner. Be seated somewhere; and until you can
                                        speak pleasantly, remain silent.’/p>

                                    <p>A breakfast-room adjoined the drawing-room, I slipped
                                        in there. It contained a bookcase: I soon possessed myself
                                        of a volume, taking care that it should be one stored with
                                        pictures. I mounted into the window-seat: gathering up my
                                        feet, I sat cross-legged, like a Turk; and, having drawn the
                                        red moreen curtain nearly close, I was shrined in double
                                        retirement.</p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="highlight">
                                        <h4>Chapter of the Day</h4>
                                        <p>The concept of introducing a new book chapter sample for each day offers a delightful
                                            way to engage with literature.
                                            It involves presenting readers with a taste of a new chapter every day, enticing
                                            them to continue their reading journey.
                                            Each day brings a fresh glimpse into the unfolding story, creating a sense of
                                            anticipation and curiosity. By introducing these chapter samples, readers can savor
                                            the progression of the narrative and discover the book's characters, plot twists,
                                            and themes gradually. It's an immersive experience that invites readers to savor the
                                            pleasure of storytelling, one chapter at a time.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row rp-b">
                                <div class="col-md-12 animate-box">
                                    <blockquote class="quote">
                                        <p>&ldquo;I can live alone, if self-respect, and circumstances require me so to do. I
                                            need not sell my soul to buy bliss. I have an inward treasure born with me, which
                                            can keep me alive if all extraneous delights should be withheld, or offered only at
                                            a price I cannot afford to give.&rdquo; <cite>&mdash; Charlotte Brontë
                                            </cite></p>
                                    </blockquote>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> <!--main section ending-->



            <script>
                function updateActiveSection() {
                    // Get the current scroll position
                    var scrollPosition = window.scrollY;

                    // Get all the sections in the side navigation
                    var sections = document.querySelectorAll(".sidenav a");

                    // Loop through each section
                    sections.forEach(function(section) {
                        var targetId = section.getAttribute("href").substring(1);
                        var targetElement = document.getElementById(targetId);

                        // Check if the target element exists and if it is in view
                        if ((scrollPosition === 0 && targetId === "top") || (targetElement && targetElement.offsetTop <= scrollPosition && (targetElement.offsetTop + targetElement.offsetHeight) > scrollPosition)) {
                            // Remove the active class from all sections
                            sections.forEach(function(section) {
                                section.classList.remove("active");
                            });

                            // Add the active class to the current section
                            section.classList.add("active");
                        }
                    });
                }

                // Add scroll event listener to the window
                window.addEventListener("scroll", updateActiveSection);
            </script>

</body>

</html>