<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white tracking-wide">
            Tableau de bord
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Card -->
            <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-xl border border-gray-700 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Bienvenue, {{ Auth::user()->name }} 💪</h3>
                    <p class="text-gray-300">Tu es connecté ! Commence ton suivi d’entraînement dès maintenant.</p>
                </div>
            </div>

            <!-- Example Stats / Widgets -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Widget 1 -->
                <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-lg border border-gray-700 p-5">
                    <h4 class="text-red-500 font-bold text-lg mb-2">Séances cette semaine</h4>
                    <p class="text-gray-300 text-2xl font-semibold">XX</p>
                </div>

                <!-- Widget 2 -->
                <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-lg border border-gray-700 p-5">
                    <h4 class="text-red-500 font-bold text-lg mb-2">Objectif mensuel</h4>
                    <p class="text-gray-300 text-2xl font-semibold">XX séances</p>
                </div>

                <!-- Widget 3 -->
                <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-lg border border-gray-700 p-5">
                    <h4 class="text-red-500 font-bold text-lg mb-2">Progrès PR</h4>
                    <p class="text-gray-300 text-2xl font-semibold">+XX%</p>
                </div>
            </div>

            <!-- Future sections / charts / stats can go here -->
            <!-- Welcome Card -->
            <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-xl border border-gray-700 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Notes temporaires...</h3>
                </div>
            </div>

        <div class="gap-6">
            <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-lg border border-gray-700 p-5">
                <h4 class="text-red-500 font-bold text-lg mb-4">
                    Liste des fonctionnalités :
                </h4>

                <p class="text-gray-300 mb-1">
                    • Création et connexion de compte
                </p>
                <p class="text-gray-300 mb-1">
                    • Vérification d’e-mail et mot de passe oublié par e-mail
                </p>
                <p class="text-gray-300 mb-1">
                    • Page profil avec réinitialisation du mot de passe
                </p>
                <p class="text-gray-300 mb-1">
                    • Création, modification et suppression de séances privées
                </p>
                <p class="text-gray-300 mb-1">
                    • Création et modification d’activités (mise en public pour tous pour le moment)
                </p>
                <p class="text-gray-300 mb-1">
                    • Possibilité de mettre une activité en favori
                </p>
                <p class="text-gray-300 mb-1">
                    • Ajout d’activités créées dans une séance via un sélecteur
                </p>
                <p class="text-gray-300 mb-1">
                    • Accès aux activités favorites (priorisées dans le menu déroulant)
                </p>
                <p class="text-gray-300 mb-1">
                    • Accès aux séances d’un coach privé avec statut fait / non fait
                </p>
                <p class="text-gray-400 text-sm mb-1">
                    (compte test : testCoach2@gmail.com / testCoach2)
                </p>
                <p class="text-gray-300">
                    • Menu statistiques affichant certains exercices présents dans les séances
                    <span class="text-gray-400 text-sm">(à approfondir)</span>
                </p>
            </div>
        </div>

        </div>
    </div>
</x-app-layout>
