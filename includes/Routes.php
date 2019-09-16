<?php
Route::set('about-us', function () {
    AboutUsController::action();
});

Route::set('contact-us', function () {
    ContactUsController::action();
});

Route::set('index.php', function () {
    IndexController::action();
});