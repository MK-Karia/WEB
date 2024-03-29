<?php
$featurePosts = [
    [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'categoria' => 'Photography',
        'categoria_link' => 'featured__link-to-photography',
        'img_modifier' => 'https://localhost:8443/static/images/mat-vogels.jpg',
        'author' => 'Mat Vogels',
        'date' => 1443182409,
        'class' => 'featured__elem1'
    ],
    [
        'id' => 2,
        'title' => 'From Top Do',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'categoria' => 'Adventure',
        'categoria_link' => 'featured__link-to-adventure',
        'img_modifier' => 'https://localhost:8443/static/images/william-wong.jpg',
        'author' => 'William Wong',
        'date' => 1443182409,
        'class' => 'featured__elem2'
    ]
];

$mostRecentPosts = [
    [
        'id' => 3,
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => 'https://localhost:8443/static/images/william-wong.jpg',
        'author' => 'William Wong',
        'date' => 1443182409,
        'img_post' => 'https://localhost:8443/static/images/still-standing-tall.jpg'
    ],
    [
        'id' => 4,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_modifier' => 'https://localhost:8443/static/images/mat-vogels.jpg',
        'author' => 'Mat Vogels',
        'date' => 1443182409,
        'img_post' => 'https://localhost:8443/static/images/sunny-side-up.jpg'
    ],
    [
        'id' => 5,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_modifier' => 'https://localhost:8443/static/images/mat-vogels.jpg',
        'author' => 'Mat Vogels',
        'date' => 1443182409,
        'img_post' => 'https://localhost:8443/static/images/water-falls.jpg'
    ],
    [
        'id' => 6,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_modifier' => 'https://localhost:8443/static/images/william-wong.jpg',
        'author' => 'William Wong',
        'date' => 1443182409,
        'img_post' => 'https://localhost:8443/static/images/through-the-mist.jpg'
    ],
    [
        'id' => 7,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => 'https://localhost:8443/static/images/mat-vogels.jpg',
        'author' => 'Mat Vogels',
        'date' => 1443182409,
        'img_post' => 'https://localhost:8443/static/images/awaken-early.jpg'
    ],
    [
        'id' => 8,
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_modifier' => 'https://localhost:8443/static/images/mat-vogels.jpg',
        'author' => 'Mat Vogels',
        'date' => 1443182409,
        'img_post' => 'https://localhost:8443/static/images/try-it-always.jpg'
    ]
];
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="https://localhost:8443/static/style/index-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body> 
        <header class="header">
            <nav class="nav-box">
                <a class="to-home" href='/home'><img src="https://localhost:8443/static/images/Logo_bottom.svg" alt="Logo"></a>
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
                        <a class="navigation__link" href="#">Travel</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="#">Adventure</a>
                    </li>
                </ul>
            </nav>
            <div class="featured">
                <h3 class="section-title">Featured Posts</h3>
                <hr class="hr">
                <div class="featured__box">
                    <?php 
                        foreach ($featurePosts as $post) {
                            include 'feature_post_preview.php';
                        }
                    ?>
                </div>
            </div>
            <div class="most-recent">
                <h3 class="section-title">Most Recent</h3>
                <hr class="hr">
                <ul class="most-recent__list">
                    <?php 
                        foreach ($mostRecentPosts as $post) {
                            include 'most_recent_post_preview.php';
                        }
                    ?>
                </ul>
            </div>
        </main>
        <footer class="footer">
            <nav class="nav-box footer__nav-box">
                <img src="https://localhost:8443/static/images/Logo_bottom.svg" alt="Logo">
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