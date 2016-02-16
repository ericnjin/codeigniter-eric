<div class="span10">
    <article>
        <h1><?=$topic->title?></h1>
        <div>
            <!-- <divkdate($topic->created)?></div> -->
            <?=$topic->created?>
            <?php echo $topic->description ?>
        </div>
    </article>
    <div>
    	<a href="/index.php/topic/add" class="btn">추가</a>
    </div>
</div>