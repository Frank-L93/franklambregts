@extends('welcome')

@section('title', 'About Me')

@section('content')
<main class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="text-2xl font-semibold mx-auto text-purple-300 text-center">About Me</div>

    <flux:card class="space-y-6">
    <div>
        <flux:heading size="xl">Who am I?</flux:heading>
        <flux:subheading>Frank, duh!</flux:subheading>
    </div>


        <div class="inline-flex">
        <span class="mx-2"><img src="/frank.jpg" /></span>
        <p class="my-3">That's me, on the left and well, as you might have guessed, my name is Frank Lambregts. I am an enthousiast about anything that has to do with tech. I like to play chess and I am huge fan of Harry Potter.</p>


        <div>
            <flux:heading size="xl">Blog</flux:heading>
            <flux:accordion exclusive transition>
                <flux:accordion.item expanded heading="The first post">
                    <flux:accordion.content>
                        So, we are introducing Flux in the mix of this page
                     </flux:accordion.content>
                </flux:accordion.item>

            </flux:accordion>
        </div>
    </div>
</flux:card>


</main>
@endsection
