<?php require_once 'parts/head.php'; ?>

    <link rel="stylesheet" href="css/cart.css">
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

        <div class="cart-info">
            <div class="header">
                <div class="product-details">
                    <p>Product details</p>
                </div>
                <div class="unit-price">
                    <p>Unit Price</p>
                </div>
                <div class="quantity">
                    <p>Quantity</p>
                </div>
                <div class="shipping">
                    <p>Shipping</p>
                </div>
                <div class="subtotal">
                    <p>Subtotal</p>
                </div>
                <div class="action">
                    <p>Action</p>
                </div>
            </div>
            <div class="goods">
                    <div class="product">
                        <div class="product-details">
                            <div class="picture">
                                <a href="singlepage.php">
                                    <img src="images/goods/1.jpg" />
                                </a>
                            </div>
                            <div class="description">
                                <div class="name">SUPER PUPER ITEM</div>
                                <div class="color-size">
                                    <div class="color">
                                        <p>Color:</p>
                                        <p class="color-value">Red</p>
                                    </div>
                                    <div class="size">
                                        <p>Size:</p>
                                        <p class="size-value">XL</p>
                                    </div>
                                    <div class="add">
                                        <div class="size prc">
                                            <p>Price:</p>
                                            <p class="size-value">150$</p>
                                        </div>
                                        <div class="size qty">
                                            <p>QTY:</p>
                                            <p class="size-value">2</p>
                                        </div>
                                        <div class="size sbt">
                                            <p>QTY:</p>
                                            <p class="size-value">300$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail unit-price">
                                <p>$150</p>
                            </div>
                        <div class="detail quantity">
                            <input type="number" min="0" max="10" placeholder="1">
                        </div>
                        <div class="detail shipping">
                                <p>FREE</p>
                            </div>
                        <div class="detail subtotal">
                                <p>$300</p>
                            </div>
                        <div class="detail action">
                                <a href="#">
                                    <img src="images/elements/remove.png" />
                                </a>
                            </div>
                    </div>
                    <div class="product">
                    <div class="product-details">
                        <div class="picture">
                            <a href="singlepage.php">
                                <img src="images/goods/1.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <div class="name">SUPER PUPER ITEM</div>
                            <div class="color-size">
                                <div class="color">
                                    <p>Color:</p>
                                    <p class="color-value">Red</p>
                                </div>
                                <div class="size">
                                    <p>Size:</p>
                                    <p class="size-value">XL</p>
                                </div>
                                <div class="add">
                                    <div class="size prc">
                                        <p>Price:</p>
                                        <p class="size-value">150$</p>
                                    </div>
                                    <div class="size qty">
                                        <p>QTY:</p>
                                        <p class="size-value">2</p>
                                    </div>
                                    <div class="size sbt">
                                        <p>QTY:</p>
                                        <p class="size-value">300$</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail unit-price">
                        <p>$150</p>
                    </div>
                    <div class="detail quantity">
                        <input type="number" min="0" max="10" placeholder="1">
                    </div>
                    <div class="detail shipping">
                        <p>FREE</p>
                    </div>
                    <div class="detail subtotal">
                        <p>$300</p>
                    </div>
                    <div class="detail action">
                        <a href="#">
                            <img src="images/elements/remove.png" />
                        </a>
                    </div>
                </div>
                    <div class="product">
                    <div class="product-details">
                        <div class="picture">
                            <a href="singlepage.php">
                                <img src="images/goods/1.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <div class="name">SUPER PUPER ITEM</div>
                            <div class="color-size">
                                <div class="color">
                                    <p>Color:</p>
                                    <p class="color-value">Red</p>
                                </div>
                                <div class="size">
                                    <p>Size:</p>
                                    <p class="size-value">XL</p>
                                </div>
                                <div class="add">
                                    <div class="size prc">
                                        <p>Price:</p>
                                        <p class="size-value">150$</p>
                                    </div>
                                    <div class="size qty">
                                        <p>QTY:</p>
                                        <p class="size-value">2</p>
                                    </div>
                                    <div class="size sbt">
                                        <p>QTY:</p>
                                        <p class="size-value">300$</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail unit-price">
                        <p>$150</p>
                    </div>
                    <div class="detail quantity">
                        <input type="number" min="0" max="10" placeholder="1">
                    </div>
                    <div class="detail shipping">
                        <p>FREE</p>
                    </div>
                    <div class="detail subtotal">
                        <p>$300</p>
                    </div>
                    <div class="detail action">
                        <a href="#">
                            <img src="images/elements/remove.png" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="goods-control">
                <button class="clear checkout">Clear Shopping Cart</button>
                <button class="continue checkout">Continue Shopping</button>
            </div>
        </div><!-- cart-ifo -->

        <form class="checkout" action="checkout.php">

                <div class="address">
                    <div class="label">Shipping Address</div>
                    <select class="basic" name="city" id="city">
                        <option value="bangladesh">Bangladesh</option>
                        <option value="moscow">Moscow</option>
                        <option value="Vladivostok">Vladivostok</option>
                    </select>
                    <input class="basic" type="text" placeholder="State" />
                    <input class="basic" type="number" placeholder="Postcode / Zip" />
                    <input class="basic" type="button" value="Get Quote" />
                </div>

                <div class="coupon">
                    <div class="label">Coupon Discount</div>
                    <span>Enter your coupon code if you have one</span>
                    <input class="basic" type="text" placeholder="State" />
                    <input class="basic" type="button" value="Apply Coupon" />
                </div>

                <div class="proceed">
                    <div class="total">
                        <div class="sub-total">
                            <p class="sub-total-p">Sub Total</p>
                            <p class="sub-total-value">$ 900</p>
                        </div>
                        <div class="grand-total">
                            <p class="sub-total-p">Grand Total</p>
                            <p class="sub-total-value">$ 900</p>
                        </div>
                    </div>
                        <button class="basic">Proceed To Checkout</button>
                </div>

        </form>

    </section><!-- main -->

    <?php require_once 'parts/communication.php'; ?>

    <?php require_once 'parts/pre-footer.php'; ?>

    <?php require_once 'parts/footer.php'; ?>

</div>
<script src="scripts/index.js"></script>
<script src="scripts/cart.js"></script>

</body>
</html>
