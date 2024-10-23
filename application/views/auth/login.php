<div class="bg-white rounded-3xl px-[45px] py-[50px] w-96">

    <!--Header-->
    <div class="flex flex-col text-center mb-8">
        <h1 class="font-extrabold text-3xl text-gray-900 mb-2"><?= $title_page; ?></h1>
        <span class="text-m font-medium text-gray-400">Belum punya akun?
            <a href="<?= base_url('auth/registrasi') ?>" class="font-bold text-cyan-500 hover:text-cyan-600">Daftar</a>
        </span>
    </div>
    <!--Header-->

    <!--Form-->
    <form action="" method="POST">

        <!--Username-->
        <div class="relative mb-4">
            <input id="username" name="username" type="text" placeholder="Username" class="px-4 py-3 w-full rounded-xl bg-slate-100 focus:outline-none focus:ring-2 focus:border-blue-500">
            <?= form_error('username', '<span class="text-red-500 text-[12px] font-medium my-1">', '</span>') ?>
        </div>

        <!--Password-->
        <div class="relative mb-8">
            <input id="password" name="password" type="password" placeholder="Password" class="px-4 py-3 w-full rounded-xl bg-slate-100 focus:outline-none focus:ring-2 focus:border-blue-500">
            <?= form_error('password', '<span class="text-red-500 text-[12px] font-medium my-1">', '</span>') ?>
        </div>

        <!--Masuk-->
        <button type="submit" class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full text-white font-bold text-m py-3 rounded-xl hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-600">Masuk</button>

    </form>
    <!--Form-->

</div>