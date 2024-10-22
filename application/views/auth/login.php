<div class="bg-white rounded-2xl shadow-lg px-[30px] py-[45px] w-96">

    <!--Header-->
    <div class="flex flex-col text-center mb-4">
        <h1 class="font-extrabold text-3xl text-gray-900"><?= $title_page; ?></h1>
        <span class="text-md font-medium text-gray-400">Belum punya akun?
            <a href="<?= base_url('auth/registrasi') ?>" class="font-semibold text-cyan-500 hover:text-cyan-600">Daftar</a>
        </span>
    </div>
    <!--Header-->

    <!--Form-->
    <form action="" method="POST">

        <!--Username-->
        <div class="relative mb-3">
            <input id="username" name="username" type="text" placeholder="Username" autocomplete="off" class="peer px-4 py-2 block w-full bg-gray-100 border-transparent rounded-xl text-md focus:ring-0 focus:outline-none focus:border-cyan-500 placeholder:text-gray-500">
        </div>

        <!--Password-->
        <div class="relative mb-6">
            <input id="password" name="password" type="password" placeholder="Password" autocomplete="off" class="peer px-4 py-2 block w-full bg-gray-100 border-transparent rounded-xl text-md focus:ring-0 focus:outline-none placeholder:text-gray-500 focus:border-cyan-500">
        </div>

        <!--Masuk-->
        <button type="submit" class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full text-white font-semibold text-md py-2 rounded-xl">Masuk</button>

    </form>
    <!--Form-->

</div>