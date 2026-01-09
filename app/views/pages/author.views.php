<main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Bienvenue, Yassine</h1>
            <button href="/article" type="bu" class="bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 transition">
                Nouvel Article
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-gray-500">Articles publiés</h2>
                <p class="text-2xl font-bold text-gray-800 mt-2">24</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-gray-500">Commentaires</h2>
                <p class="text-2xl font-bold text-gray-800 mt-2">128</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-gray-500">Vues totales</h2>
                <p class="text-2xl font-bold text-gray-800 mt-2">5,230</p>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Derniers articles</h2>
                <ul class="divide-y divide-gray-200">
        <li class="group py-3 px-3 flex justify-between items-center rounded-lg transition hover:bg-gray-50">
            <div>
                <p class="text-gray-800 font-medium">Comment utiliser Tailwind CSS</p>
                <span class="text-gray-500 text-sm">Publié le 07/01/2026</span>
            </div>
            <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition">
                <a href="/article/edit/1" class="px-3 py-1 text-sm rounded-md bg-indigo-500 text-white hover:bg-indigo-600">Modifier</a>
                <button class="px-3 py-1 text-sm rounded-md bg-red-500 text-white hover:bg-red-600">Supprimer</button>
            </div>
        </li>
    </ul>
        </div>
    </main>