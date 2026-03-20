<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

       <body class="flex flex-col min-h-screen">
       {{-- <-- Navigation -->-- --}}
        <nav class="bg-white shadow-md p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-xl font-bold">Logo</a>
                <ul class="flex space-x-6">
                    <x-link-item href="/" :active="Route::currentRouteName() === 'homepage' ? true : false" class="underline">Homepage</x-link-item>
                    <x-link-item href="/Project" :active="Route::currentRouteName() === 'project' ? true : false">Project</x-link-item>
                    <x-link-item href="/recipes" :active="Route::currentRouteName() === 'recipes.index' ? true : false">Recipes</x-link-item>
                </ul>
            </div>
        </nav>

      <main class="flex-grow container mx-auto p-6">
         {{ $slot }}
      </main>

      <footer class="bg-gray-100 text-center p-4 mt-6">
        <p class="text-gray-600">&copy; 2025 Laravel. Tous droits réservés.</p>
      </footer>

       </body>
</html>
