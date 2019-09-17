<?php
Route::set('contact-us', 'Contact us', function (string $action = 'index') {
    ContactUsController::action($action);
});

Route::set('about-us', 'About us', function (string $action = 'index') {
    AboutUsController::action($action);
});

Route::set('index.php', 'Homepage', function (string $action = 'index') {
    IndexController::action($action);
});