<?php
    if ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1' &&  $_SERVER['REMOTE_ADDR'] !== "::1") {
        http_response_code(404);
        die;
    }
?>

<style>
    .spritemap {
        display: flex;
        flex-wrap: wrap;
    }

    .spritemap__item {
        width: 135px; /* 148 */
        border: 1px solid grey;
        margin: 5px;
        padding: 5px;
        line-height: 1.3;
    }

    .spritemap__svg {
        width: 100%;
        outline: 1px solid rgba(255, 0, 0, 0.5);
    }

    .spritemap__name {
        text-align: center;
        font-weight: bold;
        margin: 3px 0;
    }

    .spritemap__size {
        text-align: center;
        margin: 3px 0;
    }
</style>

<?php
$spritemap = file_get_contents('wp-content/themes/mario/assets/sprite.svg');
$symbols = [];

preg_match_all('/<symbol\s((?!<).)*>/', $spritemap, $_symbols);

foreach ($_symbols[0] as $_symbol) {
    preg_match_all('/id="(((?!").)*)"/', $_symbol, $_ids);
    preg_match_all('/viewBox="0 0 (((?!").)*)"/', $_symbol, $_viewBox);

    $symbols[] = [
        'id' => $_ids[1][0],
        'viewBox' => $_viewBox[1][0]
    ];
}
?>

<div class="spritemap">
    <?php foreach ($symbols as $symbol): ?>
        <div class="spritemap__item">
            <svg class="spritemap__svg">
                <use xlink:href="/wp-content/themes/mario/assets/sprite.svg#<?php echo $symbol['id'] ?>"></use>
            </svg>
            <div class="spritemap__name">
                <?php echo $symbol['id'] ?>
            </div>
            <div class="spritemap__size">
                <?php echo $symbol['viewBox'] ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
