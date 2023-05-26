<?php
session_start();
if (isset($_GET['name'])) {
    if (!isset($_SESSION['name'])) {
        $_SESSION['name'] = [];
    }
    $_SESSION['name'][] = $_GET['name'];
}
require "header3.php"
?>
<main class="product">
    <div>
        <div>
            <p class="zag">Салямі Королівська</p>
            <a href="1.php?name=Салямі Королівська" class="zamov">
                <div>
                    <p>В кошик</p>
                </div>
            </a>
        </div>
        <img src="../photo/syrokopcheni/1.jpg">
    </div>
    <p class="txt1">Склад: грудоребрана частина з шийними та спинними хрящами з міжреберним м'ясом свинячих напівтуш без шкіри, натуральні спеції. 100 г продукту містить: білки – 5,5 г, жири – 45,0 г. Енергетична цінність – 427,0 ккал. Термін зберігання при температурі t від 0 до +6 °С та відносній вологості повітря 70-80% - 8 діб. Ціна - 130грн</p>
</main>
<?php
require "footer3.php"
?>