<?php snippet('header') ?>

<?php foreach (page('home')->children()->visible() as $section): ?>
    <section class="slide">
        <h2><?php echo $section->title(); ?></h2>
        <?php echo $section->text(); ?>

    </section>
<?php endforeach; ?>

<?php snippet('footer') ?>