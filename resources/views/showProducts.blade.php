@extends('layouts.app')


@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <title>Houses</title>

</head>
<body>


<!-- title -->
<h1 class="text-center text-xl md:text-4xl px-6 py-12 bg-white">Our Products</h1>
<!-- /title -->

<!-- products grid -->
<div class="w-full px-6 py-12 bg-gray-100 border-t">

    <div class="container max-w-4xl mx-auto pb-10 flex justify-between items-center px-3">
        <div class="text-xs">
            <a href="#" class="bg-gray-500 text-white no-underline py-1 px-2 rounded-lg mr-2">Previous</a>
            <div class="hidden md:inline">
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">1</a>
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">2</a>
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">3</a>
                <span class="px-2 text-gray">...</span>
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">42</a>
            </div>
            <a href="#" class="bg-black text-white no-underline py-1 px-2 rounded-lg ml-2">Next</a>

        </div>

        <div class="text-sm text-gray-600">
            Per page:
            <select class="bg-white border rounded-lg w-24 h-8 ml-1">
                <option>24</option>
                <option>48</option>
                <option>All</option>
            </select>
        </div>
    </div>



    <div class="container max-w-4xl mx-auto pb-10 flex flex-wrap">

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-3 mb-4">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?w=800" class="w-full h-auto rounded-lg" />
            </a>

            <h2 class="text-xl py-4">
                <a href="#" class="text-black no-underline">Product name</a>
            </h2>

            <p class="text-xs leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

    </div>



    <div class="container max-w-4xl mx-auto pb-10 flex justify-between items-center px-3">
        <div class="text-xs">
            <a href="#" class="bg-gray-500 text-white no-underline py-1 px-2 rounded-lg mr-2">Previous</a>
            <div class="hidden md:inline">
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">1</a>
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">2</a>
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">3</a>
                <span class="px-2 text-gray">...</span>
                <a href="#" class="text-sm px-1 text-gray-900 no-underline">42</a>
            </div>
            <a href="#" class="bg-black text-white no-underline py-1 px-2 rounded-lg ml-2">Next</a>

        </div>

        <div class="text-sm text-gray-600">
            Per page:
            <select class="bg-white border rounded-lg w-24 h-8 ml-1">
                <option>24</option>
                <option>48</option>
                <option>All</option>
            </select>
        </div>
    </div>

</div>
<!-- /products grid -->

</body>
</html>

@endsection
