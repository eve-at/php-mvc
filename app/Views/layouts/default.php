<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= $metaTitle ?? 'Horns and hooves'; ?></title>
    </head>
    <body>
        <?php include_once (VIEWS_PATH . 'partials/menu.php'); ?>

        <h1><?= $pageTitle ?? null; ?></h1>
        <hr>

        <?= $pageContent ?? null; ?>
    </body>
</html>