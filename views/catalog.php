<?php
    // print_r($items[0]);
?>
<nav class="katalog_menu">
    <a href="/catalog?cat=gru" class="kat_href">Сухие смеси и грунтовки</a>
    <a href="/catalog?cat=lis" class="kat_href">Листовыйе материалы</a>
    <a href="/catalog?cat=blo" class="kat_href">Блоки для строительства</a>
    <a href="/catalog?cat=sip" class="kat_href">сыпучие материалы</a>
</nav>
<section class="katalog">
    <?php foreach ($items as $item){
        echo '<div class="katalog_item" style="background-image:url('.$item["img"].')"><h3>'.$item["name"].'</h3><a href="/catalog?id='.$item["id"].'">Подробнее</a></div>';
    } ?>
    
</section>
<div class="menu_icon_wrapper">
    <span class="spanc active"></span>
</div>