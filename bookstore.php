<?php 
    require 'dbwork.php';
    $books = $obj->books_list();
 ?>

<!DOCTYPE html>
<html lang="en">

<?php include('components/head.php'); ?>

<body>

    <?php include('components/navbar.php') ?>
    <div class="book-site">

        <section class="search-container">
                <!-- <div class="form-outline from-floating-label">
                    <input type="search" name="search" id="form1" class="bookSearchEvent  form-control input-border-bottom" />
                    <label class="placeholder " for="form1">Search</label>
                </div> -->
                <div class="search-bar">
                    <input type="text" name="search" class="bookSearchEvent search-input">
                    <label for="search" class="search-label"> Search </label>
                </div>
            <div class="search-result">
                <ul>
                    
                </ul>
            </div>
        </section>

        <section class="library">
            <div class="container-fluid my-5">
                <h1 class="tex-center fw-bold display-1 md-3"><span class="text-danger">NEW</span> books</h1>
                <div class="row mt-5 books-container ">
                    <div class="owl-carousel allBooks owl-theme">
                        <?php if(isset($books) && count($books) > 0){ 
                            foreach ($books as $key => $book) {?>
                                <div class="item  md-4">
                                    <div class="card border-0 shadow">
                                        <img src="uploads/<?php echo $book['book_cover']; ?>" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <h4><?php echo $book['title']; ?></h4>
                                            <div class="card-footer">
                                                <small class="text-muted"><?php echo $book['author'] ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } 
                        }
                    ?>
                    </div>
                </div>
            </div>
        </section>

<!-- 
        <section class="library">
            <div class="container-fluid my-5">
                <h1 class="tex-center fw-bold display-1 md-3"><span class="text-danger">NEW</span> books</h1>
                <div class="row mt-5">
                    <div class="owl-carousel owl-theme">
                        <div class="item  md-4">
                            <div class="card border-0 shadow">
                                <img src="./assets/img/1-1582693.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>book 1</h4>
                                    <div class="card-footer">
                                        <small class="text-muted">author Name</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item md-4">
                            <div class="card border-0 shadow">
                                <img src="./assets/img/63a311034c59b76e9a556e06.png" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>book 2</h4>
                                    <div class="card-footer">
                                        <small class="text-muted">author Name</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item md-4">
                            <div class="card border-0 shadow">
                                <img src="./assets/img/63a2afd64c59b7555118567f.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>book 3</h4>
                                    <div class="card-footer">
                                        <small class="text-muted">author Name</small>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item md-4">
                            <div class="card border-0 shadow">
                                <img src="./assets/img/1-1582708.jpeg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>book 4</h4>
                                    <div class="card-footer">
                                        <small class="text-muted">author Name</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item md-4">
                            <div class="card border-0 shadow">
                                <img src="./assets/img/63a3a1a14c59b73c573b6ea8.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>book 5</h4>
                                    <div class="card-footer">
                                        <small class="text-muted">author Name</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item md-4">
                            <div class="card border-0 shadow">
                                <img src="./assets/img/news-logo-2.jpeg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>book 26</h4>
                                    <div class="card-footer">
                                        <small class="text-muted">author Name</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item md-4">
                            <div class="card border-0 shadow">
                                <img src="./assets/img/72d731ce-261a-4aa3-812d-5b04428fc509_16x9_600x338.jpeg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>book 7</h4>
                                    <div class="card-footer">
                                        <small class="text-muted">author Name</small>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->

    </div>

    <footer class="footer-final">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php include('components/script.php') ?>
</body>

</html>