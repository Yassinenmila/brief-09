<div class="min-h-screen flex items-center justify-center px-4">
    <form method="POST" action="/article" class="bg-white w-full max-w-4xl p-8 rounded-2xl shadow-lg space-y-6">
        <h2 class="text-3xl font-bold text-center text-gray-800">Ajouter un article</h2>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Titre de l’article</label>
            <input type="text" name="titre" class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Titre de l’article">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-3">Catégories</label>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                <?php foreach($categories as $c): ?>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="categories[]" value="<?= $c['id'] ?>" class="w-4 h-4 text-blue-600">
                        <?= $c['name'] ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Contenu de l’article</label>
            <textarea name="content" rows="6" class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500" placeholder="Écrivez votre article ici..."></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition">Publier l’article</button>
        </div>
    </form>
</div>
