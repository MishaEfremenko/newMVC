<?php

?>
<h1 class="states_header">
    Полезные материвалы
</h1>
<section class="state_content">
    <div class="states">
        <?php
            foreach ($items as $item){
                echo '      <div class="state">
                <img src="img/bor.jpg" alt="">
                <div class="state_opis">
                    <h2>'.$item['name'].'</h2>
                    <div>
                        '.$item['pre'].'
                    </div>
                    <a href="/blog?id='.$item['id'].'">Узнать больше</a>
                </div>
            </div>';
            }
        ?>
    </div>
    <aside class="latests">
        <h2>
            последние статьи
        </h2>
        <div class="late_state">
            <img src="<?= $items[0]['img'] ?>" alt="">
            <div class="late_state_text">
                <h2><?= $items[0]['name'] ?></h2>
                <a href="blog?id=<?= $items[0]['id'] ?>">Узнать больше</a>
            </div>
        </div>
        <div class="late_state">
            <img src="<?= $items[1]['img'] ?>" alt="">
            <div class="late_state_text">
                <h2><?= $items[1]['name'] ?></h2>
                <a href="blog?id=<?= $items[1]['id'] ?>">Узнать больше</a>
            </div>
        </div>
        <div class="late_state">
            <img src="<?= $items[2]['img'] ?>" alt="">
            <div class="late_state_text">
                <h2><?= $items[2]['name'] ?></h2>
                <a href="blog?id=<?= $items[2]['id'] ?>">Узнать больше</a>
            </div>
        </div>
        </div>
    </aside>
</section>