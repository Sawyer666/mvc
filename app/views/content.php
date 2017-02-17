<? foreach ($allPost as $key => $value) { ?>
    <div class="post">
        <h2><a href="<? echo BASE_URL; ?>Index/postDetails/<? echo $value['id']; ?>"><? echo $value['title'] ?></a>
        </h2>
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


