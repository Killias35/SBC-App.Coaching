<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-white-800 leading-tight">
                Toutes les séances
            </h2>
            <a href="{{ route('seances.create') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-xl shadow transition">
                💪 Créer une séance
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($seances->isEmpty())
                <p class="text-white-400 text-center text-lg mt-8">Aucune séance n’a encore été créée.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($seances as $seance)
                        <div class="bg-gray-900/90 backdrop-blur shadow-xl sm:rounded-2xl border border-gray-700 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="truncate text-xl font-semibold text-white">{{ $seance->titre }}</h3>
                                </div>
                                <p class="truncate text-gray-300 leading-relaxed mb-4">{{ Str::limit($seance->description, 120) }}</p>
                                @if($seance->image)
                                    <img src="{{ asset('storage/' . $seance->image) }}" alt="Image de la séance" class="rounded-lg shadow-md w-full object-cover max-h-40 mb-4">
                                @endif
                                <p class="truncate text-gray-400 text-sm">Créée par {{ $seance->user->name }}</p>
                                <span class="truncate text-gray-400 text-sm">{{ $seance->created_at->format('d/m/Y') }}</span>
                            </div>
                            <div class="mt-4 flex justify-between gap-2">
                                <a href="{{ route('seances.edit', $seance->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-3 rounded-lg transition text-sm">Modifier</a>
                                <form method="POST" action="{{ route('seances.destroy', $seance->id) }}" onsubmit="return confirm('Voulez-vous vraiment supprimer cette séance ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-3 rounded-lg transition text-sm">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
