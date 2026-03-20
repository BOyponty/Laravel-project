<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::view('/Project', 'Project')->name('project');

Route::get('/recipes',function(){

$recipes = [

    1 => [ 'title' =>'Spaghetti Carbonara','ingredients' => ['Pasta', 'Eggs','cheese','bacon'] ],
    2 => [ 'title' => 'Chicken Curry','ingredients' => ['Chicken','Coconut Milk','curry Powder'] ],
    3 => [ 'title' => 'Vegetable Stir Fry','ingredients' => ['broccoli','carrots','say sauce','garlic'] ],
];


return view('recipes.index', compact('recipes'));

} )->name('recipes.index');

Route::get('/recipes/{id}', function (int $id) {

$recipes = [

    1 => [ 'title' =>'Spaghetti Carbonara','ingredients' => ['Pasta', 'Eggs','cheese','bacon'] ],
    2 => [ 'title' => 'Chicken Curry','ingredients' => ['Chicken','Coconut Milk','curry Powder'] ],
    3 => [ 'title' => 'Vegetable Stir Fry','ingredients' => ['broccoli','carrots','say sauce','garlic'] ],
];
$recipe = Arr::get($recipes, $id, ['title' => 'Recipe not found', 'ingredients' => []]);

return view('recipes.show', compact('recipe'));

})->name('recipes.show');
