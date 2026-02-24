<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title) ?> - PHPiggy</title>
    <link rel="stylesheet" href="/assets/main.css">
</head>

<body>
    <!-- Header -->
    <header class="bg-indigo-900">
        <div class="container mx-auto flex items-center justify-between p-4">
            <a href="/" class="text-2xl font-black text-white">PHPiggy</a>
            <nav class="flex items-center space-x-4">
                <a href="/about" class="text-white hover:text-gray-300">About</a>
                <a href="/login" class="text-white hover:text-gray-300">Login</a>
                <a href="/register" class="text-white hover:text-gray-300">Register</a>
                <a href="/logout" class="flex items-center text-white hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    Logout
                </a>
            </nav>
        </div>
    </header>