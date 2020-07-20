@extends('layouts.pages.page')
@extends('layouts.posts.postsheader')
@extends('layouts.posts.editnavbar')


@section('content')

    <div class="bg-white min-h-screen pt-2 my-2">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">

                {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <div>
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Author</label>
                    {{ Form::text('author', $post->author, ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Author']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Title</label>
                    {{ Form::text('title', $post->title, ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Title']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Headline</label>
                    {{ Form::text ('headline', $post->headline, [ 'class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Headline']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Body</label>
                    {{ Form::textarea('body', $post->body, ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500 form-textarea', 'placeholder' => 'Body Text']) }}
                </div>
                <div class="mt-2">
                    <label class='block uppercase tracking-wide text-gray-700 font-bold mb-2'
                    for='grid-text-1'>Tags</label>
                    {{ Form::text('tags', $post->tags, ['class'=>'appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none focus:border-gray-500', 'placeholder' => 'Tags']) }}
                </div>
            <div class="mt-2">
                <div class="form-group">
                    {{ Form::file('cover_image') }}
                </div>
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::submit('Submit'), }}
                
            </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    @endsection
