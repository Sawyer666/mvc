<article>
    <h2>Post Details</h2>
    <? foreach ($postbyid as $key => $value) { ?>
        <div class="details">

            <div class="title">
                <h2><? echo $value['title']; ?></h2>
                <p>Category:<a
                            href="<? echo BASE_URL; ?>Index/postByCat/<? echo $value['cat']; ?>"><? echo $value['name']; ?></a>
                </p>
            </div>
            <div class="desc">
                <p><? echo $value['content'] ?></p>
            </div>
        </div>
    <? } ?>
</article>
