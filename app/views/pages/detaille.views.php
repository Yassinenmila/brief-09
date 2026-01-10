<?php print_r($data) ?>
<div class="max-w-4xl mx-auto py-10 px-4">
    <article class="bg-white rounded-xl shadow p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-2"><?= $data['titre'] ?></h1>
        <div class="text-sm text-gray-500 mb-4">
            Par <span class="font-medium"><?= $data['author']?></span> • <?= $data['create_at'] ?>
        </div>
        <p class="text-gray-700 leading-relaxed mb-6"><?= $data['contenu']?></p>
        <div class="flex items-center gap-4">
            <form action="/detaille" method="POST">
                <button class="flex items-center gap-2 bg-red-100 text-red-600 px-4 py-2 rounded-lg hover:bg-red-200 transition">❤️ Like</button>
            </form>
            <span class="text-gray-600 text-sm"><?= $total_likes ?> likes</span>
        </div>
    </article>
    <section class="mt-10 bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Commentaires</h2>
        <!-- la po je doit faire la loop -->
        <div class="border-b pb-4 mb-4">
            <p class="text-sm font-medium text-gray-700">Ahmed</p>
            <p class="text-gray-600 text-sm mt-1">Très bon article, merci pour les informations !</p>
        </div>
        <!-- la ou je doit finir la loop -->
            <label class="block text-sm font-medium text-gray-700 mb-2">Ajouter un commentaire</label>
        <form class="mt-6" action="/detaille" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>" >
            <textarea name="comment" rows="4" class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Écrire votre commentaire..."></textarea>
            <button type="submit" class="mt-4 bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">Publier</button>
        </form>
    </section>

</div>