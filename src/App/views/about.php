<?php include $this->resolve("partials/_header.php"); ?>


<!-- Main Content Area -->
<section class="container mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
    <div class="flex items-center justify-between border-b border-gray-200 pb-4">
        <h4 class="font-medium">About Us</h4>
    </div>

    <!-- Company Info -->
    <div class="mt-6 grid grid-cols-1 gap-6">
        <!-- Description -->
        <div class="p-4 bg-gray-50 rounded-md">
            <h3 class="text-xl font-semibold text-gray-900 mb-2">TRZP</h3>
            <p class="text-gray-600">A PHP web app to control your expanses and track those in infitient way.</p>
        </div>

        <!-- Contact Information -->
        <div class="grid grid-cols-1 lg:gap-x-10">
            <div class="p-4">
                <h4 class="text-lg font-semibold text-gray-900 mb-4">Contact Information</h4>

                <div class="space-y-4">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-600 mt-1 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Email</p>
                            <a href="mailto:ltc7924@gmail.com" class="text-indigo-600 hover:text-indigo-500"><?php echo e($email); ?></a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-600 mt-1 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Address</p>
                            <p class="text-gray-600"><?php echo e($address); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-600 mt-1 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Phone</p>
                            <p class="text-gray-600"><?php echo e($phone); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-600 mt-1 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Telegram</p>
                            <a href="https://t.me/<?php echo e($telegram); ?>" target="_blank" class="text-indigo-600 hover:text-indigo-500"><?php echo e($telegram); ?></a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-indigo-600 mt-1 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Instagram</p>
                            <a href="https://instagram.com/<?php echo e($instagram); ?>" target="_blank" class="text-indigo-600 hover:text-indigo-500"><?php echo e($instagram); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>Escaping Data: <?php echo e($phone); ?></p>
</section>

<?php include $this->resolve("partials/_footer.php") ?>