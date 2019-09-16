<?php
Route::set('index.php', function () {
    IndexController::action('index');
});

Route::set('about-us', function () {
    AboutUsController::action('about-us');
});

Route::set('contact-us', function () {
    ContactUsController::action('contact-us');
});