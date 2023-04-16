<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo App</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        
        </style>
    </head>
    <body class="antialiased">
        <div class="flex-col items-center text-center mb-3">
            <h1 class="text-3xl mb-3">TodoList</h1>
            <form action="post" action="{{route('saveItem')}}" accept-charset="UTF-8">
                <div class="flex-row mb-3">
                    <label for="listItem" class="">Add Todo Item</label>
                    <input type="text" name="listItem" class="bg-slate-200 rounded ml-3 border border-blue-300">
                </div>
                <button type="submit" class=" text-black font-bold py-2 px-4 rounded border border-blue-300">Save Item</button>
            </form>
        </div>
    </body>
</html>
