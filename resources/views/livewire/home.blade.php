<div>
    <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 to-blue-900" style="height: 90vh;">
        <div class="absolute inset-0" wire:ignore>
            <canvas id="particle-canvas"></canvas>
        </div>
        <div class="relative z-10 flex h-full items-center">
            <div class="w-full md:w-1/2 flex flex-col justify-center px-6 md:px-12">
                <h2 class="text-yellow-500 font-bold mb-4 pt-12 text-xl opacity-0 transform translate-y-4 transition-all duration-500 ease-out"
                    x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)" x-bind:class="{ 'translate-y-0 opacity-100': show }">
                    <span class="text-yellow-500">DA</span> <span class="text-yellow-500">DIGIT ALL</span>
                </h2>
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4 text-white opacity-0 transform translate-y-4 transition-all duration-500 ease-out"
                    x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)"
                    x-bind:class="{ 'translate-y-0 opacity-100': show }">
                    Les meilleures solutions digitales
                </h1>
                <p class="text-xl md:text-2xl lg:text-3xl mb-8 text-blue-200 opacity-0 transform translate-y-4 transition-all duration-500 ease-out"
                    x-data="{ show: false }" x-init="setTimeout(() => show = true, 500)"
                    x-bind:class="{ 'translate-y-0 opacity-100': show }">
                    Pour une belle montée en croissance
                </p>
                <p class="mb-8 text-gray-300 opacity-0 transform translate-y-4 transition-all duration-500 ease-out"
                    x-data="{ show: false }" x-init="setTimeout(() => show = true, 700)"
                    x-bind:class="{ 'translate-y-0 opacity-100': show }">
                    Nous offrons aux entreprises et aux particuliers des solutions
                    novatrices et performantes qui visent à améliorer leur productivité
                    et à augmenter leurs revenus.
                </p>
                <a href="#nos-services"
                    class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-orange-600 transition duration-300 w-max opacity-0 transform translate-y-4 transition-all duration-500 ease-out"
                    x-data="{ show: false }" x-init="setTimeout(() => show = true, 900)"
                    x-bind:class="{ 'translate-y-0 opacity-100': show }">
                    Découvrez Nos Solutions
                </a>

            </div>
        </div>
    </section>

    <section id="a-propos" class="py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="w-full max-w-6xl mx-auto bg-purple-900 rounded-lg shadow-xl overflow-hidden relative"
                style="min-height: 500px;">
                <div class="digital-current absolute inset-0"></div>
                <canvas class="electricity absolute inset-0" id="electricity-canvas"></canvas>
                <div class="relative z-10 p-12 text-white">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                        <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)"
                            x-bind:class="{ 'opacity-100 translate-y-0': show, 'opacity-0 translate-y-4': !show }"
                            class="transition-all duration-500 ease-out">
                            <h2 class="text-3xl font-bold mb-6">Qui Sommes-Nous?</h2>
                            <p class="text-lg mb-6 text-justify">Nous somme spécialisé dans la transformation digitale ainsi que les
                                technologies de l'information et de la communication.</p>
                            <button
                                class="bg-yellow-500 hover:bg-purple-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">
                                En Savoir Plus
                            </button>
                        </div>
                        <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 400)"
                            x-bind:class="{ 'opacity-100 translate-y-0': show, 'opacity-0 translate-y-4': !show }"
                            class="transition-all duration-500 ease-out">
                            <h2 class="text-3xl font-bold mb-6">Notre Vision</h2>
                            <p class="text-lg text-justify">Notre vision est d'être une référence en matière de transformation
                                digitale et de conseils pour les entreprises du Bénin et de la sous-région.</p>
                        </div>
                        <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 600)"
                            x-bind:class="{ 'opacity-100 translate-y-0': show, 'opacity-0 translate-y-4': !show }"
                            class="transition-all duration-500 ease-out">
                            <h2 class="text-3xl font-bold mb-6">Notre Mission</h2>
                            <p class="text-lg text-justify">Notre mission est de conseiller et d'accompagner les entreprises,
                                petites, moyennes ou grandes, quel que soit le secteur d'activités, en leur fournissant
                                des solutions matérielles, logicielles, organisationnelles sur mesure, afin d'améliorer
                                leurs performances et les conduire à l'efficience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nos-services">
        <div class="relative overflow-hidden bg-gray-100 min-h-screen">
            <!-- Arrière-plan animé -->
            <div class="absolute inset-0">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="1" fill="#3B82F6"></circle>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dots)"></rect>
                </svg>
            </div>

            <!-- Contenu principal -->
            <div class="relative z-10 container mx-auto px-4 py-12">
                <h2 class="text-3xl text-yellow-500 font-bold text-center text-orange-500 mb-12">NOS SERVICES</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md" style="opacity: 1; transform: translateY(0px); transition: opacity 0.5s, transform 0.5s;">
                        <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 7H7v6h6V7z"></path>
                                <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd"></path>
                            </svg>
                            <h3 class="text-xl text-indigo-900 font-semibold">Transformation Digitale</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-justify">En partant de l'analyse des processus métiers, à la conception de
                            solutions numériques, nous vous aidons à identifier les niveaux d'amélioration de tous les
                            processus métiers grâce à des outils appropriés pour vous fournir des solutions sur mesure
                            reliant célérité, sécurité, précision, optimisation des ressources et efficience.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Site Web</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Application
                                Mobile</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Logiciel</span>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md" style="opacity: 1; transform: translateY(0px); transition: opacity 0.5s, transform 0.5s;">
                        <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 7H7v6h6V7z"></path>
                                <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd"></path>
                            </svg>
                            <h3 class="text-xl text-indigo-900 font-semibold">Vente de matériel Informatique et de
                                Réseau</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-justify">Nous vous offrons des gammes complètes de matériels informatiques
                            (ordinateur, serveurs, logiciels, etc.) et de réseau (switch, routeur, firewalls, etc.)
                            grâce à notre large réseau de partenaire. Nous constituons un guichet unique pour tous vos
                            besoins en matériels, en simplifiant le processus d'achat pour l'acquisition à des coûts
                            compétitifs.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Management</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Installation</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Configuration</span>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md" style="opacity: 1; transform: translateY(0px); transition: opacity 0.5s, transform 0.5s;">
                        <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <h3 class="text-xl text-indigo-900 font-semibold">Audit, Conseil et Accompagnement</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-justify">Nous vous aidons à évaluer vos infrastructure et solutions
                            informatiques, pour identifier les vulnérabilités et les risques de sécurités et proposons
                            des solutions pour mitiger votre supprimer ceux-ci. De plus nous vous accompagnons dans la
                            mise en œuvre de ces solutions en veillant à ce que les projets soient livrés à temps dans
                            le respect des budgets et spécifications. Enfin nous offrons de la formation et du transfert
                            de compétence à divers niveaux.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Stratégie</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Conseil</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Formation</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Compétence</span>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md" style="opacity: 1; transform: translateY(0px); transition: opacity 0.5s, transform 0.5s;">
                        <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 text-yellow-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd"></path>
                            </svg>
                            <h3 class="text-xl text-indigo-900 font-semibold">Assistance à Maîtrise d'ouvrage</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-justify">Grâce à notre expertise et expérience, nous accompagnons nos
                            clients dans la mise en œuvre de projets divers par l'identification et formulation des
                            besoins, la définition des objectifs, le choix du meilleur prestataire et le suivi du projet
                            jusqu'au go live. Nous agissons comme un partenaire stratégique, travaillant en étroite
                            collaboration avec les équipes internes de nos clients. Nous jouons un rôle clé dans la
                            gestion du projet en veillant à ce que les ressources, les délais et les coûts soient
                            maîtrisés.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Projet</span>
                            <span class="px-2 py-1 bg-yellow-500 text-indigo-900 text-sm rounded">Assistance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pourquoi-nous" class="relative min-h-[85vh] bg-white overflow-hidden">
        <!-- Arrière-plan avec cercles concentriques -->
        <div class="absolute inset-0">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="circles-gradient" cx="50%" cy="50%" r="50%" fx="50%"
                        fy="50%">
                        <stop offset="0%" stop-color="#E5E7EB" stop-opacity="0.5" />
                        <stop offset="100%" stop-color="#E5E7EB" stop-opacity="0" />
                    </radialGradient>
                </defs>
                <circle cx="50%" cy="50%" r="45%" fill="none" stroke="url(#circles-gradient)"
                    stroke-width="0.5">
                    <animateTransform attributeName="transform" type="rotate" from="0 50% 50%" to="360 50% 50%"
                        dur="60s" repeatCount="indefinite" />
                    <animate attributeName="opacity" values="0.5;1;0.5" dur="10s" repeatCount="indefinite" />
                </circle>
                <circle cx="50%" cy="50%" r="40%" fill="none" stroke="url(#circles-gradient)"
                    stroke-width="0.5">
                    <animateTransform attributeName="transform" type="rotate" from="360 50% 50%" to="0 50% 50%"
                        dur="45s" repeatCount="indefinite" />
                    <animate attributeName="opacity" values="0.7;1;0.7" dur="8s" repeatCount="indefinite" />
                </circle>
                <circle cx="50%" cy="50%" r="35%" fill="none" stroke="url(#circles-gradient)"
                    stroke-width="0.5">
                    <animateTransform attributeName="transform" type="rotate" from="0 50% 50%" to="360 50% 50%"
                        dur="30s" repeatCount="indefinite" />
                    <animate attributeName="opacity" values="0.6;1;0.6" dur="12s" repeatCount="indefinite" />
                </circle>
            </svg>
        </div>

        <!-- Contenu principal -->
        <div class="relative z-10 container mx-auto px-4 py-8 flex flex-col md:flex-row items-center">
            <!-- Colonne de gauche avec les logos technologiques -->
            <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <!-- Gradients -->
                    <linearGradient id="techGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#1a1a1a;stop-opacity:1">
                            <animate attributeName="stop-color" values="#1a1a1a;#2a2a2a;#1a1a1a" dur="3s" repeatCount="indefinite"/>
                        </stop>
                        <stop offset="100%" style="stop-color:#2a2a2a;stop-opacity:1">
                            <animate attributeName="stop-color" values="#2a2a2a;#3a3a3a;#2a2a2a" dur="3s" repeatCount="indefinite"/>
                        </stop>
                    </linearGradient>
            
                    <!-- Filtre pour l'effet de lueur -->
                    <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                        <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
                        <feMerge>
                            <feMergeNode in="coloredBlur"/>
                            <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                    </filter>
            
                    <!-- Animation pour les lignes -->
                    <pattern id="pattern-line" width="8" height="1" patternUnits="userSpaceOnUse">
                        <rect width="4" height="1" fill="white">
                            <animate attributeName="x" values="-4;4;-4" dur="1s" repeatCount="indefinite"/>
                        </rect>
                    </pattern>
                </defs>
            
                <!-- Fond -->
                <rect width="800" height="800" fill="url(#techGradient)"/>
            
                <!-- Groupe principal avec les connexions -->
                <g transform="translate(400, 400)">
                    <!-- Lignes de connexion animées -->
                    <g stroke-width="1" opacity="0.5">
                        <!-- Lignes horizontales -->
                        <line x1="-300" y1="0" x2="300" y2="0" stroke="url(#pattern-line)">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="3s" repeatCount="indefinite"/>
                        </line>
                        <line x1="-250" y1="-100" x2="250" y2="-100" stroke="url(#pattern-line)">
                            <animate attributeName="opacity" values="0.5;0.2;0.5" dur="4s" repeatCount="indefinite"/>
                        </line>
                        <line x1="-250" y1="100" x2="250" y2="100" stroke="url(#pattern-line)">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="3.5s" repeatCount="indefinite"/>
                        </line>
            
                        <!-- Lignes diagonales -->
                        <line x1="-200" y1="-200" x2="200" y2="200" stroke="url(#pattern-line)">
                            <animate attributeName="opacity" values="0.5;0.2;0.5" dur="5s" repeatCount="indefinite"/>
                        </line>
                        <line x1="-200" y1="200" x2="200" y2="-200" stroke="url(#pattern-line)">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="4.5s" repeatCount="indefinite"/>
                        </line>
                    </g>
            
                    <!-- Technologies -->
                    <!-- Centre - Flutter -->
                    <g filter="url(#glow)">
                        <circle r="50" fill="#FA7343">
                            <animate attributeName="r" values="50;52;50" dur="2s" repeatCount="indefinite"/>
                        </circle>
                        <text y="8" text-anchor="middle" fill="white" font-size="20" font-weight="bold">Laravel</text>
                        <circle r="55" fill="none" stroke="#45D1FD" stroke-width="2">
                            <animate attributeName="r" values="55;60;55" dur="2s" repeatCount="indefinite"/>
                            <animate attributeName="opacity" values="1;0;1" dur="2s" repeatCount="indefinite"/>
                        </circle>
                    </g>
            
                    <!-- Technologies autour -->
                    <!-- JavaScript -->
                    <g transform="translate(-150, -150)" filter="url(#glow)">
                        <circle r="35" fill="#F0DB4F">
                            <animate attributeName="r" values="35;37;35" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="black" font-size="14">JS</text>
                    </g>
            
                    <!-- TypeScript -->
                    <g transform="translate(150, -150)" filter="url(#glow)">
                        <circle r="35" fill="#007ACC">
                            <animate attributeName="r" values="35;37;35" dur="2.8s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="white" font-size="14">TS</text>
                    </g>
            
                    <!-- Python -->
                    <g transform="translate(200, 0)" filter="url(#glow)">
                        <circle r="35" fill="#3776AB">
                            <animate attributeName="r" values="35;37;35" dur="3.2s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="white" font-size="14">Python</text>
                    </g>
            
                    <!-- Java -->
                    <g transform="translate(150, 150)" filter="url(#glow)">
                        <circle r="35" fill="#007396">
                            <animate attributeName="r" values="35;37;35" dur="2.5s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="white" font-size="14">Java</text>
                    </g>
            
                    <!-- PHP -->
                    <g transform="translate(-150, 150)" filter="url(#glow)">
                        <circle r="35" fill="#777BB4">
                            <animate attributeName="r" values="35;37;35" dur="2.7s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="white" font-size="14">PHP</text>
                    </g>
            
                    <!-- Kotlin -->
                    <g transform="translate(-200, 0)" filter="url(#glow)">
                        <circle r="35" fill="#21759B">
                            <animate attributeName="r" values="35;37;35" dur="2.9s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="white" font-size="14">Wp</text>
                    </g>
            
                    <!-- Swift -->
                    <g transform="translate(0, -200)" filter="url(#glow)">
                        <circle r="35" fill="#02569B">
                            <animate attributeName="r" values="35;37;35" dur="3.1s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="white" font-size="14">Flutter</text>
                    </g>
            
                    <!-- React -->
                    <g transform="translate(0, 200)" filter="url(#glow)">
                        <circle r="35" fill="#61DAFB">
                            <animate attributeName="r" values="35;37;35" dur="2.6s" repeatCount="indefinite"/>
                        </circle>
                        <text y="5" text-anchor="middle" fill="white" font-size="14">React</text>
                    </g>
            
                    <!-- Particules animées -->
                    <g>
                        <circle r="2" fill="white">
                            <animateMotion dur="10s" repeatCount="indefinite" 
                                path="M 0,0 C 100,-100 200,-100 300,0 C 200,100 100,100 0,0"/>
                            <animate attributeName="opacity" values="0;1;0" dur="10s" repeatCount="indefinite"/>
                        </circle>
                        <circle r="2" fill="#45D1FD">
                            <animateMotion dur="8s" repeatCount="indefinite"
                                path="M 0,0 C -100,-100 -200,-100 -300,0 C -200,100 -100,100 0,0"/>
                            <animate attributeName="opacity" values="0;1;0" dur="8s" repeatCount="indefinite"/>
                        </circle>
                        <circle r="2" fill="#FA7343">
                            <animateMotion dur="12s" repeatCount="indefinite"
                                path="M 0,0 C 100,100 100,200 0,300 C -100,200 -100,100 0,0"/>
                            <animate attributeName="opacity" values="0;1;0" dur="12s" repeatCount="indefinite"/>
                        </circle>
                    </g>
                </g>
            </svg>

            <!-- Colonne de droite avec le texte -->
            <div class="w-full md:w-1/2 mt-8 md:mt-0 md:pl-8">
                <h2 class="text-2xl text-black font-bold text-orange-500 mb-2 animate-fade-in-up">POURQUOI
                    <span class="text-yellow-500">DA</span> <span class="text-yellow-500">DIGIT ALL</span> ?
                </h2>
                <h1 class="text-4xl font-bold mb-4 animate-fade-in-up" style="animation-delay: 0.2s;">Faites évoluer
                    votre entreprise</h1>
                <h3 class="text-2xl mb-6 animate-fade-in-up" style="animation-delay: 0.4s;">avec des technologies
                    récentes</h3>

                <p class="text-gray-600 mb-8 animate-fade-in-up" style="animation-delay: 0.6s;">
                    Notre équipe peut vous aider à transformer votre entreprise en
                    exploitant les dernières capacités technologiques pour rester en
                    avance sur la courbe.
                </p>

                <ul class="space-y-2 mb-8">
                    <li class="flex items-center animate-fade-in-up" style="animation-delay: 0.8s;">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        De l'expertise et l'expérience à votre disposition
                    </li>
                    <li class="flex items-center animate-fade-in-up" style="animation-delay: 1s;">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Un allignement stratégique en adéquation à vos objectifs
                    </li>
                    <li class="flex items-center animate-fade-in-up" style="animation-delay: 1.2s;">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Une accélération dans l'innovation
                    </li>
                    <li class="flex items-center animate-fade-in-up" style="animation-delay: 1.4s;">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Une bonne gestion du changement et l'évolution de la culture
                    </li>
                </ul>

                <button
                    class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-indigo-700 transition duration-300 animate-fade-in-up"
                    style="animation-delay: 1.6s;">
                    En Savoir Plus Sur Nous
                </button>
            </div>
        </div>
    </section>



    <section id="portfolio" class="relative overflow-hidden bg-gray-100 py-24">
        <!-- SVG Background (unchanged) -->
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">

            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M0 40L40 0M0 0L40 40" fill="none" stroke="#e2e8f0" stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />

            <!-- Animated circuits -->
            <g class="animate-pulse">
                <path d="M0 20 Q 200 180, 400 20 T 800 20" fill="none" stroke="#4299e1" stroke-width="2" />
                <path d="M0 40 Q 400 220, 800 40" fill="none" stroke="#4299e1" stroke-width="2" />
                <circle cx="200" cy="100" r="4" fill="#4299e1">
                    <animate attributeName="r" values="3;5;3" dur="2s" repeatCount="indefinite" />
                </circle>
                <circle cx="600" cy="60" r="4" fill="#4299e1">
                    <animate attributeName="r" values="3;5;3" dur="2s" repeatCount="indefinite" />
                </circle>
            </g>

        </svg>

        <!-- Contenu -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="text-center mb-16">
                <h2 class="text-base text-yellow-500 font-semibold tracking-wide uppercase">PORTFOLIO</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Les
                    projets réalisés par notre équipe</p>
            </div>

            <div class="mt-12 relative text-justify">
                <div class="overflow-hidden">
                    <div id="projectsContainer" class="flex space-x-8" id="projectsContainer">
                       

                       

                        <!-- Garage Digit -->
                        <div class="bg-white shadow rounded-lg flex-shrink-0 w-full sm:w-1/3">
                            <img src="{{ asset('img/garageDigit.jpg') }}" alt="Garage Digit"
                                class="w-full h-48 object-cover">
                            <div class="p-5">
                                <h3 class="text-xl font-semibold">Garage Digit</h3>
                                <p class="text-orange-500 uppercase font-semibold">DIGITALISATION</p>
                                <p class="mt-2 text-gray-600">Transformation digitale d'un des plus importants garages
                                    automobiles de Cotonou (ADS Garage). Gestion des entrées et sorties de véhicules
                                    avec un suivi en temps réel.</p>
                                <div class="mt-4">
                                    <span
                                        class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">Plateforme
                                        web</span>
                                    <span
                                        class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full mr-2">PHP</span>
                                    <span
                                        class="inline-block bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full">Laravel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Navigation buttons -->
            <button id="prevButton"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextButton"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

    </section>

    <section id="notre-equipe" class="relative overflow-hidden bg-white py-16">
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-yellow-500 text-xl font-semibold text-orange-500 mb-8">DÉCOUVREZ NOTRE ÉQUIPE
            </h2>

            <p class="text-center text-gray-700 mb-16 max-w-3xl mx-auto text-justify">
                <span class="text-yellow-500">DA</span> <span class="text-yellow-500">DIGIT ALL</span> c'est une
                équipe de jeune dynamique et innovante, constituée de profils experts et juniors,
                complémentaires et variés, pour répondre aux besoins contemporains dans le domaine des nouvelles
                technologies et de
                l'organisation des entreprises. Elle est constituée d'ingénieurs et de techniciens dynamiques, dévoués
                et prétris
                d'expérience. Nous sommes également en partenariat avec plusieurs entreprises de référence en Tunisie
                pour mutualiser quand
                c'est nécessaire les riches expériences et les références acquises.
            </p>

            <h3 class="text-center text-3xl font-bold text-gray-900 mb-16">La satisfaction de nos clients, Notre
                Réputation</h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ([['name' => 'Mathias DEKADJEVI', 'role' => 'CEO & Co-Founder', 'image' => 'img/mathias.jpg'], ['name' => 'Laurette GANGBADJA', 'role' => 'Assistante de direction', 'image' => 'img/laurette.jpg'], ['name' => 'Anselme Victor AKPOVI', 'role' => 'Développeur Web', 'image' => 'img/anselme.jpg'] ,['name' => 'Eden AHOUSSOU', 'role' => 'Développeur Web', 'image' => 'img/eden.jpg'], ['name' => 'Banel SEMASSOUSSI', 'role' => 'Développeur Web', 'image' => 'img/banel.jpg'], ['name' => 'Emmeran Malkiel LIMA', 'role' => 'Développeur front-end (stagiaire)', 'image' => 'img/emmeran.jpeg']] as $member)
                    <div class="flex flex-col items-center space-y-4 group">
                        <div
                            class="relative w-32 h-40 rounded-full overflow-hidden transition-transform duration-300 transform group-hover:scale-110">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                                class="absolute w-full h-full object-cover object-center"
                                style="object-position: center;">
                        </div>
                        <h4 class="font-semibold text-lg text-center">{{ $member['name'] }}</h4>
                        <p class="text-sm text-gray-600 text-center">{{ $member['role'] }}</p>
                        <div class="flex space-x-4">
                            <svg class="w-5 h-5 text-gray-400 hover:text-blue-500 transition-colors duration-200"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                            <svg class="w-5 h-5 text-gray-400 hover:text-blue-700 transition-colors duration-200"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="w-5 h-5 text-gray-400 hover:text-gray-700 transition-colors duration-200"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Nouvelle section pour les entreprises de confiance -->
    <div>
        <section id="trusted-companies"
            class="relative py-24 overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-700">
            <div class="absolute inset-0 bg-[url('/img/circuit-pattern.svg')] opacity-10"></div>
            <div class="container mx-auto px-4 relative z-10">
                <h2 id="trusted-companies-title" class="text-5xl font-extrabold text-center mb-16 text-white opacity-0 transform translate-y-10 transition-all duration-1000 ease-out">
                    Ils nous font confiance
                </h2>
                <div class="relative" x-data="{ activeIndex: 0 }" x-init="setInterval(() => { activeIndex = (activeIndex + 1) % {{ count($companies) }} }, 3000)">
                    <div class="flex justify-center items-center h-96">
                        @foreach ($companies as $index => $company)
                            <div class="absolute transition-all duration-1000 ease-in-out transform"
                                :class="{
                                    'opacity-100 scale-100': activeIndex === {{ $index }},
                                    'opacity-0 scale-90': activeIndex !== {{ $index }},
                                    'translate-x-0': activeIndex === {{ $index }},
                                    '-translate-x-full': (activeIndex > {{ $index }} || (activeIndex === 0 &&
                                        {{ $index }} === {{ count($companies) - 1 }})),
                                    'translate-x-full': (activeIndex < {{ $index }} && !(activeIndex === 0 &&
                                        {{ $index }} === {{ count($companies) - 1 }}))
                                }">
                                <img src="{{ $company['logo'] }}" alt="{{ $company['name'] }}"
                                    class="h-32 w-auto object-contain filter drop-shadow-2xl">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-16 mb-12 grid grid-cols-4 gap-8">
                    @foreach ($companies as $index => $company)
                        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 transform transition-all duration-300 hover:scale-105 hover:bg-opacity-20"
                            x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                            <img src="{{ $company['logo'] }}" alt="{{ $company['name'] }}"
                                class="h-16 w-auto object-contain mx-auto mb-4 transition-all duration-300"
                                :class="{ 'filter grayscale': !isHovered }">
                            <p class="text-center text-white font-semibold opacity-0 transform translate-y-4 transition-all duration-300"
                                :class="{ 'opacity-100 translate-y-0': isHovered }">{{ $company['name'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none transform rotate-180">
                <svg class="relative block w-full h-24" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="fill-current text-gray-100"></path>
                </svg>
            </div>
        </section>
    </div>



    <section id="blog" class="relative overflow-hidden bg-gray-100 py-24">
        <!-- SVG Background -->
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="honeycomb" width="56" height="100" patternUnits="userSpaceOnUse">
                    <path d="M28 66L0 50L0 16L28 0L56 16L56 50L28 66L28 100" fill="none" stroke="#e2e8f0"
                        stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#honeycomb)" />

            <!-- Animated elements -->
            <g class="animate-pulse">
                <circle cx="5%" cy="5%" r="50" fill="rgba(249, 115, 22, 0.1)">
                    <animate attributeName="cy" values="5%;95%;5%" dur="20s" repeatCount="indefinite" />
                </circle>
                <circle cx="95%" cy="95%" r="70" fill="rgba(124, 58, 237, 0.1)">
                    <animate attributeName="cx" values="95%;5%;95%" dur="25s" repeatCount="indefinite" />
                </circle>
            </g>
        </svg>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-yellow-500 font-semibold tracking-wide uppercase">NOTRE BLOG</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Les
                    récents post de notre blog</p>
            </div>

            <div class="mt-12 relative">
                <div class="overflow-hidden">
                    <div id="blogPostsContainer" class="flex space-x-8">
                        <!-- Blog Post 1 -->
                        <div class="bg-white shadow rounded-lg flex-shrink-0 w-full sm:w-1/4">
                            <img src="{{ asset('img/mtn.jpg') }}?height=300&width=400" alt="Design Pattern"
                                class="w-full h-48 object-cover">
                            <div class="p-5">
                                <span
                                    class="inline-block bg-purple-600 text-white text-xs px-2 py-1 rounded-full mb-2">PROGRAMMATION</span>
                                <h3 class="text-xl font-semibold">Design Pattern</h3>
                                <p class="text-gray-600 text-sm">Par Anselme • 05-09-23 10:23</p>
                                <p class="mt-2 text-gray-600">Brief description of the blog post about design patterns
                                    in programming...</p>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="bg-white shadow rounded-lg flex-shrink-0 w-full sm:w-1/4">
                            <img src="{{ asset('img/mtn.jpg') }}?height=300&width=400" alt="Design Pattern"
                                class="w-full h-48 object-cover">
                            <div class="p-5">
                                <span
                                    class="inline-block bg-purple-600 text-white text-xs px-2 py-1 rounded-full mb-2">PROGRAMMATION</span>
                                <h3 class="text-xl font-semibold">Design Pattern</h3>
                                <p class="text-gray-600 text-sm">Par Fran • 05-09-23 10:22</p>
                                <p class="mt-2 text-gray-600">Another perspective on design patterns in software
                                    development...</p>
                            </div>
                        </div>

                        <!-- Blog Post 3 -->
                        <div class="bg-white shadow rounded-lg flex-shrink-0 w-full sm:w-1/4">
                            <img src="{{ asset('img/mtn.jpg') }}?height=300&width=400" alt="Design Pattern"
                                class="w-full h-48 object-cover">
                            <div class="p-5">
                                <span
                                    class="inline-block bg-purple-600 text-white text-xs px-2 py-1 rounded-full mb-2">PROGRAMMATION</span>
                                <h3 class="text-xl font-semibold">Design Pattern</h3>
                                <p class="text-gray-600 text-sm">Par Banal • 05-09-23 10:21</p>
                                <p class="mt-2 text-gray-600">Exploring the practical applications of design
                                    patterns...</p>
                            </div>
                        </div>

                        <!-- Blog Post 4 -->
                        <div class="bg-white shadow rounded-lg flex-shrink-0 w-full sm:w-1/4">
                            <img src="{{ asset('img/mtn.jpg') }}?height=300&width=400" alt="Design Pattern"
                                class="w-full h-48 object-cover">
                            <div class="p-5">
                                <span
                                    class="inline-block bg-purple-600 text-white text-xs px-2 py-1 rounded-full mb-2">PROGRAMMATION</span>
                                <h3 class="text-xl font-semibold">Design Pattern</h3>
                                <p class="text-gray-600 text-sm">Par Fran • 05-09-23 10:15</p>
                                <p class="mt-2 text-gray-600">Advanced techniques in implementing design patterns...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="text-center mt-8">
                    <button
                        class="bg-yellow-500 text-white px-6 py-2 rounded-md hover:bg-purple-900 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">
                        Voir Plus
                    </button>
                </div>
            </div>
            <!-- Navigation buttons -->
            <button id="prevBlogButton"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextBlogButton"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>






    <section id="contactez-nous"
        class="relative min-h-[90vh] flex items-center justify-center bg-purple-900 overflow-hidden py-12">
        <!-- SVG Animations -->
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:rgb(76,29,149);stop-opacity:1" />
                    <stop offset="100%" style="stop-color:rgb(91,33,182);stop-opacity:1" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#grad1)" />
            <g fill="none" stroke="rgba(139,92,246,0.1)" stroke-width="2">
                <path d="M0,0 Q400,50 800,0 T1600,0" class="animate-pulse">
                    <animate attributeName="d" dur="20s" repeatCount="indefinite"
                        values="M0,0 Q400,50 800,0 T1600,0;
                                M0,100 Q400,150 800,100 T1600,100;
                                M0,0 Q400,50 800,0 T1600,0" />
                </path>
                <path d="M0,100 Q400,150 800,100 T1600,100" class="animate-pulse">
                    <animate attributeName="d" dur="25s" repeatCount="indefinite"
                        values="M0,100 Q400,150 800,100 T1600,100;
                                M0,200 Q400,250 800,200 T1600,200;
                                M0,100 Q400,150 800,100 T1600,100" />
                </path>
            </g>
        </svg>

        <div class="relative z-10 bg-white bg-opacity-5 backdrop-filter backdrop-blur-lg rounded-xl p-8 max-w-md w-full space-y-6 shadow-lg border border-opacity-30 border-white"
            style="box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37); backdrop-filter: blur(4px);">
            <h2 class="text-3xl font-bold text-center text-white mb-8">Laissez un message</h2>

            <form wire:submit.prevent="submit" class="space-y-4">
                <div>
                    <input wire:model.defer="name" type="text" placeholder="Nom *"
                        class="w-full px-4 py-2 rounded-md bg-white bg-opacity-10 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-300 border border-opacity-30 border-white"
                        required>
                    @error('name')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <input wire:model.defer="email" type="email" placeholder="Email Address *"
                        class="w-full px-4 py-2 rounded-md bg-white bg-opacity-10 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-300 border border-opacity-30 border-white"
                        required>
                    @error('email')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <textarea wire:model.defer="message" placeholder="Laissez votre message ici" rows="4"
                        class="w-full px-4 py-2 rounded-md bg-white bg-opacity-10 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-300 border border-opacity-30 border-white"
                        required></textarea>
                    @error('message')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                        Envoyer
                    </button>
                </div>
            </form>

            @if (session()->has('message'))
                <div class="text-green-400 text-center mt-4">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </section>
</div>

@push('styles')
    <style>
        /* Autres styles existants */
        
        /* Styles pour la section des entreprises de confiance */
        #trusted-companies {
            min-height: 60vh;
            background: linear-gradient(to right, #1a237e, #311b92);
        }

        #trusted-companies .h-96 {
            height: 40vh;
        }

        #trusted-companies img {
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
            -ms-interpolation-mode: nearest-neighbor;
            max-height: 120px;
            width: auto;
            filter: contrast(1.1) brightness(1.1);
            transform: translateZ(0);
            backface-visibility: hidden;
        }

        #trusted-companies .grid-cols-4 {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        #trusted-companies .bg-white.bg-opacity-10 {
            background-color: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
        }

        @media (max-width: 768px) {
            #trusted-companies .h-96 {
                height: 30vh;
            }
            
            #trusted-companies img {
                max-height: 80px;
            }
        }
       
    </style>
@endpush



@push('js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Particle animation
            const canvas = document.getElementById('particle-canvas');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            let animationFrameId;

            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }

            window.addEventListener('resize', resizeCanvas);
            resizeCanvas();

            const particles = [];
            for (let i = 0; i < 100; i++) {
                particles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    radius: Math.random() * 2 + 1,
                    dx: (Math.random() - 0.5) * 0.5,
                    dy: (Math.random() - 0.5) * 0.5,
                });
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                ctx.fillStyle = 'rgba(137, 207, 240, 0.5)';
                particles.forEach(particle => {
                    ctx.beginPath();
                    ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
                    ctx.fill();

                    particle.x += particle.dx;
                    particle.y += particle.dy;

                    if (particle.x < 0 || particle.x > canvas.width) particle.dx *= -1;
                    if (particle.y < 0 || particle.y > canvas.height) particle.dy *= -1;
                });

                ctx.strokeStyle = 'rgba(137, 207, 240, 0.2)';
                ctx.lineWidth = 0.5;
                for (let i = 0; i < particles.length; i++) {
                    for (let j = i + 1; j < particles.length; j++) {
                        const dx = particles[i].x - particles[j].x;
                        const dy = particles[i].y - particles[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 100) {
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.stroke();
                        }
                    }
                }

                animationFrameId = requestAnimationFrame(animate);
            }

            animate();

            // Electricity animation
            const electricityCanvas = document.getElementById('electricity-canvas');
            if (!electricityCanvas) return;
            const electricityCtx = electricityCanvas.getContext('2d');

            function resizeElectricityCanvas() {
                electricityCanvas.width = electricityCanvas.offsetWidth;
                electricityCanvas.height = electricityCanvas.offsetHeight;
            }

            window.addEventListener('resize', resizeElectricityCanvas);
            resizeElectricityCanvas();

            class Lightning {
                constructor() {
                    this.reset();
                }

                reset() {
                    this.x = Math.random() * electricityCanvas.width;
                    this.y = 0;
                    this.ex = Math.random() * electricityCanvas.width;
                    this.ey = electricityCanvas.height;
                    this.life = 0;
                    this.maxLife = Math.random() * 20 + 30;
                }

                update() {
                    this.life++;
                    if (this.life >= this.maxLife) {
                        this.reset();
                    }
                }

                draw() {
                    const progress = this.life / this.maxLife;
                    const alpha = 1 - progress;

                    electricityCtx.strokeStyle = `rgba(255, 255, 255, ${alpha})`;
                    electricityCtx.lineWidth = 2;
                    electricityCtx.beginPath();
                    electricityCtx.moveTo(this.x, this.y);

                    let x = this.x;
                    let y = this.y;
                    while (y < this.ey) {
                        x += (Math.random() - 0.5) * 20;
                        y += Math.random() * 20 + 10;
                        electricityCtx.lineTo(x, y);
                    }
                    electricityCtx.stroke();
                }
            }

            const lightnings = Array(5).fill().map(() => new Lightning());

            function animateElectricity() {
                electricityCtx.clearRect(0, 0, electricityCanvas.width, electricityCanvas.height);

                lightnings.forEach(lightning => {
                    lightning.update();
                    lightning.draw();
                });

                requestAnimationFrame(animateElectricity);
            }

            animateElectricity();

            return () => {
                cancelAnimationFrame(animationFrameId);
            };


        });


        document.addEventListener('livewire:load', function() {
            // Add any JavaScript animations or interactivity here
            // For example, you could add a scrolling animation to the projects
            const projects = document.querySelectorAll('.bg-white');
            projects.forEach((project, index) => {
                project.style.opacity = '0';
                project.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    project.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    project.style.opacity = '1';
                    project.style.transform = 'translateY(0)';
                }, 100 * index);
            });
        });

        document.addEventListener('alpine:init', () => {
            Alpine.directive('scroll', (el, {
                expression
            }, {
                evaluate
            }) => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            evaluate(expression)
                            observer.unobserve(el)
                        }
                    })
                }, {
                    threshold: 0.2
                })

                observer.observe(el)
            })
        })


        document.addEventListener('DOMContentLoaded', function() {
            const projects = [{
                    title: "Shop Digit",
                    category: "E-COMMERCE",
                    image: "{{ asset('img/keylaShop.jpg') }}",
                    description: "Développement d'une plateforme de gestion des activités de Keyla Shop pour la structure Keyla Distribution. Vente et gestion de stock aussi bien en direction qu'en agence.",
                    tags: ["Plateforme web", "PHP", "Laravel"]
                },
                {
                    title: "Master Digit",
                    category: "DIGITALISATION",
                    image: "{{ asset('img/file.png') }}",
                    description: "Automatisation de tous les processus métiers en mettant à la disposition de la structure Challenge Distribution, une plateforme unique en ligne pour des interactions en temps réel.",
                    tags: ["Plateforme web", "Laravel"]
                },
                {
                    title: "Master Digit(Mobile)",
                    category: "DIGITALISATION",
                    image: "{{ asset('img/dsaAccueil.png') }}",
                    description: "Automatisation de tous les processus métiers en mettant à la disposition de la structure Challenge Distribution, une plateforme unique en ligne pour des interactions en temps réel.",
                    tags: ["Plateforme web", "Laravel"]
                },
                {
                    title: "Stock Digit",
                    category: "DIGITALISATION",
                    image: "{{ asset('img/stockDigit.png') }}",
                    description: "Cette application est conçue pour simplifier et automatiser les processus de gestion de stock et de facturation du master distributeur Faghal. Elle offre des fonctionnalités modernes et intuitives pour répondre aux besoins spécifiques de gestion commerciale, tout en améliorant l'efficacité et la traçabilité des opérations.",
                    tags: ["Plateforme web", "Laravel"]
                },
                {
                    title: "Garage Digit",
                    category: "DIGITALISATION",
                    image: "{{ asset('img/garageDigit.jpg') }}",
                    description: "Transformation digitale d'un des plus importants garages automobiles de Cotonou (ADS Garage). Gestion des entrées et sorties de véhicules avec un suivi en temps réel.",
                    tags: ["Plateforme web", "PHP", "Laravel"]
                },
                // Add more projects here if needed
            ];

            const container = document.getElementById('projectsContainer');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');
            let currentIndex = 0;
            let intervalId;

            function createProjectElement(project) {
                return `
            <div class="bg-white shadow rounded-lg flex-shrink-0 w-full sm:w-1/3 px-2">
                <img src="${project.image}" alt="${project.title}" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold">${project.title}</h3>
                    <p class="text-orange-500 uppercase font-semibold">${project.category}</p>
                    <p class="mt-2 text-gray-600">${project.description}</p>
                    <div class="mt-4">
                        ${project.tags.map(tag => `<span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">${tag}</span>`).join('')}
                    </div>
                </div>
            </div>
        `;
            }

            function updateProjects() {
                container.innerHTML = '';
                for (let i = 0; i < 3; i++) {
                    const index = (currentIndex + i) % projects.length;
                    container.innerHTML += createProjectElement(projects[index]);
                }
            }

            function nextProject() {
                currentIndex = (currentIndex + 1) % projects.length;
                updateProjects();
                container.style.transform = 'translateX(-33.33%)';
                setTimeout(() => {
                    container.style.transition = 'none';
                    container.style.transform = 'translateX(0)';
                    setTimeout(() => {
                        container.style.transition = 'transform 300ms ease-in-out';
                    }, 50);
                }, 300);
            }

            function prevProject() {
                currentIndex = (currentIndex - 1 + projects.length) % projects.length;
                updateProjects();
                container.style.transition = 'none';
                container.style.transform = 'translateX(-33.33%)';
                setTimeout(() => {
                    container.style.transition = 'transform 300ms ease-in-out';
                    container.style.transform = 'translateX(0)';
                }, 50);
            }

            function startAutoScroll() {
                intervalId = setInterval(nextProject, 5000); // Change slide every 5 seconds
            }

            function stopAutoScroll() {
                clearInterval(intervalId);
            }

            nextButton.addEventListener('click', () => {
                stopAutoScroll();
                nextProject();
                startAutoScroll();
            });

            prevButton.addEventListener('click', () => {
                stopAutoScroll();
                prevProject();
                startAutoScroll();
            });

            // Start auto-scrolling
            updateProjects();
            startAutoScroll();

            // Optional: Pause auto-scrolling when hovering over the carousel
            container.addEventListener('mouseenter', stopAutoScroll);
            container.addEventListener('mouseleave', startAutoScroll);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const blogPosts = [{
                    title: "Design Pattern",
                    category: "PROGRAMMATION",
                    image: "img/mtn.jpg?height=300&width=400",
                    author: "Anselme",
                    date: "05-09-23 10:23",
                    description: "Brief description of the blog post about design patterns in programming..."
                },
                {
                    title: "Design Pattern",
                    category: "PROGRAMMATION",
                    image: "img/mtn.jpg?height=300&width=400",
                    author: "Fran",
                    date: "05-09-23 10:22",
                    description: "Another perspective on design patterns in software development..."
                },
                {
                    title: "Design Pattern",
                    category: "PROGRAMMATION",
                    image: "img/mtn.jpg?height=300&width=400",
                    author: "Banal",
                    date: "05-09-23 10:21",
                    description: "Exploring the practical applications of design patterns..."
                },
                {
                    title: "Design Pattern",
                    category: "PROGRAMMATION",
                    image: "img/mtn.jpg?height=300&width=400",
                    author: "Fran",
                    date: "05-09-23 10:15",
                    description: "Advanced techniques in implementing design patterns..."
                }
                // Add more blog posts here if needed
            ];

            const container = document.getElementById('blogPostsContainer');
            const prevButton = document.getElementById('prevBlogButton');
            const nextButton = document.getElementById('nextBlogButton');
            let currentIndex = 0;
            let intervalId;

            function createBlogPostElement(post) {
                return `
            <div class="bg-white shadow rounded-lg flex-shrink-0 w-full sm:w-1/4 px-2">
                <img src="${post.image}" alt="${post.title}" class="w-full h-48 object-cover">
                <div class="p-5">
                    <span class="inline-block bg-purple-600 text-white text-xs px-2 py-1 rounded-full mb-2">${post.category}</span>
                    <h3 class="text-xl font-semibold">${post.title}</h3>
                    <p class="text-gray-600 text-sm">Par ${post.author} • ${post.date}</p>
                    <p class="mt-2 text-gray-600">${post.description}</p>
                </div>
            </div>
        `;
            }

            function updateBlogPosts() {
                container.innerHTML = '';
                for (let i = 0; i < 4; i++) {
                    const index = (currentIndex + i) % blogPosts.length;
                    container.innerHTML += createBlogPostElement(blogPosts[index]);
                }
            }

            function nextBlogPost() {
                currentIndex = (currentIndex + 1) % blogPosts.length;
                updateBlogPosts();
                container.style.transform = 'translateX(-25%)';
                setTimeout(() => {
                    container.style.transition = 'none';
                    container.style.transform = 'translateX(0)';
                    setTimeout(() => {
                        container.style.transition = 'transform 300ms ease-in-out';
                    }, 50);
                }, 300);
            }

            function prevBlogPost() {
                currentIndex = (currentIndex - 1 + blogPosts.length) % blogPosts.length;
                updateBlogPosts();
                container.style.transition = 'none';
                container.style.transform = 'translateX(-25%)';
                setTimeout(() => {
                    container.style.transition = 'transform 300ms ease-in-out';
                    container.style.transform = 'translateX(0)';
                }, 50);
            }

            function startAutoScroll() {
                intervalId = setInterval(nextBlogPost, 5000); // Change slide every 5 seconds
            }

            function stopAutoScroll() {
                clearInterval(intervalId);
            }

            nextButton.addEventListener('click', () => {
                stopAutoScroll();
                nextBlogPost();
                startAutoScroll();
            });

            prevButton.addEventListener('click', () => {
                stopAutoScroll();
                prevBlogPost();
                startAutoScroll();
            });

            // Start auto-scrolling
            updateBlogPosts();
            startAutoScroll();

            // Optional: Pause auto-scrolling when hovering over the carousel
            container.addEventListener('mouseenter', stopAutoScroll);
            container.addEventListener('mouseleave', startAutoScroll);
        });

        document.addEventListener('DOMContentLoaded', function () {
        const title = document.getElementById('trusted-companies-title'); // Sélectionner l'élément H2

        // Créer un observer d'intersection
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Si l'élément est visible dans la fenêtre
                if (entry.isIntersecting) {
                    // Ajouter les classes pour rendre l'élément visible avec l'animation
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                } else {
                    // Sinon, remettre les classes initiales
                    entry.target.classList.remove('opacity-100', 'translate-y-0');
                    entry.target.classList.add('opacity-0', 'translate-y-10');
                }
            });
        }, { threshold: 0.5 }); // Observer lorsque 50% de l'élément est visible

        // Observer l'élément H2
        observer.observe(title);
    });
    </script>
@endpush
