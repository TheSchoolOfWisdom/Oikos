<?php foreach ($resultats as $key => $value){ ?>

    <div class="article">

        <h1><?= ''.$value['title'].'' ?></h1>

        <div class="article-description">
            <?= ''.$value['description'].'' ?>
        </div>

        <div class="article-image">
            <?php if (''.$value['image'].'' != '') { ?>
                <?= '<img src=',''.$folder.'', ''.$value['image'].'', '>' ?>
            <?php } ?>
        </div>

        <div class="article-content">
            <?= ''.$value['content'].'' ?>
        </div>

        <div class="article-info">
            Date de publication: <?= ''.$value['created'].'' ?>
        </div>

    </div>

<?php } ?>