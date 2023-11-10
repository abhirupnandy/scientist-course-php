<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="text-xl md:text-2xl font-bold text-gray-200 text-center md:text-left">
                        AI Training Program
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/ai/" class="
                        <?= urlIs('/ai/') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                        hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        px-3
                        py-2 text-lg
                        font-medium" aria-current="page">Home</a>
                        <a href="/ai/about" class="<?= urlIs('/ai/about') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        px-3
                        py-2 text-lg
                        font-medium"">About Us</a>
                        <a href=" /ai/course" class="<?= urlIs('/ai/course') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        px-3
                        py-2 text-lg
                        font-medium"">Course</a>
                        <a href=" /ai/results" class="<?= urlIs('/ai/results') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        px-3
                        py-2 text-lg
                        font-medium"">Results</a>
                        <a href=" /ai/contact" class="<?= urlIs('/ai/contact') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        px-3
                        py-2 text-lg
                        font-medium"">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" -mr-2 flex md:hidden">
            
            <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>


    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            
            <a href="/ai/" class="
                        <?= urlIs('/ai/') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                        hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        block
                        px-3
                        py-2 text-lg
                        font-medium">Home</a>
            <a href="/ai/about" class="<?= urlIs('/ai/about') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        block
                        px-3
                        py-2 text-lg
                        font-medium">About Us</a>
            <a href="/ai/course" class="<?= urlIs('/ai/course') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        block
                        px-3
                        py-2 text-lg
                        font-medium">Course</a>
            <a href="/ai/results" class="<?= urlIs('/ai/results') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        block
                        px-3
                        py-2 text-lg
                        font-medium">Results</a>
            <a href="/ai/contact" class="<?= urlIs('/ai/contact') ? 'bg-gray-900 text-white ' : 'text-gray-300'; ?>
                           hover:bg-gray-700
                        hover:text-white
                        rounded-md
                        px-3
                        py-2 text-lg
                        font-medium">Contact</a>
        </div>
    </div>
    
    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
        
    //    keep menu hidden by default
        mobileMenu.hidden = true;
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.hidden = !mobileMenu.hidden;
        });
        
    //   after clicking on a link, hide the menu
        const links = document.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.hidden = true;
            });
        });
        
    </script>
</nav>