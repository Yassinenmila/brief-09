<div class="min-h-screen flex items-center justify-center px-4">
    <form class="bg-white w-full max-w-4xl p-8 rounded-2xl shadow-lg space-y-6">

        <!-- Titre -->
        <h2 class="text-3xl font-bold text-center text-gray-800">
            Ajouter un article
        </h2>

        <!-- Titre article -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Titre de l’article</label>
            <input type="text" name="title"
                class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Titre de l’article">
        </div>

        <!-- Auteur + Date -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Auteur</label>
                <input type="text" name="author"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"
                    placeholder="Nom de l’auteur">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Date de publication</label>
                <input type="date" name="date"
                    class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <!-- Catégorie -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Catégorie</label>
            <select name="category"
                class="w-full border rounded-lg px-4 py-3 bg-white focus:ring-2 focus:ring-blue-500">
                <option value="">-- Choisir une catégorie --</option>
                <option value="tech">Technologie</option>
                <option value="education">Éducation</option>
                <option value="sport">Sport</option>
                <option value="culture">Culture</option>
                <option value="autre">Autre</option>
            </select>
        </div>

        <!-- Contenu -->
        <div>
            <label class="block text-gray-700 font-medium mb-2">Contenu de l’article</label>
            <textarea name="content" rows="6"
                class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"
                placeholder="Écrivez votre article ici..."></textarea>
        </div>

        <!-- Bouton -->
        <div class="text-center">
            <button type="submit"
                class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition">
                Publier l’article
            </button>
        </div>

    </form>
</div>