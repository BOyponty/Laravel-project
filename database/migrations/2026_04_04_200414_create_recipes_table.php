<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
             $table->string('title');
              $table->json('ingrediants');
            $table->timestamps();
        });
  $recipes = [

    1 => [ 'title' =>'Spaghetti Carbonara','ingredients' => ['Pasta', 'Eggs','cheese','bacon'] ],
    2 => [ 'title' => 'Chicken Curry','ingredients' => ['Chicken','Coconut Milk','curry Powder'] ],
    3 => [ 'title' => 'Vegetable Stir Fry','ingredients' => ['broccoli','carrots','say sauce','garlic'] ],
];

foreach($recipes as $recipe) {
            DB::table('recipes')->insert([
                'title' => $recipe['title'],
                'ingrediants' => json_encode($recipe['ingredients']),
                'created_at' => now(),
                'updated_at' => now(),
            ]); 
            // Insert each recipe into the database
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
