<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-white">
            Créer une activité
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto px-4">
            <form method="POST" action="{{ route('activites.store') }}"
                  class="bg-gray-900 border border-gray-700 rounded-2xl shadow-xl p-8 space-y-6">
                @csrf

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <div>
                    <label class="block text-sm text-gray-300 mb-1">Nom</label>
                    <input type="text" name="nom" required
                           class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:ring-2 focus:ring-red-600">
                </div>

                <div>
                    <label class="block text-sm text-gray-300 mb-1">Image (URL)</label>
                    <input type="text" name="image"
                           class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white">
                </div>

                <div>
                    <label class="block text-sm text-gray-300 mb-1">Description</label>
                    <textarea name="description" rows="6" required
                              class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white resize-none focus:ring-2 focus:ring-red-600"></textarea>
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('activites.index') }}"
                       class="px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 text-white">
                        Annuler
                    </a>

                    <button class="px-6 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-semibold">
                        Créer
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
