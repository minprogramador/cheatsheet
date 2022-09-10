<?php

namespace App;

enum Category: string
{
    case Fruits = 'fruits';
    case People = 'people';
}

Route::get('/categories/{category}', function (Category $category) {
    return $category->value;
});
