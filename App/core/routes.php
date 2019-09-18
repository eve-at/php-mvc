<?php
Route::add('index.php', 'Homepage', function (string $action = 'index') {
    IndexController::action($action);
});

Route::add('about-us', 'About us', function (string $action = 'index') {
    AboutUsController::action($action);
});

Route::add('contact-us', 'Contact us', function (string $action = 'index') {
    ContactUsController::action($action);
});