<a class="featured__box-link" title='<?= $post['title'] ?>' href='/post?id=<?= $post['id'] ?>'>
    <div class="featured__elem featured__elem-container <?= $post['class'] ?>">
        <p class="featured__category <?= $post['categoria_link'] ?>"><?= $post['categoria'] ?></p>
        <h4 class="featured__title"><?= $post['title'] ?></h4>
        <h5 class="featured__subtitle"><?= $post['subtitle'] ?></h5>
        <div class="featured__infobox">
            <div class="featured__about-author">
                <img class="featured__avatar" src="<?= $post['img_modifier'] ?>" alt="<?= $post['author'] ?>">
                <p class="featured__author-name"><?= $post['author'] ?></p>
            </div>    
            <p class="featured__date"><?= date("F j, Y", $post['date'])?></p>
        </div>
    </div>
</a>