<h1>Welcome to Simple MVC example!</h1>
<h2>Below you find default routes:</h2>
<ul>
    <?php foreach (Route::$validRoutes as $route): ?>
        <li><a href="/<?= $route; ?>"><?= ucfirst($route); ?></a></li>
    <?php endforeach; ?>
</ul>