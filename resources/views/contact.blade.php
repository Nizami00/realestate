@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <title>Contact Us</title>

</head>
<body>
<!-- contact -->
<div class="w-full bg-white">

    <!-- title -->
    <div class="text-center px-6 py-12 mb-6 bg-gray-100 border-b">
        <h1 class=" text-xl md:text-4xl pb-4">Contact Us</h1>
        <p class="leading-loose text-gray-dark">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
    </div>
    <!-- /title -->

    <div class="container max-w-4xl mx-auto pb-10 px-12 md:px-0">

        <div class="flex flex-wrap justify-start items-start -mx-4">

            <div class="w-full md:w-1/2 p-4">

                <form>
                    <fieldset class="mb-4">
                        <label class="block text-sm text-gray-dark pb-2">Name</label>
                        <input class="block w-full border rounded py-2 px-3 text-sm text-gray-700" type="text" />
                        <p class="text-xs pt-2 text-gray">This is some helper text...</p>
                    </fieldset>

                    <fieldset class="mb-4">
                        <label class="block text-sm text-gray-dark pb-2">Email</label>
                        <input class="block w-full border rounded py-2 px-3 text-sm text-gray-700" type="text" />
                    </fieldset>

                    <fieldset class="mb-4">
                        <label class="block text-sm text-gray-dark pb-2">Message</label>
                        <textarea class="block w-full border border-red-300er rounded py-2 px-3 text-sm text-gray-700 h-32"></textarea>
                        <p class="text-xs pt-2 text-red-400">This field is required...</p>
                    </fieldset>

                    <button class="text-sm py-2 px-3 bg-black text-white rounded">Submit</button>
                </form>

            </div>

            <div class="w-full md:w-1/2 p-4">
                <div class="overflow-hidden rounded border mb-6">
                    <iframe class="w-full h-64" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d139179.58709337687!2d23.988737532418952!3d56.9713958126499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z0KDQuNCz0LA!5e0!3m2!1sru!2slv!4v1605017276215!5m2!1sru!2slv" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <p class="text-black font-bold mb-1">
                    My Company Ltd
                </p>
                <p class="text-sm mb-2">
                    Brivibas street<br />
                    Riga<br />
                    LV 1000
                </p>

                <p class="text-black font-bold">(371) 2222222</p>
            </div>

        </div>

    </div>

</div>
<!-- /contact -->


</body>
</html>

@endsection
