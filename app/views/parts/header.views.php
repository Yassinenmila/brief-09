<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Blogos' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between py-4">
                <div class="logo">
                    <a href="/" class="flex items-center space-x-2">
                        <span class="text-2xl">📝</span>
                        <h1 class="text-2xl font-bold text-blue-600">BlogOS</h1>
                    </a>
                </div>
                <ul class="hidden md:flex items-center space-x-8">
                    <li><a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition">Accueil</a></li>
                    <li><a href="/articles" class="text-gray-700 hover:text-blue-600 font-medium transition">Articles</a></li>
                    <li><a href="/categories" class="text-gray-700 hover:text-blue-600 font-medium transition">Catégories</a></li>
                    <li><a href="/about" class="text-gray-700 hover:text-blue-600 font-medium transition">À propos</a></li>
                </ul>
                <div class="hidden md:flex items-center space-x-3">
                        <span class="text-gray-700 font-medium">👤 <?= htmlspecialchars($_SESSION['user']['name']) ?></span>
                        <?php if($_SESSION['user']['role']==="reader"): ?>
                            <a href="/profil" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">profil</a>
                        <?php elseif($_SESSION['user']['role']==="author"):  ?>
                            <a href="/author" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">profil</a>
                        <?php else : ?>                                                        
                            <a href="/admin" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Dashboard</a>
                        <?php endif; ?> 
                        <a href="/logout" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Déconnexion</a>
                </div>
            </nav>
    </header>
    <main class="min-h-screen py-8">

