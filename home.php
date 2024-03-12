<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="style/index-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body> 
        <header class="header">
            <nav class="nav-box">
                <img src="images/Logo_bottom.svg" alt="Logo">
                <ul class="nav-box__list">
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">Home</a>
                    </li>
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">About</a>
                    </li>
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">Categories</a>
                    </li>
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="header-box">
                <h1 class="header-box__title">Let's do it together.</h1>
                <h2 class="header-box__subtitle">We travel the world in search of stories. Come along for the ride.</h2>
                <a class="header-box__link" href="#">View Latest Posts</a>
            </div>
        </header>
        <main class="main">
            <nav class="navigation">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">Nature</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">Photography</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">Relaxation</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">Vacation</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link"  href="#">Travel</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link"  href="#">Adventure</a>
                    </li>
                </ul>
            </nav>
            <div class="featured">
                <h3 class="section-title">Featured Posts</h3>
                <hr class="hr">
                <div class="featured__box">
                    <a class="featured__box-link" href="post.php">
                        <div class="featured__elem featured__elem-container featured__elem1">
                            <p class="featured__category featured__link-to-photography">Photography</p>
                            <h4 class="featured__title">The Road Ahead</h4>
                            <h5 class="featured__subtitle">The road ahead might be paved - it might not be.</h5>
                            <div class="featured__infobox">
                                <div class="featured__about-author">
                                    <img class="featured__avatar" src="images/mat-vogels.jpg" alt="mat-vogels">
                                    <p class="featured__author-name">Mat Vogels</p>
                                </div>    
                                    <p class="featured__date">September 25, 2015</p>
                            </div>
                        </div>
                    </a>
                    <a class="featured__box-link" href="#">
                        <div class="featured__elem featured__elem-container featured__elem2">
                            <p class="featured__category">Adventure</p>
                            <h4 class="featured__title">From Top Down</h4>
                            <h5 class="featured__subtitle">Once a year, go someplace you’ve never been before.</h5>
                            <div class="featured__infobox">
                                <div class="featured__about-author">
                                    <img class="featured__avatar" src="images/william-wong.jpg" alt="william-wong">
                                    <p class="featured__author-name">William Wong</p>
                                </div>    
                                    <p class="featured__date">September 25, 2015</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="most-recent">
                <h3 class="section-title">Most Recent</h3>
                <hr class="hr">
                <ul class="most-recent__list">
                    <li class="most-recent__list-elem">
                        <a class="featured__box-link" href="#">
                            <div class="most-recent__elem most-recent__elem-1">
                                <img class="most-recent__elem-img" src="images/still-standing-tall.jpg" alt="Still Standing Tall">
                                <div class="most-recent__about-elem">
                                    <h4 class="most-recent__title">Still Standing Tall</h4>
                                    <h5 class="most-recent__subtitle">Life begins at the end of your comfort zone.</h5>
                                </div>
                                <hr class="most-recent__elem-hr">
                                <div class="most-recent__infobox">
                                    <div class="most-recent__about-author">
                                        <img class="most-recent__avatar" src="images/william-wong.jpg" alt="william-wong">
                                        <p class="most-recent__author-name">William Wong</p>
                                    </div>    
                                    <p class="most-recent__date">9/25/2015</p>
                                </div>     
                            </div>
                        </a>
                    </li>
                    <li class="most-recent__list-elem">
                        <a class="featured__box-link" href="#">
                            <div class="most-recent__elem elem most-recent__elem-2">
                                <img class="most-recent__elem-img" src="images/sunny-side-up.jpg" alt="Sunny Side Up">
                                <div class="most-recent__about-elem">
                                    <h4 class="most-recent__title">Sunny Side Up</h4>
                                    <h5 class="most-recent__subtitle">No place is ever as bad as they tell you it’s going to be.</h5>
                                </div>    
                                <hr class="most-recent__elem-hr">
                                <div class="most-recent__infobox">
                                    <div class="most-recent__about-author">
                                        <img class="most-recent__avatar" src="images/mat-vogels.jpg" alt="mat-vogels">
                                        <p class="most-recent__author-name">Mat Vogels</p>
                                    </div>    
                                    <p class="most-recent__date">9/25/2015</p>
                                </div>       
                            </div>
                        </a>
                    </li>
                    <li class="most-recent__list-elem">
                        <a class="featured__box-link" href="#">
                            <div class="most-recent__elem elem most-recent__elem-3">
                                <img class="most-recent__elem-img" src="images/water-falls.jpg" alt="Water Falls">
                                <div class="most-recent__about-elem">
                                    <h4 class="most-recent__title">Water Falls</h4>
                                    <h5 class="most-recent__subtitle">We travel not to escape life, but for life not to escape us.</h5>
                                </div>    
                                <hr class="most-recent__elem-hr">
                                <div class="most-recent__infobox">
                                    <div class="most-recent__about-author">
                                        <img class="most-recent__avatar" src="images/mat-vogels.jpg" alt="mat-vogels">
                                        <p class="most-recent__author-name">Mat Vogels</p>
                                    </div>    
                                    <p class="most-recent__date">9/25/2015</p>
                                </div>                           
                            </div>
                        </a>
                    </li>
                    <li class="most-recent__list-elem">
                        <a class="featured__box-link" href="#">
                            <div class="most-recent__elem elem most-recent__elem-4">
                                <img class="most-recent__elem-img" src="images/through-the-mist.jpg" alt="Through the Mist">
                                <div class="most-recent__about-elem">
                                    <h4 class="most-recent__title">Through the Mist</h4>
                                    <h5 class="most-recent__subtitle">Travel makes you see what a tiny place you occupy in the world.</h5>
                                </div>    
                                <hr class="most-recent__elem-hr">
                                <div class="most-recent__infobox">
                                    <div class="most-recent__about-author">
                                        <img class="most-recent__avatar" src="images/william-wong.jpg" alt="william-wong">
                                        <p class="most-recent__author-name">William Wong</p>
                                    </div>    
                                    <p class="most-recent__date">9/25/2015</p>
                                </div>                         
                            </div>
                        </a>
                    </li>
                    <li class="most-recent__list-elem">
                        <a class="featured__box-link" href="#">
                            <div class="most-recent__elem elem most-recent__elem-5">
                                <img class="most-recent__elem-img" src="images/awaken-early.jpg" alt="Awaken Early">
                                <div class="most-recent__about-elem">
                                    <h4 class="most-recent__title">Awaken Early</h4>
                                    <h5 class="most-recent__subtitle">Not all those who wander are lost.</h5>
                                </div>    
                                <hr class="most-recent__elem-hr">
                                <div class="most-recent__infobox">
                                    <div class="most-recent__about-author">
                                        <img class="most-recent__avatar" src="images/mat-vogels.jpg" alt="mat-vogels">
                                        <p class="most-recent__author-name">Mat Vogels</p>
                                    </div>    
                                    <p class="most-recent__date">9/25/2015</p>
                                </div>                         
                            </div>
                        </a>
                    </li>
                    <li class="most-recent__list-elem">
                        <a class="featured__box-link" href="#">
                            <div class="most-recent__elem elem most-recent__elem-6">
                                <img class="most-recent__elem-img" src="images/try-it-always.jpg" alt="Try it Always">
                                <div class="most-recent__about-elem">
                                    <h4 class="most-recent__title">Try it Always</h4>
                                    <h5 class="most-recent__subtitle">The world is a book, and those who do not travel read only one page.</h5>
                                </div>    
                                <hr class="most-recent__elem-hr">
                                <div class="most-recent__infobox">
                                    <div class="most-recent__about-author">
                                        <img class="most-recent__avatar" src="images/mat-vogels.jpg" alt="mat-vogels">
                                        <p class="most-recent__author-name">Mat Vogels</p>
                                    </div>    
                                    <p class="most-recent__date">9/25/2015</p>
                                </div>                  
                            </div>
                        </a>                        
                    </li>
                </ul>
            </div>
        </main>
        <footer class="footer">
            <nav class="nav-box footer__nav-box">
                <img src="images/Logo_bottom.svg" alt="Logo">
                <ul class="nav-box__list footer__list">
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">Home</a>
                    </li>
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">About</a>
                    </li>
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">Categories</a>
                    </li>
                    <li class="nav-box__item">
                        <a class="nav-box__link" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </footer>
    </body>
</html>