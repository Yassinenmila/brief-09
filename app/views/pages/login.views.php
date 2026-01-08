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
                    <h2 class="text-4xl font-bold text-gray-900">Connexion</h2>
                    <p class="mt-2 text-gray-600">Accédez à votre compte BlogOS</p>
                </div>
                <form class="mt-8 space-y-6 bg-white p-8 rounded-xl shadow-lg" action="/login" method="POST">
                    <div class="space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Adresse email</label>
                            <input id="email" name="email" type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="votre@email.com">
                        </div>
                        <div>
                            <label for="passwd" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                            <input id="passwd" name="passwd" type="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="••••••••">
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox"class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                        </div>
                        <div>
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-700 font-medium">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div>
                        <button name="login" type="submit" class="w-full flex justify-center py-3 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            Se connecter
                        </button>
                    </div>
                    <p class="text-center text-sm text-gray-600"> Vous n'avez pas de compte ? <a href="/signup" class="font-medium text-blue-600 hover:text-blue-700">Inscrivez-vous</a></p>
                </form>
            </div>
        </div>
    </body>
</html>