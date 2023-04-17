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
    <body class="antialiased flex items-center justify-center h-screen ">
        <div class="flex flex-col items-center  mb-3 bg-slate-500 p-9 h-3/4 w-2/5 border-2 border-blue-300 rounded-lg">
            <h1 class="text-4xl mb-3 font-bold">Todo List</h1>
            @foreach ($listItems as $item)
            <div class="flex items-start w-max ">
                <p>{{ $item->name }}</p>
                <form method="POST" action="{{ route('mark', $item->id) }}" accept-charset="UTF-8">
                    @csrf
                    <button type="submit" class=" mx-10 border rounded ">Mark Complete</button>
                </form>
               
            </div>
            @endforeach


            <form method="POST" action="{{route('saveItem')}}" accept-charset="UTF-8">
            @csrf
                <div class="flex-row mb-3">
                    <label for="listItem" class="text-2xl font-semibold">Add Todo Item</label>
                    <input type="text" name="listItem" class="bg-slate-200 rounded ml-3 border border-blue-300">
                </div>
                <button type="submit" class=" text-blue-300 bg-gray-600 font-bold py-2 px-4 rounded border border-blue-300">Save Item</button>
            </form>


        </div>
    </body>
</html>
