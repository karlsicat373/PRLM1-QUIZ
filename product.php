<?php
$user = "Karl Sicat";
$greet = "Welcome Back, ".$user.".";
$product = "Lollipop";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lollipop Discounts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
header { background:#8b1f2d; color:#fff; padding:20px; }
table { border-collapse: collapse; width: 100%; max-width: 500px; margin-top: 20px; }
th, td { border: 1px solid #ccc; padding: 10px; }
footer { margin-top:40px; padding:10px; background:#eee; text-align:center; }
a { color:#8b1f2d; font-weight:bold; }
</style>
</head>

<body>

<header>
<h1>The Candy Store</h1>
<p>Lollipop Discount Table</p>
<p><?php if ($user){echo $greet;}?></p>
</header>

<div style="padding:20px;">

<?php
$product = "Lollipops";
$cost = 6.00;

$totals = [];

for ($count = 1; $count <= 10; $count++) {
$subtotal = $cost * $count;
$discountPercent = $count * 4;
$discountAmount = $subtotal * ($discountPercent / 100);
$totals[$count] = $subtotal - $discountAmount;
}
?>

<h2><?= $product ?></h2>
<p>Price per pack: <strong>$<?= number_format($cost, 2) ?></strong></p>

<table>
<tr>
<th>Packs</th>
<th>Price After Discount</th>
</tr>

<?php foreach ($totals as $qty => $price): ?>
<?php $packText = ($qty == 1) ? "pack" : "packs"; ?>
<tr>
<td><?= $qty . " " . $packText ?></td>
<td>$<?= number_format($price, 2) ?></td>
</tr>
<?php endforeach; ?>

</table>

<p><a href="index.php">← Back to Home</a></p>

</div>

<footer>
&copy; <?= date("Y") ?> The Candy Store
</footer>

</body>
</html>