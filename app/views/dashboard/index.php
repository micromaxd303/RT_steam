<?php \Core\View::renderHeader(); ?>

<section class="columns is-full is-centered is-vertical catalog">
    <section class="column is-8 filter">
        <div class="select is-rounded is-small">
            <select id="selector-games">
                <option>Отображать по</option>
                <?php for ($i = 5 ; $i <= 20; $i = $i + 5): ?>
                    <option value="<?=$i;?>" name="<?=$i;?>">
                        <?=$i;?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>

        <div class="select is-rounded is-small">
            <select id="selector-genres">
                <option>Жанры</option>
                <?php foreach ($genres as $genre): ?>
                    <option value="<?=$genre->id; ?>" name="<?=$genre->name_genre; ?>">
                        <?=$genre->name_genre; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="select is-rounded is-small">
            <select id="selector-companies">
                <option>Компании</option>
                <?php foreach ($companies as $company): ?>
                    <option value="<?=$company->id; ?>" name="<?=$company->name_company; ?>">
                        <?=$company->name_company; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <section class="catalog-sort-visible">
            <nav class="columns">
                <ul class="column is-12">
                    <li class="sort-visible">
                        Однопользовательская игра
                        <span>&#x2715</span>
                    </li>
                    <li class="sort-visible">
                        Многопользовательская игра
                        <span>&#x2715</span>
                    </li>
                    <li class="sort-visible">
                        ММОРПГ
                        <span>&#x2715</span>
                    </li>
                    <li>
                        <a href="">
                            Очистить все
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </section>
</section>

<section class="columns is-full is-centered is-vertical catalog-block">
    <div class="column is-8">
        <div class="columns is-multiline" id="dashboard">
            <?php foreach ($games as $game) : ?>
                <div class="column is-one-quarter game">
                    <div class="game-cover">
                        <div class="buy" id="<?=$game->id?>">
                            <span class="icon">
                                <ion-icon name="cart-outline"></ion-icon>
                            </span>
                            Добавить в корзину
                        </div>
                        <figure class='image is-full'>
                            <img src="images/administrator/<?=$game->cover_game;?>" alt="<?=$game->name_game;?>">
                        </figure>
                    </div>
                    <div class="game-description">
                        <div class="game-title">
                            <?=$game->name_game;?>
                        </div>
                        <div class="game-company">
                            <?=$game->company->name_company;?>
                        </div>
                        <div class="game-price">
                            <?=$game->base_price;?> &#x20bd
                            <span class="discount">-<?=$game->tax;?>%</span>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>

<?php \Core\View::renderFooter(); ?>