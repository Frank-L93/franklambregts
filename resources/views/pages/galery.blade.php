
<?php

use App\Http\Controllers\Controller;
use function Livewire\Volt\{state};


state(['data' => fn() => Controller::galery()]);

?>

    @volt('galery')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
    @if($data == "Geen galerij")
        {{$data}}
    @else

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach($data as $image)

        <div>
          <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
            src="uploads/2025/galerij/{{$_GET['galerij']}}/{{$image}}"
            alt="gallery-photo" />
        </div>
        @endforeach
    </div>
    @endif
    </div>
    @endvolt



