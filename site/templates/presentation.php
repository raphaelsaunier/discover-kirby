<!DOCTYPE html>
<html lang="<?php echo $site->language()->code; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo url('node_modules/shower-ribbon/styles/screen-16x10.css'); ?>">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <style>
        .slide pre code:not(:only-child)::before {
            position: relative;
            margin-left: 0;
        }
        #title {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding-bottom: 50px;
        }
        #title h2 {
            font-size: 3em;
        }
        #title h3 {
            text-transform: uppercase;
            font-size: 0.85em;
            letter-spacing: 0.1em;
        }
        #title::after {
            visibility: hidden;
        }
    </style>
</head>

<body class="shower list">

<header class="caption">
    <h1><?php echo $site->title(); ?></h1>
    <?php echo $site->subtitle()->kirbytext(); ?>
</header>

<?php foreach (page('home')->children()->visible() as $section): ?>
    <section class="slide" id="<?php echo $section->uid(); ?>">
        <h2><?php echo $section->title(); ?></h2>
        <?php echo $section->text()->kirbytext(); ?>
<!--
        <div style="height: 300px; overflow: scroll">
            <pre>
            <?php echo formatCode(esc(print_r($section, true))); ?>
            </pre>
        </div>
-->
    </section>
<?php endforeach; ?>

<?php if (boolval($site->show_progress_bar())): ?>
    <div class="progress"></div>
<?php endif; ?>

<script src="<?php echo url('node_modules/shower-core/shower.min.js'); ?>"></script>

</body>
</html>
