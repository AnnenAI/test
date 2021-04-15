<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Station;

class StationController extends Controller
{
    public function store(Request $request){
      Station::create($request->all());
      return response()->json($station, 201);
    }

    public function update($id, Request $request){
      $station=Station::findOrFail($id);
      $station->update($request->all());
      return response()->json($station, 200);
    }

    public function delete($id){
      $station=Station::findOrFail($id);
      $station->delete();
      return response()->json(null, 201);
    }

    public function getStationsByCity($city_id){
      $stations=City::findOrFail($city_id)->stations;
      return $stations;
    }

    public function getOpenedStationByCity($city_id){
      $now = date('H:i:s',strtotime('18:01'));
      #$now=date('H:i:s');
      $stations = City::findOrFail($city_id)->stations()->where('opening', '<=', $now)
                           ->where('closing', '>', $now)
                           ->get();
      return $stations;
    }

    public function getClosestStation(){
      $lat=12.343434;
      $lng=23.12445;
      $stations = DB::table('stations AS S')
                ->select('*')
                ->selectRaw("
                        ( FLOOR(6371 * ACOS( COS( RADIANS( '$lat' ) ) * COS( RADIANS( S.latitude ) ) * COS( RADIANS( S.longitude ) - RADIANS( '$lng' ) ) + SIN( RADIANS( '$lat' ) ) * SIN( RADIANS( S.latitude ) ) )) ) distance")
                ->orderBy('distance')
                ->get();
      return $stations;
    }
}
