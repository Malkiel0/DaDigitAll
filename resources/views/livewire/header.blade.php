<div>
    {{-- Do your work, then step back. --}}

    <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-28"> <!-- Hauteur augmentée de h-20 à h-28 -->
                <div class="flex-shrink-0">
                    <img class="h-16 w-auto" src="{{ asset('img/daDigitAllLogo.png') }}" alt="DA Digit All Logo"> <!-- Hauteur augmentée de h-10 à h-16 -->
                </div>
                <nav class="hidden md:block">
                    <ul class="flex space-x-6">
                        <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Accueil</a></li>
                        <li><a href="#a-propos" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">A Propos</a></li>
                        <li><a href="#nos-services" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Nos Services</a></li>
                        <li><a href="#pourquoi-nous" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Pourquoi Nous</a></li>
                        <li><a href="#portfolio" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Portfolio</a></li>
                        <li><a href="#notre-equipe" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Notre Equipe</a></li>
                        <li><a href="#blog" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Blog</a></li>
                    </ul>
                </nav>
                <div class="hidden md:block">
                    <a href="#contactez-nous" class="bg-indigo-900 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-yellow-500 transition duration-300 ease-in-out">Contactez-Nous</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Menu mobile -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Accueil</a>
                <a href="#a-propos" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">A Propos</a>
                <a href="#nos-services" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Nos Services</a>
                <a href="#pourquoi-nous" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Pourquoi Nous</a>
                <a href="#portfolio" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Portfolio</a>
                <a href="#notre-equipe" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Notre Equipe</a>
                <a href="#blog" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Blog</a>
                <a href="#contactez-nous" class="bg-indigo-900 text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-indigo-800 transition duration-300 ease-in-out">Contactez-Nous</a>
            </div>
        </div>
    </header>
</div>

@push('js')
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
@endpush