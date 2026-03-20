<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::view('/Project', 'Project')->name('project');

Route::get('/recipes',function(){

$recipes = [

    1 => [ 'title' =>'Spaghetti Carbonara','ingredients' => ['Pasta', 'Eggs','cheese','bacon'] ],
    2 => [ 'title' => 'Chicken Curry','ingredients' => ['Chicken','Coconut Milk','curry Powder'] ],
    3 => [ 'title' => 'Vegetable Stir Fry','ingredients' => ['broccoli','carrots','say sauce','garlic'] ],
];

$firstname='Marc';
$lastname='Aurèle';
return view('recipes.index',[

    'name' => $firstname,
    'lastname' => $lastname,
    ]);

} )->name('recipes.index');
