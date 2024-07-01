<?php
session_start();

// Produk dummy
$products = [
    1 => ['name' => 'Pulpen Joyko', 'price' => 5000],
    2 => ['name' => 'Gel Pen Joyko', 'price' => 4000],
    3 => ['name' => 'Mechanic Pencil', 'price' => 5000],
    4 => ['name' => 'Faber-Castell 2B', 'price' => 4000],
    5 => ['name' => 'Faber-Castell Eraser', 'price' => 3000],
    6 => ['name' => 'Correction Pen', 'price' => 5000],
    7 => ['name' => 'Correction Tape', 'price' => 5000],
    8 => ['name' => 'Campus Book', 'price' => 2000],
    9 => ['name' => 'Plain Paper A4', 'price' => 45000],
    10 => ['name' => 'Photo Paper a4', 'price' => 35000],

];

// Tambahkan produk ke keranjang
if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id']) && isset($products[$_GET['id']])) {
    $id = $_GET['id'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = $products[$id];
        $_SESSION['cart'][$id]['quantity'] = 1;
    } else {
        $_SESSION['cart'][$id]['quantity']++;
    }
    header("Location: cart.php");
    exit;
}

// Hapus produk dari keranjang
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id']) && isset($_SESSION['cart'][$_GET['id']])) {
    unset($_SESSION['cart'][$_GET['id']]);
    header("Location: cart.php");
    exit;
}

// Tampilkan keranjang
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <img class="logo" src="assets/logo.png">
        <a href="logout.php">Logout</a>
        <a href="kontak.php #contact">Kontak</a>
        <a href="cart.php">Keranjang</a>
        <a href="dashboard.php #Produk">Produk</a>
        <a href="dashboard.php">Beranda</a>
      </div>
      <br><br>
      <br><br>
    <h1>Your Cart</h1>
    <?php if (!empty($_SESSION['cart'])): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php $total = 0; ?>
            <?php foreach ($_SESSION['cart'] as $id => $product): ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td><?php echo $product['price'] * $product['quantity']; ?></td>
                    <td><a href="cart.php?action=remove&id=<?php echo $id; ?>">Remove</a></td>
                </tr>
                <?php $total += $product['price'] * $product['quantity']; ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">Total</td>
                <td><?php echo $total; ?></td>
                <td></td>
            </tr>
        </table>
        <br>
        <a href="dashboard.php #Produk">Continue Shopping</a>
    <?php else: ?>
        <p>Your cart is empty. <a href="dashboard.php #Produk">Go back to shopping</a>.</p>
    <?php endif; ?>
</body>
</html>