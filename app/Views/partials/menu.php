<h2>Site navigation</h2>
<nav>
    <ul>
        <?php foreach (Route::getValidRoutes() as $route => $routeData): ?>
            <li><a href="/<?= $route; ?>"><?= $routeData['name']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>