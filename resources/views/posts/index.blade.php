@extends('layouts.pages.page')
@extends('layouts.pages.header')
@extends('layouts.pages.navbar')


@section('content')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @if(count($posts) >0)
        @foreach($posts as $post)
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->tags }}</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->headline }}</a>
                <p href="#" class="text-sm pb-3">
                    By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author }}</a>, Published on
                    {{ $post->created_at }}
                </p>
                <a href="posts" class="pb-6 text-lg">{{ $post->body }}</a>
                <a href="posts/{{ $post->id }}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                        class="fas fa-arrow-right"></i></a>
            </div>
        </article>
        @endforeach

        <!-- Format These Links -->
        <div> {{ $posts->links() }} </div> 
        
        @else 
        <p> No Posts Found</p>
        @endif

    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Contributors</p>
            <p class="pb-2">Contributions to Project Expat are provided by expatriats from around the world. Professionals from a variaty of industries and their spouses share their expat adventures through these original essays and articles. Our articles section also includes the most up to academic research from the global perspective of expatriate academic professionals.</p>
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
