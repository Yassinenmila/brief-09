<main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Bienvenue, <?= $_SESSION['user']['name'] ?></h1>
            <a href="/article" class="inline-block bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 transition">Nouvel Article</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-gray-500">Articles publiés</h2>
                <p class="text-2xl font-bold text-gray-800 mt-2"><?= $data[0]['total_art'] ?></p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-gray-500">Commentaires</h2>
                <p class="text-2xl font-bold text-gray-800 mt-2"><?= $data[0]['total_comments'] ?></p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-gray-500">likes</h2>
                <p class="text-2xl font-bold text-gray-800 mt-2"><?= $data[0]['total_likes'] ?></p>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Derniers articles</h2>
            <ul class="divide-y divide-gray-200">
                <?php foreach($data as $a): ?>
                <li class="group py-3 px-3 flex justify-between items-center rounded-lg transition hover:bg-gray-50">
                    <div>
                        <p class="text-gray-800 font-medium"><?= $a['titre'] ?></p>
                        <span class="text-gray-500 text-sm">Publié le <?= $a['date'] ?></span>
                    </div>
                    <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition">
                        <form action="/update" methode="POST">
                            <input name="id"  type="hidden" value="<?= $a['article_id'] ?>" >
                            <button type="submit" class="px-3 py-1 text-sm rounded-md bg-indigo-500 text-white hover:bg-indigo-600">Modifier</button>
                        </form>
                        <form action="/delet" methode="POST">
                            <input name="id"  type="hidden" value="<?= $a['article_id'] ?>" >
                            <button type="submit" class="px-3 py-1 text-sm rounded-md bg-red-500 text-white hover:bg-red-600">suprimer</button>
                        </form>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </main>