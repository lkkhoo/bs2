<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="bg-gray-100"> 
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                <li class="px-2">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="px-2">
                    <a href="">About Us</a>
                </li>
                <li class="px-2">
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="px-2"> 
                    <a href="">Activities</a>
                </li>
                <li class="px-2">
                    <a href="">Your Part</a>
                </li>
            </ul>

            <ul class="flex items-center">
                @auth
                    <li class="px-2">
                        <a href="">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</a>
                    </li>
                    <li class="px-2">
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="px-2">
                        <a href="{{ route('admin') }}">Admin</a>
                    </li>
                @endguest
            </ul>

        </nav>
        @yield('content')
    </body>
</html>