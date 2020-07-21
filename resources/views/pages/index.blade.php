@extends('layouts.pages.page')
@extends('layouts.pages.header')
@extends('layouts.pages.navbar')

@section('content')
<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="img/takeoff.jpg">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Tag</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Lorem Ipsum Dolor Sit Amet Dolor Sit
                    Amet</a>
                <p href="#" class="text-sm pb-3">
                    By <a href="#" class="font-semibold hover:text-gray-800">Dwight Ledet</a>, Published on April
                    25th, 2020
                </p>
                <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta
                    dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet
                    posuere magna..</a>
                <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                        class="fas fa-arrow-right"></i></a>
            </div>
        </article>

    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Contributors </p>
            <p class="pb-2 ">Contributions to Project Expat are provided by expatriats from around the world. Professionals from a variaty of industries and their spouses share their expat adventures through these original essays and articles. Our articles section also includes the most up to academic research from the global perspective of expatriate academic professionals.</p>
            <a href="/contributors"
                class="w-full bg-gray-600 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                Get to know us
            </a>
        </div>

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Survey</p>
            <p class="pb-2 ">We ask all expatriates to participate in our online survey. Our research on expatriate personal and professional lifestyles is drawn from this survey and aids in providing expert advice to policy makers in the public and private sector.</p>
            <a href="/surveys" target="blank"
                class="w-full bg-gray-600 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                Expatriate Surveys
            </a>
        </div>
    </aside>
</div>

<!-- Bottom Three -->

<div class="container mx-auto sm:hidden md:flex justfy-between py-4">
    <div class="w-1/3 bg-white shadow flex flex-col m-2 p-6">
        <p class="text-xl font-semibold pb-5">Interviews</p>
        <img src="img/interviews.jpg" class="hover:opacity-75" class="mb-2">
        <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
            sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
        <a href="#"
            class="w-full bg-gray-600 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            View
        </a>
    </div>
    <div class="w-1/3 bg-white shadow flex flex-col m-2 p-6">
        <p class="text-xl font-semibold pb-5">Articles</p>
        <img src="img/articles.jpg" class="hover:opacity-75" class="mb-2">
        <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
            sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
        <a href="#"
            class="w-full bg-gray-600 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            Read
        </a>
    </div>
    <div class="w-1/3 bg-white shadow flex flex-col m-2 p-6">
        <p class="text-xl font-semibold pb-5">About</p>
        <img src="img/about.jpg" class="hover:opacity-75" class="mb-2">
        <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
            sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
        <a href="/about"
            class="w-full bg-gray-600 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            Learn
        </a>
    </div>
</div>
</section>

<footer class="w-full border-t bg-white pb-12">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="/privacy" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="pb-6">&copy; ProjectExpat.org</div>
    </div>
</footer>

@endsection


