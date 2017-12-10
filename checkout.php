<?php require_once 'parts/head.php'; ?>

    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>

<div class="wrapper">

    <?php require_once 'parts/header.php'; ?>

    <?php require_once 'parts/nav.php'; ?>

    <section class="new-arrivals">
        <div class="wrapper">
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
        <div class="active-step shipping-address">
            <h1 class="title">01. Shipping Address</h1>

            <div class="content">

                <div class="content-main">
                    <form class="shipping" action="#" class="shipping">
                        <div class="disclaimer">
                            <h2>Checkout as a guest or registered user</h2>
                            <span>Register with us and save time in future forever and ever</span>
                        </div>
                            <div>
                                <input class="checkbox" type="checkbox" id="guest" name="interest" value="coding">
                                <label for="guest">Checkout as a guest</label>
                            </div>
                            <div>
                                <input class="checkbox" type="checkbox" id="registered" name="interest" value="music">
                                <label for="registered">Checkout as registered user</label>
                            </div>
                            <div class="disclaimer">
                                <h2>Register and save time</h2>
                                <span>Register with us and save time in future</span>
                                <ul>
                                    <li>>>Checkout fast and easy</li>
                                    <li>>>Access to your order history forever</li>
                                </ul>
                            </div>

                            <div>
                                <button class="checkout">Continue</button>
                            </div>
                    </form>
                </div><!-- content-main -->

                <div class="content-login">
                    <div class="disclaimer">
                        <h2>Already registered?</h2>
                        <span>Please login below</span>
                        <form class="login" action="#">
                            <label class="input" for="email">Email address</label>
                            <span style="color: red; font-size: 20px;">*</span>
                            <input id="email" class="basic" type="email" required>
                            <label class="input" for="password">Password</label>
                            <span style="color: red; font-size: 20px;">*</span>
                            <input id="password" class="basic" type="password" required>
                            <div style="color: red; font-size: 15px;">* Required fields</div>
                            <button class="checkout">Log in</button>
                            <a href="#" style="margin-left: 10px">Забыли пароль?</a>
                        </form>
                    </div>
                </div><!-- content-login -->

            </div><!-- content -->

        </div>

        <div class="step billing-information">
            <h1 class="title">02. Billing Information</h1>
            <form action="#" class="billing">

            </form>
        </div>
        <div class="step shipping-information">
            <h1 class="title">03. Shipping Information</h1>
            <form action="#" class="billing">

            </form>
        </div>
        <div class="step shipping-method">
            <h1 class="title">04. Shipping Method</h1>
            <form action="#" class="billing">

            </form>
        </div>
        <div class="step billing-information">
            <h1 class="title">05. Payment Method</h1>
            <form action="#" class="billing">

            </form>
        </div>
        <div class="step order-review">
            <h1 class="title">06. Order Review</h1>
            <form action="#" class="billing">

            </form>
        </div>
    </section>

    <?php require_once 'parts/communication.php'; ?>

    <?php require_once 'parts/pre-footer.php'; ?>

    <?php require_once 'parts/footer.php'; ?>

</div>
<script src="scripts/index.js"></script>

</body>
</html>
