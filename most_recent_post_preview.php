<li class="most-recent__list-elem">
    <a class="most-recent__box-link" title='<?= $post['title'] ?>' href='/post?id=<?= $post['id'] ?>'>
        <div class="most-recent__elem">
            <img class="most-recent__elem-img" src="<?= $post['img_post'] ?>" alt="<?= $post['title'] ?>">
            <div class="most-recent__about-elem">
                <h4 class="most-recent__title"><?= $post['title'] ?></h4>
                <h5 class="most-recent__subtitle"><?= $post['subtitle'] ?></h5>
            </div>
            <hr class="most-recent__elem-hr">
            <div class="most-recent__infobox">
                <div class="most-recent__about-author">
                    <img class="most-recent__avatar" src="<?= $post['img_modifier'] ?>" alt="<?= $post['author'] ?>">
                    <p class="most-recent__author-name"><?= $post['author'] ?></p>
                </div>    
                <p class="most-recent__date"><?= date("n/d/y", $post['date'])?></p>
            </div>     
        </div>
    </a>
</li>