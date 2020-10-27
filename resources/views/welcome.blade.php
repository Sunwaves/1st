<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        
        <title>First Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="css/app.css">
        
        <!-- STYLES -->
      
        

        
    </head>
    
    <body class="bg-fixed" style="background-image:url(https://images.wallpapersden.com/image/download/programming-coding-language_bGhpbm6UmZqaraWkpJRmbmdlrWZlbWU.jpg)">
       
    
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Dashboard</button></a>
                    @else
                        <a href="{{ route('login') }}"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Register</button></a>
                        @endif
                    @endif
                </div>
            @endif
       
       
    </body>
</html>
