<div class="span10">
    <article>
        <h1><?=$topic->title?></h1>
        <div>
            <!-- <divkdate($topic->created)?></div> -->
            <?=$topic->created?>
            <?php echo $topic->description ?>
        </div>
    </article>
</div>