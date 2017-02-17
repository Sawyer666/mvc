<article>
    <? foreach ($getcat as $key => $value) { ?>
        <div class="post">
            <div class="title">
                <h2><? echo $value['title']; ?></h2>
                <p>Category: <? echo $value['name']; ?></p>
            </div>

            <p><?
                $text = $value['content'];
                if (strlen($text) > 200) {
                    $text = substr($text, 0, 200);
                }
                echo $text; ?>
            </p>
            <div class="readmore"><a href="<? echo BASE_URL; ?>Index/postDetails/<? echo $value['id']; ?>">Read more</a>
            </div>
        </div>
    <? } ?>
</article>