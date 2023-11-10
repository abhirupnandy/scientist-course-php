<?php require 'views/partials/head.php';
	require 'views/partials/nav.php';
	require 'views/partials/banner.php'; ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 text-center">
            <!-- Your content -->
            <form class="px-4" id="resultCheck">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <p class="mt-1 text-lg leading-6 text-gray-600">Enter both your
                            <strong>Enrollment No.</strong> and <strong>Email ID</strong>.</p>
                        <div class="mt-4 ">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="enrollment" class="block text-sm font-medium leading-6
                                    text-gray-900">Enrollment Number</label>
                                    <div class="mt-2">
                                        <input type="text" name="enrollment" id="enrollment" placeholder="Enrollment No."
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium leading-6
                                    text-gray-900">Email ID</label>
                                    <div class="mt-2">
                                        <input type="text" name="email" id="email" placeholder="Email ID"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center justify-end gap-x-6">
                                <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Reset
                                </button>
                                <button type="submit" id="submitBtn"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Check
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <div id="result" class="text-xl px-4 font-bold">

            </div>
        </div>
    </main>
    <script defer>
        $(document).ready(function () {
            $("#submitBtn").click(function (e) {
                e.preventDefault();
                let enrollment = $("#enrollment").val();
                let email = $("#email").val();
                if (enrollment ==="" || email === ""){
                    // reset the form
                    $("#enrollment").val("");
                    $("#email").val("");

                    alert("Please fill in both the fields to check your results!");
                }
                else{
                    $.ajax({
                        url: "fetch.php",
                        type: "GET",
                        data: {
                            enrollment: enrollment,
                            email: email
                        },
                        success: function (data) {
                            $("#result").html(data);
                            $("#enrollment").val("");
                            $("#email").val("");
                        }
                    });
                }
            });
        });
    </script>
<?php require 'views/partials/footer.php';
