<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"
    <title></title>
</head>
<body class="p-5 bg-light">
    <div class="container">
        <header class="mb-5">
            @yield('header-content')
        </header>

        <main>
            
                @yield('main-content')
            </div>
        </main>
        
        <footer>
            @yield('footer-content')
        </footer>
    <div class="container">
</body>
</html>
<link rel="stylesheet" href="">