@extends('layouts.pages.page')
@extends('layouts.pages.header')
@extends('layouts.surveys.svynavbar')

@section('content')
<body class="bg-white font-family-karla">

<!-- component -->
<div class="bg-white min-h-screen pt-2 my-2">
    <div class="container mx-auto">
        <div class="inputs w-full max-w-2xl p-2 mx-auto">
            <form class="mt-6 border-t border-gray-400 pt-4">
            <h2 class="text-2xl text-gray-900">Security Message:</h2>
            <p>You have been logged out for your privacy</p>

            <div class="personal w-full border-t border-gray-400 pt-4">
                <div class="flex justify-end">
                    <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit"><a href ="personal">Continue</a></button>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection

