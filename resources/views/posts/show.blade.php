@extends('layouts.pages.page')
@extends('layouts.pages.header')
@extends('layouts.pages.navbar')

@section('content')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->tags }}</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->headline }}</a>
                <p href="#" class="text-sm pb-8">
                    By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author }}</a>, Published on
                    {{ $post->created_at }}
                </p>
                @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                <p class="pb-3 text-lg">{{ $post->body }}</p>
                <a href="/posts/{{ $post->id }}/edit">Edit</a>

                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete') }}
                {!! Form::close() !!}
            </div>
            @endif
            @endif
        </article>

        <div class="w-full flex pt-6">
            <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                <p class="text-lg text-gray-600 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i>
                    Previous</p>
                <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
            </a>
            <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-gray-600 font-bold flex items-center justify-end">Next <i
                        class="fas fa-arrow-right pl-1"></i></p>
                <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
            </a>
        </div>

        <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                <img src="../img/profile_sm.jpg" class="rounded-full shadow h-32 w-32">
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <p class="font-semibold text-2xl">Dwight</p>
                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero
                    suscipit suscipit eu eu urna.</p>
                <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-gray-600 pt-4">
                    <a class="" href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">About Us</p>
            <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
                sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
            <a href="#"
                class="w-full bg-gray-600 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                Get to know us
            </a>
        </div>

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Images</p>
            <div class="grid grid-cols-3 gap-3">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
            </div>
            <a href="https://twitter.com/project_expat" target="blank"
                class="w-full bg-gray-600 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                <i class="fab fa-twitter mr-2"></i> Follow @project_expat
            </a>
        </div>

    </aside>

</div>
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
