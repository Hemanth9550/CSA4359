<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Shopping</title>
    <style>
    </style>
</head>
<body>
	<h2 align="center">Welcome to online digital product store</h2>
        <h1>Online Shopping</h1>
    <section id="catalog">
        <h2>Product Categories</h2>
        <ul>
            <li>Electronics</li>
            <li>Home Appliances</li>
        </ul>
    </section>
    <section id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items">
        </ul>
        <button onclick="checkout()">Checkout</button>
    </section>
    <script>
        function checkout() {
            alert("Checkout clicked");
        }
    </script>
</body>
</html>

