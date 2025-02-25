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
    
    <style>
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #111827;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-content {
            position: relative;
            width: 200px;
            height: 200px;
        }

        .loading-circle {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 4px solid #34D399;
            border-radius: 50%;
            animation: pulse 2s ease-in-out infinite;
        }

        .loading-grid {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: 
                linear-gradient(90deg, rgba(52, 211, 153, 0.1) 1px, transparent 1px) 0 0 / 20px 20px,
                linear-gradient(rgba(52, 211, 153, 0.1) 1px, transparent 1px) 0 0 / 20px 20px;
            animation: rotate 10s linear infinite;
        }

        .loading-text {
            position: absolute;
            width: 100%;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            color: #34D399;
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: glow 2s ease-in-out infinite;
        }

        .loading-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(52, 211, 153, 0.2) 1px, transparent 1px) 0 0 / 15px 15px;
            animation: particleFloat 20s linear infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.1); opacity: 0.4; }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes glow {
            0%, 100% { 
                text-shadow: 0 0 5px rgba(52, 211, 153, 0.7),
                           0 0 10px rgba(52, 211, 153, 0.5);
            }
            50% { 
                text-shadow: 0 0 15px rgba(52, 211, 153, 0.9),
                           0 0 20px rgba(52, 211, 153, 0.7);
            }
        }

        @keyframes particleFloat {
            from { transform: translateY(0); }
            to { transform: translateY(-100%); }
        }

        .content-fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .content-fade-in.visible {
            opacity: 1;
        }

        .fade-out {
            opacity: 0 !important;
            transition: opacity 1s ease-in-out;
        }
    </style>
</head>
<body>
    <!-- Écran de chargement -->
    <div id="loading-screen">
        <div class="loading-content">
            <div class="loading-particles"></div>
            <div class="loading-circle"></div>
            <div class="loading-grid"></div>
            <div class="loading-text">DaDigitAll</div>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="content-fade-in">
        <header>
            @livewire('header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @livewire('footer')
        </footer>
    </div>

    @stack('js')
    @livewireScripts

    <script>
        // Gestion de l'écran de chargement
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loading-screen');
            const content = document.querySelector('.content-fade-in');

            // Masquer l'écran de chargement
            setTimeout(() => {
                loadingScreen.classList.add('fade-out');
                setTimeout(() => {
                    loadingScreen.style.display = 'none';
                    // Afficher le contenu
                    content.classList.add('visible');
                }, 1000);
            }, 1500);
        });

        // Gestion des transitions Livewire
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
</html>