<div x-data="{ autoRotate: true }" x-init="setInterval(() => { if(autoRotate) { @this.nextSlide() } }, 3000)" class="relative overflow-hidden rounded-lg shadow-lg max-w-lg mx-auto">
    <!-- Carousel Items -->
    <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(-{{ $currentSlide * 100 }}%);">
        <!-- Slide 1 -->
        <div class="w-2/3 flex-shrink-0 relative mx-auto">
            <img src="img/testing/gunung.jpg" alt="Slide 1" class="w-full h-auto object-cover">
            <div class="absolute inset-0 bg-black/30 flex flex-col justify-between p-4">
                <div>
                    <h3 class="text-lg font-semibold text-white">Klenteng Magelang</h3>
                    <p class="text-sm text-gray-200">Mezaa</p>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="w-2/3 flex-shrink-0 relative mx-auto">
            <img src="img/testing/al.jpg" alt="Slide 2" class="w-full h-auto object-cover">
            <div class="absolute inset-0 bg-black/30 flex flex-col justify-between p-4">
                <div>
                    <h3 class="text-lg font-semibold text-white">Another Place</h3>
                    <p class="text-sm text-gray-200">Description</p>
                </div>
            </div>
        </div>
        <div class="w-2/3 flex-shrink-0 relative mx-auto">
            <img src="img/testing/gunung.jpg" alt="Slide 1" class="w-full h-auto object-cover">
            <div class="absolute inset-0 bg-black/30 flex flex-col justify-between p-4">
                <div>
                    <h3 class="text-lg font-semibold text-white">Klenteng Magelang</h3>
                    <p class="text-sm text-gray-200">Mezaa</p>
                </div>
            </div>
        </div>
        <div class="w-2/3 flex-shrink-0 relative mx-auto">
            <img src="img/testing/al.jpg" alt="Slide 2" class="w-full h-auto object-cover">
            <div class="absolute inset-0 bg-black/30 flex flex-col justify-between p-4">
                <div>
                    <h3 class="text-lg font-semibold text-white">Another Place</h3>
                    <p class="text-sm text-gray-200">Description</p>
                </div>
            </div>
        </div>
        <!-- Additional Slides -->
        <!-- Add more slides here if needed -->
    </div>

    <!-- Carousel Controls -->
    <button x-on:click="autoRotate = false; @this.prevSlide()" class="absolute top-1/2 left-0 transform -translate-y-1/2  text-gray-800 px-3 py-2 z-10">
    </button>
    <button x-on:click="autoRotate = false; @this.nextSlide()" class="absolute top-1/2 right-0 transform -translate-y-1/2  text-gray-800 px-3 py-2 z-10">
    </button>
</div>
