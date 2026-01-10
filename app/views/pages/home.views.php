    <div class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <h1 class="text-4xl font-bold text-gray-800">Nos Articles</h1>
            <p class="text-gray-500 mt-2">Découvrez nos derniers articles et publications</p>
        </div>
    </div>
    <main class="max-w-7xl mx-auto px-6 py-10">
        <div class="grid grid-cols-3 gap-8">
            <?php foreach($article as $a): ?>
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col">
                <h2 class="text-xl font-semibold text-gray-800 mb-3"><?= $a['titre'] ?></h2>
                <div class="text-sm text-gray-500 mb-3">
                    <span class="font-medium text-gray-700"><?= $a['author'] ?></span>
                    ·
                    <span><?= $a['date'] ?></span>
                </div>
                <div class="flex items-center justify-between mt-auto pt-4 border-t">
                    <div class="flex items-center gap-4 text-sm text-gray-500">
                        <span>❤️ <b><?= $a['total_likes'] ?></b></span>
                        <span>💬 <b><?= $a['total_comments'] ?></b></span>
                    </div>
                    <form action="/detaille" method="POST">
                        <input name="id" type="hidden" value="<?= $a['article_id'] ?>" >
                        <button type="submit">lire plus</button>
                    </form>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </main>