
<h1 class="text-center h_1"><?php echo $title; ?></h1>

<?php foreach ($news_date as $news_item): ?>

        <h2 class="h_2">Periodo <?php echo $news_item['id']; ?></h2>
        <h3>El periodo inicia: <?php echo $news_item['fecha_inicio']; ?></h3>
        <div class="main">
                <h3>El periodo termina: <?php echo $news_item['fecha_fin']; ?></h3>
        </div>
        <hr />

<?php endforeach; ?>
