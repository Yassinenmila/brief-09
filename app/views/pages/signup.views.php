<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?? 'Blogos' ?></title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50">   
        <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-900">Créer un compte</h2>
            <p class="mt-2 text-gray-600">Rejoignez la communauté BlogOS</p>
        </div>
        <form class="mt-8 space-y-6 bg-white p-8 rounded-xl shadow-lg" action="/signup" method="POST">
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                    <input id="name" name="name" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="Ahmed Alami">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Adresse email</label>
                    <input id="email" name="email" type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="votre@email.com">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Mot de passe
                    </label>
                    <input id="password" name="passwd" type="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="••••••••">
                    <p class="mt-1 text-xs text-gray-500">Minimum 8 caractères</p>
                </div>
                <div>
                    <label for="password_confirm" class="block text-sm font-medium text-gray-700 mb-2">Confirmer le mot de passe</label>
                    <input id="password_confirm" name="pswd_conf" type="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="••••••••">
                </div>
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-3 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                    Créer mon compte
                </button>
            </div>
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Ou s'inscrire avec</span>
                </div>
            </div>
            <p class="text-center text-sm text-gray-600">Vous avez déjà un compte ?<a href="/login" class="font-medium text-blue-600 hover:text-blue-700">Connectez-vous</a></p>
            </form>
        </div>
        </div>
    </body>
</html>        