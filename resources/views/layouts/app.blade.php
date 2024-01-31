<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Rental | Application</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-gray-600 py-4 px-8 text-white flex justify-between">
        <div class="left">
            <p class="font-medium text-xl text-yellow-400">Book Rental Application</p>
        </div>
        <div class="right">
            @guest 
                <a href="/register">
                    <button class="underline text-lg mx-2">Register</button>
                </a>
                <a href="/login">
                    <button class="underline text-lg mx-2">Login</button>
                </a>
            @else
                <div class="flex">
                    <a href="/books">
                        <button class="underline text-lg mx-2 text-yellow-500">Books</button>
                    </a>
                    <a href="/profile">
                        <button class="underline text-lg mx-2 text-yellow-500">Profile</button>
                    </a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="underline text-lg mx-2 text-yellow-500">Logout</button>
                    </form>
                </div>
            @endguest
        </div>
    </div>
    @yield('content')
</body>
</html>