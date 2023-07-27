<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function data()
    {
        $data = json_decode($this->APILiChess());
        $data2 = $this->APIGame();
        $amount = count($data2);

        $code = explode('"', $data2[1]);
        $code_real = explode('/', $code[1]);
        $embed = $code_real[3];
        $pgn = $data2[$amount - 4];
        $white = explode('"', $data2[3]);

        $black = explode('"', $data2[4]);
        $result = explode('"', $data2[5]);

        return ['data' => $data, 'pgn' => $pgn, 'embed' => $embed, 'white' => $white[1], 'black' => $black[1], 'result' => $result[1]];
    }

    public function APILiChess()
    {

        $api = curl_init();
        curl_setopt($api, CURLOPT_URL, "https://lichess.org/api/account");
        curl_setopt($api, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer bzpT6caKxQlDhbYu"));
        curl_setopt($api, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($api);
        curl_close($api);
        return $data;
    }

    public function APIGame()
    {

        $api = curl_init();
        curl_setopt($api, CURLOPT_URL, "https://lichess.org/api/user/Helikopter/current-game?pgnInJson=true&clocks=false");

        curl_setopt($api, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($api, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($api);

        curl_close($api);
        $array = explode(self::SEPARATOR, $data);

        return $array;
    }
}
