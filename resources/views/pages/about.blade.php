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
        </div>

        <div>
            <flux:heading size="xl">Blog</flux:heading>
            <flux:accordion exclusive transition>
                <flux:accordion.item expanded heading="Chess and PHP">
                    <flux:accordion.content>
                        Many applications that are used for chess are Windows-based and don't have a native application for Mac. Good examples are Swiss-Manager, Swiss Master or the Sevilla application. All three are popular to organise a tournament or competition, but none of them work on the MacOS, unless you use software like CrossOver.
                        That's a pity. And therefore I am working on a SaaS-solution for this that can be run in any webbrowser. I program in PHP and soon you find out that some heavy calculation are pretty hard to make the correct logic for, but is a interesting sideproject.
                     </flux:accordion.content>
                </flux:accordion.item>
                <flux:accordion.item expanded heading="The first post">
                    <flux:accordion.content>
                        So, we are introducing Flux in the mix of this page. I might start blogging about chess, technology, Harry Potter and other fun stuff.
                     </flux:accordion.content>
                </flux:accordion.item>

            </flux:accordion>
        </div>

</flux:card>


</main>
@endsection
