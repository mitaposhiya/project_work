<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylefit.css">
    <title>Shopping Cart</title>
</head>
<body>
    <header class="he">
        <h1>Your Cart</h1>
        <nav class="n1">
            <a href="product.php">Back to Products</a>
        </nav>
    </header>
    <main>
        <div id="cart-items">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div id="total">
            <h3>Total: ₹<span id="total-price">0</span></h3>
        </div>
        <button id="checkout-button">Proceed to Checkout</button>
    </main>
    <footer class="f1">
        <h1>Built your healthy future with us.</h1>
    </footer>
    <script src="cart.js"></script>
</body>
</html>
