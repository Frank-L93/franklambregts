<?php

use App\Http\Controllers\Controller;
use function Livewire\Volt\{state};

state(['data' => fn() => Controller::data()]);

?>

<div>
    @volt('online')
    <div class="grid grid-cols-1">
      <div class="mx-auto">
        <a class="bg-green-200 hover:bg-green-400 rounded-lg px-2 mx-2" href='https://lichess.org/@/Helikopter'>LiChess:
        {{ $data['data']->username }}</a>
        @if ($data['online'] == true)
          <small class="w-100 text-green-500"><img
                class="inline-flex"
                src="icons/clock.svg"
              > ONLINE </small>
        @else
          <small class="w-100 text-red-500"><img
                class="inline-flex"
                src="icons/clock.svg"
              > OFFLINE</small>
        @endif
      </div>
    </div>
    @endvolt
    @volt('stats')
    <div class="grid grid-cols-4 bg-green-200 rounded-lg p-2 m-2">
      <div class="mx-auto">
        Played {{$data['data']->count->all}} Games <br>Won: {{$data['data']->count->win}}
      </div>
      <div class="mx-auto">
        Played {{$data['data']->perfs->bullet->games}} Bullet Games <br>Current rating: {{$data['data']->perfs->bullet->rating}}
      </div>
      <div class="mx-auto">
        Played {{$data['data']->perfs->blitz->games}}  Blitz Games <br>Current rating: {{$data['data']->perfs->blitz->rating}}
      </div>
      <div class="mx-auto">
        Tried {{$data['data']->perfs->puzzle->games}}  Puzzles <br>Current rating: {{$data['data']->perfs->puzzle->rating}}
      </div>
    </div>
    @endvolt

@volt('game')
    <div class="grid grid-cols-1 mx-auto bg-green-200 p-2 m-2 rounded-lg">
        Last Game:
      {{$data['white']}} - {{$data['black']}}: {{$data['result']}}

      <iframe
        src="https://lichess.org/embed/{{$data['embed']}}?theme=auto&bg=auto"
        width=600
        height=397
        frameborder=0
      ></iframe>
    </div>
    @endvolt
</div>
