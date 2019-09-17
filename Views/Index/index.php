<h1>Welcome to Simple MVC example!</h1>
<h2>Sitemap:</h2>
<ul>
    <?php foreach (array_reverse(Route::getValidRoutes()) as $name => $route): ?>
        <li><a href="/<?= $route; ?>"><?= $name; ?></a></li>
    <?php endforeach; ?>
</ul>