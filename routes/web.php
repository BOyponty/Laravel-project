<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::view('/Project', 'Project')->name('project');


Route::get('/recipes',function() use($recipes){



return view('recipes.index', compact('recipes'));

} )->name('recipes.index');

Route::get('/recipes/{id}', function (int $id) use($recipes) {


$recipe = Arr::get($recipes, $id, ['title' => 'Recipe not found', 'ingredients' => []]);

return view('recipes.show', compact('recipe'));

})->name('recipes.show');
