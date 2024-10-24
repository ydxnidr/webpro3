<div class="bg-white rounded-3xl px-[45px] py-[50px] w-96">
    
    <!--Header-->
    <div class="flex flex-col mb-5 text-center">
        <h1 class="mb-2 text-3xl font-extrabold text-gray-900"><?= $title_page; ?></h1>
    </div>
    
    <!--Form-->
    <form action="" method="POST">

        <!--Username-->
        <div class="mb-4">
            <input id="username" name="username" type="text" placeholder="Username" autocomplete="off" value="<?= set_value('username'); ?>" class="w-full px-4 py-3 border-0 rounded-xl bg-slate-100 focus:outline-none focus:ring-1 focus:border-blue-500" >
            <?= form_error('username', '<span class="my-1 text-xs text-red-500">','</span>') ?>
        </div>

        <!--Email-->
        <div class="mb-4">
            <input id="email" name="email" type="email" placeholder="Email" autocomplete="off" value="<?= set_value('email'); ?>" class="w-full px-4 py-3 border-0 rounded-xl bg-slate-100 focus:outline-none focus:ring-1 focus:border-blue-500" >
            <?= form_error('email', '<span class="my-1 text-xs text-red-500">','</span>') ?>
        </div>

        <!--Password-->
        <div class="relative mb-4">
            <input id="password" name="password" type="password" placeholder="Password" autocomplete="off" value="<?= set_value('password'); ?>" class="w-full px-4 py-3 border-0 rounded-xl bg-slate-100 focus:outline-none focus:ring-1 focus:border-blue-500">
            <?= form_error('password', '<span class="my-1 text-xs text-red-500">','</span>') ?>
        </div>

        <!--Ulangi Password-->
        <div class="relative mb-8">
            <input id="ulangi_password" name="ulangi_password" type="password" autocomplete="off" placeholder="Ulangi Password" value="<?= set_value('ulangi_password'); ?>" class="w-full px-4 py-3 border-0 rounded-xl bg-slate-100 focus:outline-none focus:ring-1 focus:border-blue-500">
            <?= form_error('ulangi_password', '<span class="my-1 text-xs text-red-500">','</span>') ?>
        </div>

        <!--Button-->
        <div class="flex space-x-2">
            <a href="<?= base_url(''); ?>" class="w-full py-3 font-semibold text-center text-gray-800 bg-gray-100 text-md rounded-xl hover:bg-gray-200">
                Batal
            </a>
            <button type="submit" class="w-full py-3 font-bold text-white bg-gradient-to-r from-cyan-500 to-blue-500 text-m rounded-xl hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-600">
                Daftar
            </button>
        </div>

    </form>
    <!--Form-->
    
</div>