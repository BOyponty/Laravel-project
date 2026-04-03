<?php


declare(strict_types=1);


namespace App\Models ;

class Recipe {
        public function getAll(): array
        {
            return [

    1 => [ 'title' =>'Spaghetti Carbonara','ingredients' => ['Pasta', 'Eggs','cheese','bacon'] ],
    2 => [ 'title' => 'Chicken Curry','ingredients' => ['Chicken','Coconut Milk','curry Powder'] ],
    3 => [ 'title' => 'Vegetable Stir Fry','ingredients' => ['broccoli','carrots','say sauce','garlic'] ],
];
        }

        public function retrieve(int $id): array
        {
            $recipes = $this->getAll();
            return
$recipe = Arr::get($recipes, $id, ['title' => 'Recipe not found', 'ingredients' => []]);
        }
}
