<?php $__env->startSection('content'); ?>
    <h1 class="flex justify-center mt-20x text-2xl"> Your Profile <?php echo e($username); ?></h1>
<div class="container flex justify-center items-center mx-auto">
    <div class="login border p-3 rounded-4xl shadow-lg w-100 mt-10 flex items-center justify-center bg-[#14213d] text-white">
        <form action="/dashboard"  method="GET"   class="flex flex-col w-96">
            <h1 class="text-xl flex justify-center text-[#fca311]">Data</h1></h1>
            <div>
                <label for="username" class="text_username ">
                    Ganti Username
                    <input type="text" id="username" name="username" class="mt-3 p-2 rounded-lg w-full border outline-2 focus:border-2 focus:border-[#fca311] mb-3">
                </label>
                <label for="Password" class="text_password">
                    Ganti Password
                    <input type="password" id="password" name="password" class="mt-3 p-2 rounded-lg w-full border outline-2 focus:border-2 focus:border-[#fca311]">
                </label>
                <button>
                    <input type="button"value="Save" class="bg-[#fca311] text-white font-bold py-2 px-4 rounded-lg mt-4 hover:bg-yellow-600 transition delay-75 duration-300 ease-in-out w-full" onclick="showpopup()">
                </button>
                <script>
                    function showpopup(){
                        alert("Data terganti dan tersimpan");
                    }
                </script>
            </div>
        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\mini-project-laravel\resources\views/profile.blade.php ENDPATH**/ ?>