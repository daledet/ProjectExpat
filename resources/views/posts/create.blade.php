@extends('layouts.pages.page')
@extends('layouts.posts.postsheader')
@extends('layouts.posts.createnavbar')


@section('content')

    <div class="bg-white min-h-screen pt-2 my-2">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">

                {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <div>
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Author</label>
                    {{ Form::text('author', '', ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Author']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Title</label>
                    {{ Form::text('title', '', ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Title']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Headline</label>
                    {{ Form::text ('headline', '', [ 'class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Headline']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Body</label>
                    {{ Form::textarea('body', '', ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500 form-textarea', 'placeholder' => 'Body Text']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Tags</label>
                    {{ Form::text('tags', '', ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Tags']) }}
                </div>
            <div class="form-group">
                {{ Form::file('cover_image') }}
            </div>

            <div class="mt-2">
                
                {{ Form::submit('Submit'), }}
                
            </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    @endsection


 
