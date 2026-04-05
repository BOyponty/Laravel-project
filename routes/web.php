<?php
use App\Models\Recipe;
use Illuminate\Support\Arr ;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::view('/Project', 'Project')->name('project');


Route::get('/recipes',function(){

$model=new Recipe();

$recipes=$model->getAll();

return view('recipes.index', compact('recipes'));

} )->name('recipes.index');

Route::get('/recipes/{id}', function (int $id)  {

$model=new Recipe();
$recipe=$model->retrieve($id);

return view('recipes.show', compact('recipe'));

})->name('recipes.show');
