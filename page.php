<?= get_header() ?>
<?= the_post() ?>
<main id="content">
    <div class="container">
        <h1 class='the-title'><?= the_title() ?></h1>
        <div class="the-content">
            <?= the_content() ?>
        </div>
    </div>
</main>
<?= get_footer() ?>