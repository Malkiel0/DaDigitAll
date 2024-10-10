<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaDigitAll</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    @stack('styles')
    

</head>
<body class="content-fade-in">
    
    <header >
        @livewire('header')
    </header>

    <main>

        @yield('content')
       
      
       
    </main>

    <footer>
        @livewire('footer')
    </footer>

    
    
    @stack('js')
    @livewireScripts   
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('contentReady', function () {
                const contentElements = document.querySelectorAll('.content-fade-in');
                contentElements.forEach((element, index) => {
                    setTimeout(() => {
                        element.classList.add('visible');
                    }, index * 200);
                });
            });
        });
    </script>
    </body>




    