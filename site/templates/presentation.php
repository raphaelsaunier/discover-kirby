<!DOCTYPE html>
<html lang="<?php echo $site->language()->code; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo url('node_modules/shower-ribbon/styles/screen-16x10.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/prism.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/styles.css'); ?>">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
</head>

<body class="shower list">

<header class="caption">
    <h1><?php echo $site->title(); ?></h1>
    <?php echo $site->subtitle()->kirbytext(); ?>
</header>


<?php foreach (page('home')->children() as $slide): ?>

    <?php snippet('slide', compact('slide')); ?>

<?php endforeach; ?>


<?php if (boolval($site->show_progress_bar())): ?>
    <div class="progress"></div>
<?php endif; ?>

<script src="<?php echo url('node_modules/shower-core/shower.min.js'); ?>"></script>
<script src="<?php echo url('assets/js/prism.js'); ?>"></script>
</body>
</html>
