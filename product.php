<?php require_once 'parts/head.php'; ?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/product.css">
</head>
<body>

<div class="wrapper">

    <?php require_once 'parts/header.php'; ?>

    <?php require_once 'parts/nav.php'; ?>

    <section class="new-arrivals">
        <div class="center flex">
            <div class="label">
                <b>New Arrivals</b>
            </div>

            <div class="links">
                <a href="#">Home</a>
                /
                <a href="#">Men</a>
                /
                <a href="#">New Arrivals</a>
            </div>
        </div>
    </section><!-- new-arrivals -->

    <section class="main center">
        <div class="catalog">
            <button class="accordion">Category</button>
            <div class="panel">
                <ul>
                    <a href="#">
                        <li>Accessiories</li>
                    </a>
                    <a href="#">
                        <li>Bags</li>
                    </a>
                    <a href="#">
                        <li>Denim</li>
                    </a>
                    <a href="#">
                        <li>Pants</li>
                    </a>
                    <a href="#">
                        <li>Polos</li>
                    </a>
                    <a href="#">
                        <li>Shirts</li>
                    </a>
                </ul>
            </div>
            <button class="accordion">Brand</button>
            <div class="panel">
                <ul>
                    <a href="#">
                        <li>Accessiories</li>
                    </a>
                    <a href="#">
                        <li>Bags</li>
                    </a>
                    <a href="#">
                        <li>Denim</li>
                    </a>
                    <a href="#">
                        <li>Pants</li>
                    </a>
                    <a href="#">
                        <li>Polos</li>
                    </a>
                    <a href="#">
                        <li>Shirts</li>
                    </a>
                </ul>
            </div>
            <button class="accordion">Designer</button>
            <div class="panel">
                <ul>
                    <a href="#">
                        <li>Accessiories</li>
                    </a>
                    <a href="#">
                        <li>Bags</li>
                    </a>
                    <a href="#">
                        <li>Denim</li>
                    </a>
                    <a href="#">
                        <li>Pants</li>
                    </a>
                    <a href="#">
                        <li>Polos</li>
                    </a>
                    <a href="#">
                        <li>Shirts</li>
                    </a>
                </ul>
            </div>
        </div><!-- catalog -->
        <div class="filters-goods">

            <div class="filters">
                <div class="filters-options">
                    <div class="trending-now">
                        <div class="title">Trending now</div>
                        <div class="up">
                            <a href="#">Bohemian</a> | <a href="#">Floral</a> | <a href="#">Lace</a>
                        </div>
                        <div class="down">
                            <a href="#">Floral</a> | <a href="#">Lace</a> | <a href="#">Bohemian</a>
                        </div>
                    </div>
                    <div class="size">
                        <div class="title">Size</div>
                        <div class="chbox-line">
                            <p class="chbox">
                                <input id="xss" type="checkbox" value="xss">
                                <label for="xss">XXS</label>
                            </p>
                            <p class="chbox">
                                <input id="xs" type="checkbox" value="xs">
                                <label for="xs">XS</label>
                            </p>
                            <p class="chbox">
                                <input id="s" type="checkbox" value="s">
                                <label for="s">S</label>
                            </p>
                            <p class="chbox">
                                <input id="m" type="checkbox" value="m">
                                <label for="m">M</label>
                            </p>
                        </div>
                        <div class="chbox-line">
                            <p class="chbox">
                                <input id="l" type="checkbox" value="l">
                                <label for="l">L</label>
                            </p>
                            <p class="chbox">
                                <input id="xl" type="checkbox" value="xl">
                                <label for="xl">XL</label>
                            </p>
                            <p class="chbox">
                                <input id="xxl" type="checkbox" value="xxl">
                                <label for="xxl">XXL</label>
                            </p>
                        </div>
                    </div>
                    <div class="price">
                        <div class="title">Price</div>
                        <div class="rangeslider">
                            <input class="min" name="range_1" type="range" min="1" max="100" value="10"/>
                            <input class="max" name="range_1" type="range" min="1" max="100" value="90"/>
                            <span class="range_min light left">$ 10</span>
                            <span class="range_max light right">$ 90</span>
                        </div>
                    </div>
                </div>
                <div class="sort-show">
                    <div class="sort">
                        <label for="sort">Sort by</label><select name="sort" id="sort">
                            <option value="volvo">Name</option>
                            <option value="saab">Price</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select></div>

                    <div class="show">
                        <label for="show">Show</label><select name="show" id="show">
                            <option value="volvo">6</option>
                            <option value="saab">9</option>
                            <option value="mercedes">12</option>
                        </select>
                    </div>
                </div><!-- sort-show -->
            </div><!-- filters -->

            <div class="featured">

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
                </div>

                <div class="featured-line">
                    <a class="item" href="singlepage.php">
                        <div class="featured-pic">
                            <div class="featured-pic-overlay"></div>
                            <div class="add-to-cart">
                                <img class="cart" src="images/elements/addtocart.png" class="add"/>
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
                </div><!-- line -->

                <div class="featured-line">
                    <a class="item" href="singlepage.php">
                        <div class="featured-pic">
                            <div class="featured-pic-overlay"></div>
                            <div class="add-to-cart">
                                <img class="cart" src="images/elements/addtocart.png" class="add"/>
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
                </div><!-- line -->

            </div>
                
            <div class="goods-footer">
                <div class="pagination">
                    <a href="#"><</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">></a>
                </div>
                <button>View All</button>
            </div><!-- goods-footer -->

        </div><!-- filters-goods -->
    </section><!-- main -->

    <?php require_once 'parts/communication.php'; ?>

    <?php require_once 'parts/pre-footer.php'; ?>

    <?php require_once 'parts/footer.php'; ?>

</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="scripts/product.js"></script>
<script src="scripts/index.js"></script>
</html>
