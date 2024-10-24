<div class="bg-white rounded-3xl px-[45px] py-[50px] w-96">

    <!--Header-->
    <div class="flex flex-col mb-5 text-center">
        <h1 class="mb-2 text-3xl font-extrabold text-gray-900"><?= $title_page; ?></h1>
        <span class="font-medium text-gray-400 text-m">Belum punya akun?
            <a href="<?= base_url('auth/daftar') ?>" class="font-bold text-cyan-500 hover:text-cyan-600">Daftar</a>
        </span>
    </div>

    <!--Alert-->
    <?php if ($this->session->flashdata('pesan')): ?>
    <div class="flex items-center justify-center">            
        <div id="alert" class="absolute top-0 px-2 bg-white py-3 mt-[40px] text-blue-400 transition duration-300 rounded-[10px] bg-white text-md hs-removing:translate-x-5 hs-removing:opacity-0" role="alert" tabindex="-1" aria-labelledby="alert">
            <div class="flex">

                <!--Message-->
                <div class="mx-2">
                    <h3 class="font-medium text-md">
                        <?= $this->session->flashdata('pesan') ?>
                    </h3>
                </div>

            </div>
        </div>
    </div>
    <?php endif ?>

    <!--Form-->
    <form action="" method="POST">

        <!--Username-->
        <div class="relative mb-4">
            <input id="username" name="username" type="text" placeholder="Username" autocomplete="off" value="<?= set_value('username'); ?>" class="w-full px-4 py-3 border-0 rounded-xl bg-slate-100 focus:outline-none focus:ring-1 focus:border-blue-500">
            <?= form_error('username', '<span class="text-red-500 text-[12px] font-medium my-1">', '</span>') ?>
        </div>

        <!--Password-->
        <div class="relative mb-8">
            <input id="password" name="password" type="password" placeholder="Password" autocomplete="off" value="<?= set_value('password'); ?>" class="w-full px-4 py-3 border-0 rounded-xl bg-slate-100 focus:outline-none focus:ring-1 focus:border-blue-500">
            <?= form_error('password', '<span class="text-red-500 text-[12px] font-medium my-1">', '</span>') ?>
        </div>

        <!--Masuk-->
        <button type="submit" class="w-full py-3 font-bold text-white bg-gradient-to-r from-cyan-500 to-blue-500 text-m rounded-xl hover:bg-gradient-to-r hover:from-blue-600 hover:to-cyan-600">Masuk</button>

    </form>
    <!--Form-->

</div>