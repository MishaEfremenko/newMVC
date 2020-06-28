<?php
?>
<section class="opisanie">
    <img src="<?= $item['img'] ?>" alt="">
    <div class="xar">
        <h2 id='nazv'><?= $item['name'] ?></h2>
        <h2>Цена</h2>
        <h2><?= $item['prise'] ?>.</h2>
    </div>
</section>
<form action="" class="tovarform">
    <h3>Запонлните форму<br> мы с вами свяжемся</h3>
    <input type="tel" name="" id="">
    <input type="text" name="" id="">
    <textarea name="" id="" cols="30" rows="5"></textarea>
    <input type="submit" value="Заказать звонок" id="subbut">
</form>