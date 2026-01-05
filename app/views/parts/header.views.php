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
                    <?php if(isset($_SESSION['user'])): ?>
                        <span class="text-gray-700 font-medium">👤 <?= htmlspecialchars($_SESSION['user']['name']) ?></span>
                        <a href="/dashboard" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Dashboard</a>
                        <a href="/logout" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Déconnexion</a>
                    <?php else: ?>
                        <a href="/login" class="px-4 py-2 text-blue-600 font-medium hover:text-blue-700 transition">Connexion</a>
                        <a href="/register" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Inscription</a>
                    <?php endif; ?>
                </div>
                <button id="mobileMenuBtn" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </nav>
            <div id="mobileMenu" class="hidden md:hidden pb-4">
                <ul class="space-y-2">
                    <li><a href="/" class="block py-2 text-gray-700 hover:text-blue-600">Accueil</a></li>
                    <li><a href="/articles" class="block py-2 text-gray-700 hover:text-blue-600">Articles</a></li>
                    <li><a href="/categories" class="block py-2 text-gray-700 hover:text-blue-600">Catégories</a></li>
                    <li><a href="/about" class="block py-2 text-gray-700 hover:text-blue-600">À propos</a></li>
                    <li><a href="/contact" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a></li>
                </ul>
                <div class="mt-4 space-y-2">
                    <?php if(isset($_SESSION['user'])): ?>
                        <a href="/dashboard" class="block w-full py-2 px-4 bg-blue-600 text-white text-center rounded-lg">Dashboard</a>
                        <a href="/logout" class="block w-full py-2 px-4 bg-gray-200 text-gray-700 text-center rounded-lg">Déconnexion</a>
                    <?php else: ?>
                        <a href="/login" class="block w-full py-2 px-4 border border-blue-600 text-blue-600 text-center rounded-lg">Connexion</a>
                        <a href="/register" class="block w-full py-2 px-4 bg-blue-600 text-white text-center rounded-lg">Inscription</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <main class="min-h-screen py-8">

