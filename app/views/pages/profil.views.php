<div class="flex flex-col justify-center items-center w-full h-full p-8">
        <div class="flex flex-col justify-center items-center bg-white shadow-lg rounded-2xl p-12 w-full max-w-2xl text-center">
            <div class="w-40 h-40 rounded-full overflow-hidden flex justify-center items-center mb-6">
                <img alt="profil" class="w-full h-full object-cover rounded-full" src="https://imgs.search.brave.com/agNKi2GvB6zGwjV-cZ6DrgXHwaWs-n03xK2mWgHOwuk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/bmljZXBuZy5jb20v/cG5nL2RldGFpbC85/MzMtOTMzMjEzMV9w/cm9maWxlLXBpY3R1/cmUtZGVmYXVsdC1w/bmcucG5n">
            </div>
            <h1 class="text-4xl font-bold text-gray-800 mb-2"><?= $_SESSION['user']['name'] ?></h1>
            <p class="text-gray-600 text-lg"><?= $_SESSION['user']['email']?></p>
        </div>
    </div>