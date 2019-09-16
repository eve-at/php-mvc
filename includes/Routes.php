<?php
Route::set('contact-us', 'Contact us', function () {
    ContactUsController::action();
});

Route::set('about-us', 'About us', function () {
    AboutUsController::action();
});

Route::set('index.php', 'Homepage', function () {
    IndexController::action();
});