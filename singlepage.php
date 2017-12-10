<?php require_once 'parts/head.php'; ?>

    <link rel="stylesheet" href="css/singlepage.css">
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

    <section class="main">

        <div class="item-image-slider">
            <div class="left">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="right">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <img src="images/goods/item-image.jpg"/>
        </div><!-- item-image-slider -->

        <div class="item-description">

            <div class="title">
                <div class="collection">
                    <p>Woman collection</p>
                </div>
                <div class="item-name">
                    <p>Moschino chip and cheak</p>
                </div>
            </div><!-- item-description -->

            <article class="description">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable.</p>
            </article>

            <div class="details">
                <div class="material">
                    <p class="material">MATERIAL:</p>
                    <p>COTTON</p>
                </div>
                <div class="designer">
                    <p class="designer">DESIGNER:</p>
                    <p>BIGBURHAN</p>
                </div>
            </div>

            <div class="price">
                <p>$ 559</p>
            </div>

            <form action="#" method="post" class="options">

                <div class="select-options">
                    <div class="color">
                        <label for="choose-color">Choose color</label>
                        <select name="color" id="choose-color">
                            <option value="black">black</option>
                            <option value="red">red</option>
                        </select>
                    </div>
                    <div class="size">
                        <label for="choose-size">Choose size</label>
                        <select name="color" id="choose-size">
                            <option value="S">S</option>
                            <option value="l">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <label for="choose-quantity">Quantity</label>
                        <input type="number" id="choose-quantity" placeholder="1" min="1" max="5">
                    </div>
                </div><!-- select-options -->

                <button class="add-to-cart">Add To Cart</button>
            </form>

        </div><!-- item-description -->

        <section class="featured center">

            <span class="featured-title">You may like also</span>

            <div class="featured-line">
                <a href="#">
                    <div class="item featured-1">
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
                    </div>
                </a>
                <a href="#">
                    <div class="item featured-1">
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
                    </div>
                </a>
                <a href="#">
                    <div class="item featured-1">
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
                    </div>
                </a>
                <a href="#">
                    <div class="item featured-1">
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
                    </div>
                </a>
            </div>

        </section><!-- featured -->

    </section><!-- main -->

    <?php require_once 'parts/communication.php'; ?>

    <?php require_once 'parts/pre-footer.php'; ?>

    <?php require_once 'parts/footer.php'; ?>

</div><!-- wrapper -->
<script src="scripts/index.js"></script>

</body>
</html>
