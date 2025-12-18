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
                    <p class="text-gray-300 text-2xl font-semibold">3</p>
                </div>

                <!-- Widget 2 -->
                <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-lg border border-gray-700 p-5">
                    <h4 class="text-red-500 font-bold text-lg mb-2">Objectif mensuel</h4>
                    <p class="text-gray-300 text-2xl font-semibold">12 séances</p>
                </div>

                <!-- Widget 3 -->
                <div class="bg-gray-800/90 backdrop-blur rounded-2xl shadow-lg border border-gray-700 p-5">
                    <h4 class="text-red-500 font-bold text-lg mb-2">Progrès</h4>
                    <p class="text-gray-300 text-2xl font-semibold">+8%</p>
                </div>
            </div>

            <!-- Future sections / charts / stats can go here -->

        </div>
    </div>
</x-app-layout>
