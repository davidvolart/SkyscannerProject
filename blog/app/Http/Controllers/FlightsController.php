<?php

namespace App\Http\Controllers;


use App\Models\Flight;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use GuzzleHttp\Client;

class FlightsController extends Controller
{
    public function find(Request $request){

        $from = $request->input("from");
        $to = $request->input("to");
        $departure = $request->input("depart");

        $client = new Client();

        $res = $client->get('https://www.skyscanner.net/g/chiron/api/v1/eco/average-emissions?routes='.$from.','.$to,
            array(
                'headers' => array(
                    'Content-Type' => 'application/json',
                    'api-key' => 'skyscanner-hackupc2019',
                )
            ));

        $arr = json_decode($res->getBody(), true);
        $emissions = $arr[0]['emissions'];

        $client = new Client();

        $response = $client->get('https://www.skyscanner.net/g/chiron/api/v1/flights/browse/browsedates/v1.0/ES/EUR/es-ES/'.$from.'/'.$to.'/'.$departure,
            array(
                'headers' => array(
                    'Accept' => 'application/json',
                    'api-key' => 'skyscanner-hackupc2019',
                )
            )
        );

        $arr = json_decode($response->getBody(), true);

        $flights = array();

        for($i=0;$i<count($arr['Quotes']);$i++){

            $flight = new Flight();
            $flight->id=$i+1;
            $flight->origin = $from;
            $flight->destination = $to;
            $flight->pollution = round($emissions) + rand(-70,70);
            $flight->price = $arr['Quotes'][$i]['MinPrice'];

            array_push($flights,$flight);
        }

        usort($flights, function($a, $b) {return strcmp($a->pollution, $b->pollution);});

        return view('list', compact('flights'));

    }
}
