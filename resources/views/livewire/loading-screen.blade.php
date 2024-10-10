@push('styles')
<style>
@keyframes rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.gear {
    position: absolute;
    border-radius: 50%;
    border: 10px solid #FCD34D;
    animation: rotate 4s linear infinite;
}

.gear::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 70%;
    height: 70%;
    background-color: #FCD34D;
    border-radius: 50%;
}

.gear-1 {
    width: 100px;
    height: 100px;
    top: 0;
    left: 0;
}

.gear-2 {
    width: 80px;
    height: 80px;
    bottom: 0;
    right: 0;
    animation-direction: reverse;
}

.gear-3 {
    width: 60px;
    height: 60px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.content-fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s ease-out, transform 1s ease-out;
}

.content-fade-in.visible {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endpush


<div>
    <div id="loading-screen" class="fixed inset-0 z-50 flex items-center justify-center bg-purple-900" 
         x-data="{ isLoading: @entangle('isLoading') }"
         x-show="isLoading"
         x-transition:leave="transition-opacity duration-1000"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <div id="loading-animation" class="relative w-48 h-48">
            <div class="gear gear-1"></div>
            <div class="gear gear-2"></div>
            <div class="gear gear-3"></div>
        </div>
    </div>

    
</div>


@push('js')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script>
        document.addEventListener('content-ready', function () {
            setTimeout(() => {
                @this.set('isLoading', false);
            }, 3000);
        });

</script>
@endpush