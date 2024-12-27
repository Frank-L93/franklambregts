@extends('nbsb')

@section('title', 'PK Jeugd 2024-2025')

@section('content')
<main class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="text-2xl font-semibold mx-auto text-red-300 text-center">PK Jeugd 2024-2025</div>

    <flux:card class="space-y-6">
    <div>
        <flux:heading size="xl">Toernooien</flux:heading>
        <flux:subheading>Klik op de categorie om naar de indeling en uitslagen te gaan</flux:subheading>
    </div>



        <div>
            <a href="/uploads/2025/AB/SMWSite/index.html"><flux:heading size="xl">AB</flux:heading></a>

            <a href="/uploads/2025/C/SMWSite/index.html"><flux:heading size="xl">C</flux:heading></a>

            <a href="/uploads/2025/Dm/SMWSite/index.html"><flux:heading size="xl">D-meisjes</flux:heading></a>


        </div>

</flux:card>


</main>
