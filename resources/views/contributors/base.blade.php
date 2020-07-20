@extends('layouts.pages.page')
@extends('layouts.pages.header')
@extends('layouts.pages.navbar')


@section('content')
<div class="w-11/12 flex flex-col text-center md:text-left md:flex-row bg-white m-10 p-6">
    <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
        <img src="img/profile_sm.jpg" class="rounded-full shadow h-32 w-32">
    </div>
    <div class="flex-1 flex flex-col text-left justify-center md:justify-start">
        <p class="font-semibold text-2xl">Dwight Ledet</p>
        <p class="pt-2">Dwight founded Project Expat in 2020 as a way to better highlight the ups and downs of
            expatriate life. He continues research in the fields of international migration; energy; transnational
            relations and processes; and regional development.
            His other research interests include; general economy; globalization / world systems; the consumer society;
            and philosophical anthropology. </p>
        <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-gray-600 pt-4">
        </div>
    </div>
</div>
<hr>

<div class="w-11/12 flex flex-col text-center md:text-left md:flex-row bg-white m-10 p-6">
    <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
        <img src="img/profile_sm.jpg" class="rounded-full shadow h-32 w-32">
    </div>
    <div class="flex-1 flex flex-col text-left justify-center md:justify-start">
        <p class="font-semibold text-2xl">Andy Soell</p>
        <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex saepe dignissimos doloribus eos,
            doloremque voluptatibus molestiae quo. Quod rerum facere, hic sequi necessitatibus dolorem quidem sint a
            sapiente tempora qui? </p>
        <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-gray-600 pt-4">
        </div>
    </div>
</div>
<hr>

<div class="w-11/12 flex flex-col text-center md:text-left md:flex-row bg-white m-10 p-6">
    <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
        <img src="img/profile_sm.jpg" class="rounded-full shadow h-32 w-32">
    </div>
    <div class="flex-1 flex flex-col text-left justify-center md:justify-start">
        <p class="font-semibold text-2xl">Flaco Williams</p>
        <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio mollitia dolorem autem explicabo
            ducimus maxime fugit amet eligendi quod, aliquid iure suscipit deleniti corporis aliquam ipsa dolores ab.
            Iusto, consequuntur. </p>
        <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-gray-600 pt-4">
        </div>
    </div>
</div>
<hr>

<footer class="w-full border-t bg-white pb-12">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="pb-6">&copy; ProjectExpat.org</div>
    </div>
</footer>

@endsection
