<section class="slide" id="<?php echo $slide->uid(); ?>">

    <?php if (!$slide->hideTitle()->bool()): ?>
        <h2><?php echo $slide->title(); ?></h2>
    <?php endif; ?>

    <div class="<?php ecco($slide->scrollable()->bool(), 'scrollable'); ?>">
        <?php echo $slide->text()->kirbytext(); ?>
    </div>

    <?php if (!$slide->styles()->isEmpty()): ?>
        <style type="text/css">
            <?php echo $slide->styles(); ?>
        </style>
    <?php endif; ?>
</section>