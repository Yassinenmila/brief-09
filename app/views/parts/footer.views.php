    </main>
    <footer class="bg-gray-900 text-gray-300">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-2xl">📝</span>
                        <h3 class="text-xl font-bold text-white">BlogOS</h3>
                    </div>
                    <p class="text-gray-400 mb-4">Votre plateforme de blogging moderne et intuitive. Partagez vos idées avec le monde.</p>
                    <div class="flex space-x-4 text-2xl">
                        <a href="#" class="hover:text-blue-400 transition">📘</a>
                        <a href="#" class="hover:text-blue-400 transition">🐦</a>
                        <a href="#" class="hover:text-pink-400 transition">📷</a>
                        <a href="#" class="hover:text-blue-400 transition">💼</a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-blue-400 transition">Accueil</a></li>
                        <li><a href="/articles" class="hover:text-blue-400 transition">Articles</a></li>
                        <li><a href="/categories" class="hover:text-blue-400 transition">Catégories</a></li>
                        <li><a href="/about" class="hover:text-blue-400 transition">À propos</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Ressources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-400 transition">FAQ</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Support</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Documentation</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">API</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Légal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-400 transition">Confidentialité</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Conditions</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; <?= date('Y') ?> BlogOS. Tous droits réservés.</p>
                <p class="text-gray-500 mt-2">Développé avec ❤️ au Maroc</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>