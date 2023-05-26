<?php
session_start();
$is_empty = "Корзина порожня";
$name = null;
if (isset($_SESSION['name']) ) {
    $is_empty = null;
    $name = $_SESSION['name'];
}
require "header2.php"
?>
<main class="product">
    <div>
        <p class="zag">Ваша корзина:</p>
    </div>
    <span class="is-empty"><?php echo $is_empty?></span>
    <span><?php if ($name!=null) foreach ($name as $item) echo $item."<br>"?></span>
</main>
    <link rel="stylesheet" type="text/css" href="syrokopcheni-css.css">
<?php
require "footer.php"
?>