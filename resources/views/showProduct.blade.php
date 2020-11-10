@extends('layouts.app')


@section('content')
    <!DOCTYPE html>
<html lang="en">
<body class="bg-white font-serif">


<div class="h-screen w-full px-6 md:px-12 pb-12 pt-32 flex flex-wrap justify-between">

    <div class="bg-gray-lighter md:h-full w-full md:flex-1 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1523217582562-09d0def993a6?w=800')"></div>

    <div class="bg-orange-100 text-orange-900 md:h-full w-full md:flex-1 flex justify-center items-center">
        <div class="px-8 md:px-16">
            <h1 class="text-lg md:text-3xl mb-6">La Muette, Auteuil, Porte Dauphine, Paris, Île-de-France</h1>
            <p class="mb-6 leading-normal text-sm md:text-base">Lorem ipsum dolor sit amet, ne nec tation nonumy salutatus. Ne malis audire mnesarchum qui. Et praesent mnesarchum appellantur usu. Eu hinc ullum percipitur eos. <a href="#more" class="text-black text-sm">Read More</a></p>
            <a href="#" class="block md:inline-block text-center no-underline text-orange-900 px-5 py-3 border-2 border-orange-900 hover:bg-orange-900 hover:text-orange-100">Contact Via Email</a>
        </div>
    </div>

</div>

<div class="p-12" id="more">

    <h2 class="text-2xl md:text-4xl max-w-2xl mx-auto text-center text-gray-900 leading-normal mb-12">Product Description</h2>

    <p class="text-sm md:text-base leading-normal max-w-xl text-center mx-auto text-gray-800 mb-8">Dico modus appellantur eum at, atqui dicunt ut sea, debet congue munere ne usu. Error laudem quaestio te eum, ad cum nihil corrumpit adolescens, no eirmod mediocrem expetenda quo. In per solet iuvaret. Id audire commune cotidieque mei. Quo diceret patrioque ut, ex his animal forensibus maiestatis. No iisque maiorum invenire his, eos ex omnis facer delicata.</p>

    <p class="text-sm md:text-base leading-normal max-w-xl text-center mx-auto text-gray-800">Ad sed liber nihil, pri liber omnium principes id, at est argumentum constituam temporibus. Solum munere per ad. Rationibus repudiandae nec in. Quo eu verear suscipit abhorreant. Dicam fastidii nam eu, quo recusabo periculis dissentiunt id.</p>

</div>

</body>
</html>

@endsection
