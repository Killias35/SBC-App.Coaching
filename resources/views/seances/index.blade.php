<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-white leading-tight">
            Séances
        </h2>
        <p class="text-sm text-gray-400 mt-1">
            Organise, suis et rejoue tes entraînements
        </p>
    </x-slot>

    @php
        $hasCoach = auth()->user()->coach != null;
    @endphp

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 {{ $hasCoach ? '' : 'cursor-not-allowed'}}">

                <!-- Séances coach -->
                <a {{ $hasCoach ? 'href=' . route('seances.coach') : '' }}
                   class="group relative overflow-hidden rounded-3xl p-8
                          bg-gradient-to-tl from-sky-600 to-blue-400
                          text-white shadow-lg hover:shadow-2xl transition">

                    @if ($hasCoach)
                        <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition"></div>
                    @endif
                    <div class="relative z-10 text-center">
                        <div class="text-6xl mb-4">🎯</div>
                        <h3 class="text-2xl font-bold mb-2">
                            Séances coach
                        </h3>
                        <p class="text-sm text-blue-100">
                            Programmes guidés et séances recommandées
                            <p class='text-white text-xl'>{{ $hasCoach ? '' : "(vous n'avez pas de coach, vous ne pouvez pas accéder à cette partie)" }}</p>
                        </p>
                    </div>
                </a>

                <!-- Séances créées -->
                <a href="{{ route('seances.mines') }}"
                   class="group relative overflow-hidden rounded-3xl p-8
                          bg-gradient-to-t from-orange-600 to-amber-400
                          text-white shadow-lg hover:shadow-2xl transition">

                    <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative z-10 text-center">
                        <div class="text-6xl mb-4">📝</div>
                        <h3 class="text-2xl font-bold mb-2">
                            Mes séances
                        </h3>
                        <p class="text-sm text-orange-100">
                            Crée, ajuste et personnalise tes entraînements
                        </p>
                    </div>
                </a>

                <!-- Séances réalisées (future feature) -->
                <div
                    class="relative overflow-hidden rounded-3xl p-8
                           bg-gradient-to-br from-slate-200 to-slate-300
                           text-slate-600 shadow-inner cursor-not-allowed">

                    <div class="absolute inset-0 bg-white/40"></div>

                    <div class="relative z-10 text-center">
                        <div class="text-6xl mb-4 opacity-70">⏱️</div>
                        <h3 class="text-2xl font-bold mb-2">
                            Séances réalisées
                        </h3>
                        <p class="text-sm text-slate-500">
                            Historique et statistiques à venir
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
