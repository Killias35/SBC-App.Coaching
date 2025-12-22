<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white-800 leading-tight">
            Nouvelle Séance
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900/90 backdrop-blur shadow-xl sm:rounded-2xl border border-gray-700 p-8">
                <form method="POST" action="{{ route('seances.store') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="titre" class="block text-gray-300 font-semibold mb-2">Titre</label>
                        <textarea 
                            id="titre" 
                            name="titre" 
                            rows="1"
                            maxlength="200"
                            placeholder="Seance du {{ today()->format('d/m/Y') }}" 
                            class="w-full p-4 bg-gray-800 text-white rounded-xl border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-lg leading-relaxed resize-none shadow-inner"
                        >Seance du {{ today()->format('d/m/Y') }}</textarea>

                        <label for="description" class="block text-gray-300 font-semibold mb-2">Décris ta séance</label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="12"
                            maxlength="800"
                            placeholder="Écris ici ta séance du jour..." 
                            class="w-full p-4 bg-gray-800 text-white rounded-xl border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-lg leading-relaxed resize-none shadow-inner"
                        ></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2 text-red-400" />
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-2xl shadow-lg transition">
                            Enregistrer la séance
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
