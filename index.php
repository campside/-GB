<?php require_once 'parts/head.php'; ?>

    <link rel="stylesheet" href="css/index.css">

</head>
<body>

<div class="wrapper">

    <?php require_once 'parts/header.php'; ?>

    <?php require_once 'parts/nav.php'; ?>

    <section class="slider">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="./images/slider.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="./images/slide2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="./images/slider.png" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section><!-- slider -->

    <section class="banners center">

        <div class="banner-1">
            <a href="product.php">
                <div class="banner-1-1">
                    <div class="banner-pic-overlay"></div>
                    <div class="banner-label">
                        <span class="banner-label-title">Hot Deal</span>
                        <span class="banner-label-category">For Men</span>
                    </div>
                </div>
            </a>
            <a href="product.php">
                <div class="banner-1-2">
                    <div class="banner-pic-overlay"></div>
                    <div class="banner-label">
                        <span class="banner-label-title">Luxury</span>
                        <span class="banner-label-category">Accessories</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="banner-2">
            <a href="product.php">
                <div class="banner-2-2">
                    <div class="banner-pic-overlay"></div>
                    <div class="banner-label">
                        <span class="banner-label-title">30% Offer</span>
                        <span class="banner-label-category">Women</span>
                    </div>
                </div>
            </a>

            <a href="product.php">
                <div class="banner-2-1">
                    <div class="banner-pic-overlay"></div>
                    <div class="banner-label">
                        <span class="banner-label-title">New Arrivals</span>
                        <span class="banner-label-category">For Kids</span>
                    </div>
                </div>
            </a>
        </div></section><!-- banners -->

    <section class="featured center">

        <span class="featured-title">Featured Items</span>
        <span class="featured-subtitle">Shop for items based on what we featured in this week</span>

        <div class="featured-line">
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png"/>
                    </div>
                    <img class="picture" src="images/goods/1.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png" class="add"/>
                    </div>
                    <img class="picture" src="images/goods/2.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png" class="add"/>
                    </div>
                    <img class="picture" src="images/goods/3.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png" class="add"/>
                    </div>
                    <img class="picture" src="images/goods/4.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
        </div>
        <div class="featured-line">
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png" class="add"/>
                    </div>
                    <img class="picture" src="images/goods/5.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png" class="add"/>
                    </div>
                    <img class="picture" src="images/goods/6.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png" class="add"/>
                    </div>
                    <img class="picture" src="images/goods/7.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
            <a class="item" href="singlepage.php">
                <div class="featured-pic">
                    <div class="featured-pic-overlay"></div>
                    <div class="add-to-cart">
                        <img class="cart" src="images/elements/addtocart.png" class="add"/>
                    </div>
                    <img class="picture" src="images/goods/8.jpg" alt=""/>
                </div>
                <div class="featured-info">
                    <span class="title">Mango People T-Shirt </span>
                    <span class="price">$99.00</span>
                </div>
            </a>
        </div>

    </section><!-- featured -->

    <div class="center" style="text-align: center; margin-bottom: 30px;">
        <!-- Пока инлайновый костыль -->
        <a href="product.php">
            <button class="basic">Browse All Products</button>
        </a></div>

    <section class="promotion center">
        <div class="promotion-image">
            <img src="images/promotion.jpg" alt="">
        </div>
        <div class="promotion-details">
            <div class="detail">
                <div class="logo">
                        <img src="images/elements/delivery.png"/>
                    </div>
                <div class="title">Delivery</div>
                <article class="description">This is the text about delivery and other stuff we will introduce. And a
                    lot of
                    other interesting stuff.
                </article>
            </div>
            <div class="detail">
                <div class="logo">
                        <img src="images/elements/discount.png"/>
                    </div>
                <div class="title">Discounts</div>
                <article class="description">This is the text about delivery and other stuff we will introduce. And a
                    lot of
                    other interesting stuff.
                </article>
            </div>
            <div class="detail">
                <div class="logo">
                        <img src="images/elements/quality.png"/>
                    </div>
                <div class="title">Quality</div>
                <article class="description">This is the text about delivery and other stuff we will introduce. And a
                    lot of
                    other interesting stuff.
                </article>
            </div>
        </div></section><!-- promotion -->

    <?php require_once 'parts/communication.php'; ?>

    <?php require_once 'parts/pre-footer.php'; ?>

    <?php require_once 'parts/footer.php'; ?>

</div><!-- wrapper -->
<script src="scripts/index.js"></script>
<script src="scripts/slide.js"></script>
</body>
</html>
