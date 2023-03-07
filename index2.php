<?php
session_start();
if(isset($_SESSION['user_id'])){
    $mysqli = require __DIR__ . '/database.php';
    $sql = sprintf("SELECT * FROM `employee` WHERE id ={$_SESSION['user_id']}");
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

} 
// else{
    // header("Location: ./login.php");
// }

    // $name  = $_POST['username'];
    // $mysqli = require __DIR__ . "./database.php";
		// $namaye = $user['name'];
        // $namye_id = $_SESSION['user_id'];
        // $namaye = $_SESSION['name'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- carousell -->
    <link rel="stylesheet" href="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!-- carousell -->
    <!-- aos -->
    <link rel="stylesheet" href="./css/aos-master/dist/aos.css">
    <!-- aos -->
    <!-- font awesome -->
    <link rel="stylesheet" href="./css/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blooger</title>
</head>
<body>
    <!--------------Navigation----------------->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Blooger</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-item">
                    <li class="nav-link"><a href="#">Home</a></li>
                    <li class="nav-link"><a href="#">Category</a></li>
                    <li class="nav-link"><a href="#">Archive</a></li>
                    <li class="nav-link"><a href="#">Pages</a></li>
                    <li class="nav-link"><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                <a href="./index.php"><i class="fa fa-sign-in"></i></a>
                <a href="/series/logout.php"><i class="fa fa-sign-out":before></i></a>
            </div>
        </div>
    </nav>
    <!----X----------Navigation---------------X-->
    <!--------------Main site section----------------->
    <main>
        <!----X----------site title---------------X-->
        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3 style="font-size: 3rem;">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <?php echo "Welcome ". htmlspecialchars($_SESSION['name']); ?> 
                <?php else: ?>
                    <?php echo "Welcome Guest" ?>
                <?php endif; ?>
                </h3>
                <h1>Amazing place on earth</h1>
                <button class="btn">Explore</button>
            </div>
        </section>
        <!-- --------------------blog carousell--------------------- -->
        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./image/pexels-joey-lu-186537.jpg" alt="blog-1">
                            <div class="blog-title">
                                <h3>London fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./image/pexels-bich-tran-669996.jpg" alt="blog-1">
                            <div class="blog-title">
                                <h3>London fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./image/pexels-designecologist-1779487.jpg" alt="blog-1">
                            <div class="blog-title">
                                <h3>London fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./image/pexels-aayush-srivastava-1445653.jpg" alt="blog-1">
                            <div class="blog-title">
                                <h3>London fashion week's continued the evolution</h3>
                                <button class="btn btn-blog">Fashion</button>
                                <span>2 minutes</span>
                            </div>
                        </div>
                    </div>
                 <!--   <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-le"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-ri"></i></span>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- ----------X----------blog carousell--------------X------- -->
        <!-- --------------------Site content--------------------- -->
        <section class="container">
            <div class="site-content">
                <div class="post">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./image/pexels-xxss-is-back-777001.jpg" class="img" height="500" alt="miseal">
                                <!-- <h1>Blog post</h1> -->
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Give or take why nigerian people are so wicked when it comes to? why are they so</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptate laudantium, 
                                qui debitis id nam esse atque? Quidem blanditiis assumenda at dignissimos illum! Magni fugiat 
                                in ex. Architecto, maxime nesciunt ullam totam 
                                sequi maiores quidem neque delectus dolores, ipsam cupiditate.
                            </p>
                            <button class="btn post-btn">Read More&nbsp;<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post">
                        <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./image/pexels-stan-191842.jpg" class="img" height="500" alt="miseal">
                                    <!-- <h1>Blog post</h1> -->
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Give or take why nigerian people are so wicked when it comes to? why are they so</a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptate laudantium, 
                                    qui debitis id nam esse atque? Quidem blanditiis assumenda at dignissimos illum! Magni fugiat 
                                    in ex. Architecto, maxime nesciunt ullam totam 
                                    sequi maiores quidem neque delectus dolores, ipsam cupiditate.
                                </p>
                                <button class="btn post-btn">Read More&nbsp;<i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="post">
                        <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./image/pexels-pixabay-210182.jpg" class="img" height="500" alt="miseal">
                                    <!-- <h1>Blog post</h1> -->
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Give or take why nigerian people are so wicked when it comes to? why are they so</a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptate laudantium, 
                                    qui debitis id nam esse atque? Quidem blanditiis assumenda at dignissimos illum! Magni fugiat 
                                    in ex. Architecto, maxime nesciunt ullam totam 
                                    sequi maiores quidem neque delectus dolores, ipsam cupiditate.
                                </p>
                                <button class="btn post-btn">Read More&nbsp;<i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="post">
                        <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./image/pexels-flo-dahm-699459.jpg" class="img" height="500" alt="miseal">
                                    <!-- <h1>Blog post</h1> -->
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                    <span>2 Comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Give or take why nigerian people are so wicked when it comes to? why are they so</a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptate laudantium, 
                                    qui debitis id nam esse atque? Quidem blanditiis assumenda at dignissimos illum! Magni fugiat 
                                    in ex. Architecto, maxime nesciunt ullam totam 
                                    sequi maiores quidem neque delectus dolores, ipsam cupiditate.
                                </p>
                                <button class="btn post-btn">Read More&nbsp;<i class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="pagination flex-row" data-aos="zoom-in" data-aos-delay="200">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages" data-aos="flip-up" data-aos-delay="200">1</a>
                        <a href="#" class="pages" data-aos="flip-up" data-aos-delay="300">2</a>
                        <a href="#" class="pages" data-aos="flip-up" data-aos-delay="400">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>  
                <aside class="side-bar">
                    <div class="category" data-aos="zoom-in" data-aos-delay="200">
                        <h1>Category</h1>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Software</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Technology</a>
                                <span>(01)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Lifestyle</a>
                                <span>(06)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Shopping</a>
                                <span>(09)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Food</a>
                                <span>(07)</span>
                            </li>
                        </ul>
                </div>
                <div class="popular-post">
                    <h2>Popular post</h2>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                        <div class="post">
                            <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="./image/pexels-igor-haritanovich-1695052.jpg" class="img" height="200" alt="miseal">
                                        <!-- <h1>Blog post</h1> -->
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                        <span>2 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">New data reecording to better analyze road accidents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content" data-aos="fade-left" data-aos-delay="300">
                        <div class="post">
                            <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="./image/pexels-guilherme-rossi-1668928.jpg" class="img" height="200" alt="miseal">
                                        <!-- <h1>Blog post</h1> -->
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                        <span>2 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">New data reecording to better analyze road accidents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content" data-aos="fade-left" data-aos-delay="400">
                        <div class="post">
                            <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="./image/pexels-flo-dahm-699459.jpg" class="img" height="200" alt="miseal">
                                        <!-- <h1>Blog post</h1> -->
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                        <span>2 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">New data reecording to better analyze road accidents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post">
                            <div class="post-content" data-aos="fade-left" data-aos-delay="500">
                                <div class="post-image">
                                    <div>
                                        <img src="./image/pexels-dominika-roseclay-977878.jpg" class="img" height="200" alt="miseal">
                                        <!-- <h1>Blog post</h1> -->
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                        <span>2 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">New data reecording to better analyze road accidents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content" data-aos="fade-left" data-aos-delay="600">
                        <div class="post">
                            <div class="post-content">
                                <div class="post-image">
                                    <div>
                                        <img src="./image/pexels-dom-j-297927.jpg" class="img" height="200" alt="miseal">
                                        <!-- <h1>Blog post</h1> -->
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 29, 2022</span>
                                        <span>2 Comments</span>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">New data reecording to better analyze road accidents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-letter">
                    <h2>NewsLetter</h2>
                    <div class="form-element" data-aos="fade-left" data-aos-delay="700">
                        <input type="email" class="input-element" placeholder="someone@gmail.com">
                        <button class="btn form-btn">Subscribe</button>
                    </div>
                </div>
                <div class="popular-tags">
                    <h2>Popular Tags</h2>
                    <div class="tags flex-row">
                        <span class="tag" data-aos="flip-up" data-aos-delay="100">software</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="200">technology</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="300">travel</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="400">recreation</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="500">illustrstion</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="600">design</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="700">love</span>
                        <span class="tag" data-aos="flip-up" data-aos-delay="800">project</span>
                    </div>
                </div>
                </aside>
            </div>
        </section>
        <!-- ----------X----------Site content--------------X------- -->
    </main>
    <!----X----------Main site section---------------X-->
    <!--------------Footer section----------------->
    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About Us</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae iste incidunt obcaecati numquam 
                    dolorum velit 
                    sit enim at commodi laboriosam, iusto nisi distinctio! Ratione, ducimus similique deleniti 
                </p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>NewsLetter</h2>
                <p>Stay updated with our latest</p>
                <input type="email" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img data-aos="zoom-in" data-aos-delay="200" src="./image/pexels-xxss-is-back-777001.jpg" height="60" width="60" alt="footer">
                    <img data-aos="zoom-in" data-aos-delay="300"  src="./image/pexels-tranmautritam-326514.jpg" height="60" width="60" alt="footer">
                    <img data-aos="zoom-in" data-aos-delay="400"  src="./image/pexels-tranmautritam-326514.jpg" height="60" width="60" alt="footer">
                </div>
                <div class="flex-row" data-aos="fade-right" data-aos-delay="200">
                    <img data-aos="zoom-in" data-aos-delay="500"  src="./image/pexels-tranmautritam-326514.jpg" height="60" width="60" alt="footer">
                    <img data-aos="zoom-in" data-aos-delay="600"  src="./image/pexels-tranmautritam-326514.jpg" height="60" width="60" alt="footer">
                    <img data-aos="zoom-in" data-aos-delay="700"  src="./image/pexels-xxss-is-back-777001.jpg" height="60" width="60" alt="footer">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow</h2>
                <p>Let us be social</p>
                <div class="social-links text-grey">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="flex-row rights">
            <p>Copyright &copy;2022 All rights reserved | made by<a href="https://www.youtube.com/bills" target="_blank"> Bills industry <i class="fa-brands fa-youtube"></i>Channel</a></p>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>
    <!----X----------Footer section---------------X-->
    <script src="./js/jquery.js"></script>
    <script src="./css/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
   <script src="./js/main.js"></script> 
   <script src="./js/aos.js"></script>
</body>
</html>