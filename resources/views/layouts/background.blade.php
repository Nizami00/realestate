<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <title>Dream Heute</title>

</head>
<body>

<!-- header -->
<header class="w-full px-6 bg-white">
    <div class="container mx-auto max-w-4xl md:flex justify-between items-center">
        <a href="#" class="block py-6 w-full text-center md:text-left md:w-auto text-gray-600 no-underline flex justify-center items-center">
            Dream Heute
        </a>
        <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
            <a href="#" class="inline-block no-underline bg-black text-white text-sm py-2 px-3">Sign Up</a>
        </div>
    </div>
</header>
<!-- /header -->

<!-- navigation -->
<nav class="w-full bg-white md:pt-0 px-6 shadow-lg relative z-20 border-t border-b border-gray-400">
    <div class="container mx-auto max-w-4xl md:flex justify-between items-center text-sm md:text-md md:justify-start">
        <div class="w-full md:w-1/2 text-center md:text-left py-4 flex flex-wrap justify-center items-stretch md:justify-start md:items-start">
            <a href="/" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Home</a>
            <a href="/showProducts" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">Products</a>
            <a href="/aboutUs" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-400">About Us</a>
            <a href="/contact" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline">Contact</a>
        </div>
        <div class="w-full md:w-1/2 text-center md:text-right pb-4 md:p-0">
            <input type="search" placeholder="Search..." class="bg-gray-300 border text-sm p-1" />
        </div>
    </div>
</nav>
<!-- /navigation -->

<main class="py-8">
    @yield('content')
</main>

<!-- footer -->
<footer class="w-full bg-white px-6 border-t">
    <div class="container mx-auto max-w-4xl py-6 flex flex-wrap md:flex-no-wrap justify-between items-center text-sm">
        &copy;2019 Your Company. All rights reserved.
        <div class="pt-4 md:p-0 text-center md:text-right text-xs">
            <a href="#" class="text-black no-underline hover:underline">Privacy Policy</a>
            <a href="#" class="text-black no-underline hover:underline ml-4">Terms &amp; Conditions</a>
            <a href="#" class="text-black no-underline hover:underline ml-4">Contact Us</a>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>
</html>
