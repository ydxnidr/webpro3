<div class="fixed top-0 right-0 z-50 flex flex-col items-center justify-center w-screen h-screen bg-white bg-opacity-100" id="loading" style="opacity: 0; transition: opacity 0.5s ease-in-out;">
    <i class="ki-outline ki-arrows-circle animate-spin bg-gradient-to-r from-blue-500 to-cyan-500 inline-block text-transparent bg-clip-text text-[35px]"></i>
    <span class="text-[15px] text-semibold text-gray-400 mt-[5px]">Memuat...</span>
</div>
<script>
    document.getElementById("loading").style.opacity = "1";
    setTimeout(() => {
        document.getElementById("loading").style.opacity = "0";
        setTimeout(() => {
            document.getElementById("loading").classList.add("hidden");
        }, 300);
    }, 150);
</script>