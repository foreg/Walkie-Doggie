<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Walk;
use App\Models\Dog;
use App\User;
class MapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('map');
    }

    public function getCoords() {
        header('Access-Control-Allow-Origin: *');
        $result = array(
           "type" => "FeatureCollection", 
            "features" => array(),
        );
        $allWalks = Walk::all();
        foreach ($allWalks as $walk) {
            $adress = urlencode($walk->adress);
            $response = file_get_contents("https://geocode-maps.yandex.ru/1.x/?geocode=$adress");
            $coords = new \SimpleXMLElement($response);
            $coords = $coords->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
            $coords = explode(' ', $coords);
            $x = floatval($coords[0]);
            $coords[0] = floatval($coords[1]);
            $coords[1] = $x;
            $dateCreate = date("d.m.Y", strtotime($walk->dt_list));
            $dateTake = date("d.m.Y", strtotime($walk->dt_w_start));
            $dateAuckCreate = date("d.m.Y H:i:s", strtotime($walk->dt_a_start));
            $dateAuckFinish = date("d.m.Y H:i:s", strtotime($walk->dt_a_finish));
            array_push($result["features"], ["type" => "Feature", "id"=>$walk->id, "geometry"=>["type"=>"Point", "coordinates"=>$coords], "properties"=>["balloonContentHeader"=>"<div class='info_h1'><h1>Кличка собаки: ".Dog::find($walk->dog_id)->name."</h1></div>", "balloonContentBody"=>"<div class='info__spans'><span>Время создания заявки: ".$dateCreate."</span><span>Время взятия заявки: ".$dateTake."</span><span>Длительность прогулки: ".$walk->dt_w_duration." мин</span><span>Время начала аукциона: ".$dateAuckCreate."</span><span>Время конца аукциона: ".$dateAuckFinish."</span><span>Начальная цена прогулки: ".$walk->price_start." руб.</span><span>Адресс клиента: ".$walk->adress."</span></div>", "clusterCaption"=>"<h4>".Dog::find($walk->dog_id)->name."</h4>"]]);
        };
        return json_encode($result);
    }
    public function getCoordsJSONP() {
        header('Access-Control-Allow-Origin: *');
        $result = array(
           "type" => "FeatureCollection", 
            "features" => array(),
        );
        $allWalks = Walk::all();
        foreach ($allWalks as $walk) {
            $adress = urlencode($walk->adress);
            $response = file_get_contents("https://geocode-maps.yandex.ru/1.x/?geocode=$adress");
            $coords = new \SimpleXMLElement($response);
            $coords = $coords->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
            $coords = explode(' ', $coords);
            $x = floatval($coords[0]);
            $coords[0] = floatval($coords[1]);
            $coords[1] = $x;
            array_push($result["features"], ["type" => "Feature", "id"=>$walk->id, "geometry"=>["type"=>"Point", "coordinates"=>$coords], "properties"=>["balloonContentHeader"=>"<h1>".Dog::find($walk->dog_id)->name."</h1>", "balloonContentBody"=>$walk->dt_list."<br>".$walk->dt_w_start."<br>".$walk->dt_w_duration."<br>".$walk->dt_a_start."<br>".$walk->dt_a_finish."<br>".$walk->price_start."<br>".$walk->adress."<br>", "clusterCaption"=>"Вугул собак"]]);
        };
        return $_GET['callback'] . '('.json_encode($result).')';
    }
}
