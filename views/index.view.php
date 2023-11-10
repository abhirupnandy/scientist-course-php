<?php
	require 'views/partials/head.php';
	require 'views/partials/nav.php';
	require 'views/partials/banner.php'; ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 flex flex-col items-center">
            <!-- Your content -->
            <h2 class="text-5xl font-extrabold my-4">
                Training Program on AI
            </h2>
            <h3 class="text-3xl font-bold my-6 py-3">
                Applied / Data Scientist
            </h3>
            <h4 class="text-3xl">
                Learn How to be -
            </h4>
            <div id="typed" class="typed text-2xl font-bold my-4 py-4 min-h-80">
            </div>

            <!-- UPDATE-->
            <div class="fixed bottom-20">
                <button type="submit" onclick="window.location.href='/ai/results'"
                        class="rounded-lg bg-indigo-600 px-3 py-4 text-xl font-semibold text-white shadow-sm
                hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                focus-visible:outline-indigo-600">
                    Check Your Results
                </button>
            </div>
        </div>
    </main>
<?php require 'views/partials/footer.php';