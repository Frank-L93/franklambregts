@extends('welcome')

@section('title', 'About Me')

@section('content')
<main class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="text-2xl font-semibold mx-auto text-purple-300 text-center">About Me</div>

    <div class="flex flex-col p-5 lg:px-48 lg:py-11">
        <!-- Here comes the sticky blog post -->
        <div class="bg-gray-100 p-5 mb-10">
            <h1 class="font-bold text-2xl mb-2">Who am I?</h1>
            <div class="inline-flex">
            <span class="mx-2"><img src="/frank.jpeg" /></span>
            <p class="my-3">That's me, on the left and well, as you might have guessed, my name is Frank Lambregts. I am an enthousiast about anything that has to do with tech. I like to play chess and I am huge fan of Harry Potter.</p>
            </div>
        </div>
        <!-- Then the others -->
        <div class="bg-gray-100 p-5 mb-10">
            <h1 class="font-bold text-2xl mb-2">More to come</h1>
            <p class="my-3">More blogs will show up here</p>
        </div>
    </div>

</main>
@endsection
