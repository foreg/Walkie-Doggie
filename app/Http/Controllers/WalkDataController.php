<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Walk;
use App\Models\Dog;
use App\User;

class WalkDataController extends Controller
{
    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        $result = array(
           "type" => "FeatureCollection", 
            "features" => array(),
        );
        $allWalks = Walk::where('dt_w_start', '>', date('Y-m-d H:i:s'))->get();
        foreach ($allWalks as $walk) {
            $adress = urlencode($walk->adress);
            $response = file_get_contents("https://geocode-maps.yandex.ru/1.x/?geocode=$adress");
            $coords = new \SimpleXMLElement($response);
            $coords = $coords->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
            $coords = explode(' ', $coords);
            $x = floatval($coords[0]);
            $coords[0] = floatval($coords[1]);
            $coords[1] = $x;
            // array_push($result["features"], [
            //     "type" => "Feature", 
            //     "id"=>$walk->id, 
            //     "geometry"=>[
            //         "type"=>"Point", 
            //         "coordinates"=>$coords
            //     ], 
            //     "properties"=>[
            //         "balloonContentHeader"=>"<h1>".Dog::find($walk->dog_id)->name."</h1>", 
            //         "balloonContentBody"=>$walk->dt_list."<br>".$walk->dt_w_start."<br>".$walk->dt_w_duration."<br>".$walk->dt_a_start."<br>".$walk->dt_a_finish."<br>".$walk->price_start."<br>".$walk->adress."<br>", 
            //         "clusterCaption"=>"Вугул собак"
            //     ]
            // ]);
            $dateCreate = date("d.m.Y", strtotime($walk->dt_list));
            $dateTake = date("d.m.Y", strtotime($walk->dt_w_start));
            $dateAuckCreate = date("d.m.Y H:i:s", strtotime($walk->dt_a_start));
            $dateAuckFinish = date("d.m.Y H:i:s", strtotime($walk->dt_a_finish));
            array_push($result["features"], [
                "type" => "Feature", 
                "id"=>$walk->id, 
                "geometry"=>[
                    "type"=>"Point", 
                    "coordinates"=>$coords
                ], 
                "properties"=>[
                    "balloonContentHeader"=>"<div class='info_h1'><h1>Кличка собаки: ".Dog::find($walk->dog_id)->name."</h1></div>", 
                    "balloonContentBody"=>"<div class='info__spans'><span>Время создания заявки: ".$dateCreate."</span><span>Время взятия заявки: ".$dateTake."</span><span>Длительность прогулки: ".$walk->dt_w_duration." мин</span><span>Время начала аукциона: ".$dateAuckCreate."</span><span>Время конца аукциона: ".$dateAuckFinish."</span><span>Начальная цена прогулки: ".$walk->price_start." руб.</span><span>Адресс клиента: ".$walk->adress."</span><span><input type='button' placeholder='fh' name=".$walk->id." value='взять' onclick='onButtonTakeClick(this)'></input></span></div>", 
                    "clusterCaption"=>"<h4>".Dog::find($walk->dog_id)->name."</h4>"
                ]
            ]);
        };
        return $_GET['callback'] . '('.json_encode($result).')';
    }

    public function show($id)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $request1['dog_id'] = $request['dog_id'];
        $request1['dt_list'] = date('Y-m-d H:i:s');
        $request1['dt_w_start'] = $request['date']." ".$request['time'].":00";
        $request1['dt_w_duration'] = $request['duration'];
        $request1['dt_a_start'] = date('Y-m-d H:i:s');
        $request1['dt_a_finish'] = date('Y-m-d H:i:s');
        $request1['price_start'] = $request['price'];
        $request1['adress'] = $request['adress'];

        $walk = Walk::create($request1);

        return response()->json($walk, 201);
    }

    public function update($request, $id)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete($id)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
