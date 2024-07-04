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
    <link rel="stylesheet" href="beranda.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
</head>
<body>
<header>
        <div class="container">
          <div class="header-left">
            <img class="logo" src="assets/logo.png">
           
                
                <button>
                    <svg viewBox="0 0 1024 1024">
                        <path class="path1" q="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140
                        .706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.
                        529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.
                        455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                        </path>
                    </svg>
                </button>
            </form>
          </div>
          <!-- Tambahkan ikon menu -->
          <span class="fa fa-bars menu-icon"></span>

          <div class="header-right">
            <a href="beranda.php">Beranda</a>
            <a href="beranda.php #Produk">Produk</a>
            <a href="cart.php">Keranjang</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </header>
      <br><br>
      <br><br>
    <h1><center>Your Cart</center></h1>
    <?php if (!empty($_SESSION['cart'])): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <center>
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
            </center>
        </table>
        <br>
        <a class="tombol tombol-beli" href="dashboard.php #Produk">Continue Shopping</a>
    <?php else: ?>
        <p>Your cart is empty...</p>
        <a href=></a><a class="tombol tombol-beli" href="dashboard.php #Produk">Go back to shopping</a>
    <?php endif; ?>
    <br><br>
    <br><br>
    <footer>
        <div class="footercart-content">
            <h3>Web E-Commerce Toko ATK (Alat Tulis Kantor) BKM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <br>
            <br>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <div class="footercart-bottom">
            <p>&copy; 2024.kelompokpwl | Dibuat dengan <span>❤</span> oleh Tim Kami</p>
        </div>
        </footer>
</body>
</html>