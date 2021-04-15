<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Station;

class StationController extends Controller
{
    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request){
      $station=Station::create($request->all());
      return response()->json($station, 201);
    }

    /**
     * [update description]
     * @param  [type]  $id      [description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function update($id, Request $request){
      $station=Station::findOrFail($id);
      $station->update($request->all());
      return response()->json($station, 200);
    }

    /**
     * [delete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id){
      $station=Station::findOrFail($id);
      $station->delete();
      return response()->json(null, 204);
    }

    /**
     * [getStationsByCity description]
     * @param  [type] $city_id [description]
     * @return [type]          [description]
     */
    public function getStationsByCity($city_id){
      $stations=City::findOrFail($city_id)->stations;
      return $stations;
    }

    /**
     * [getOpenedStationByCity description]
     * @param  [type] $city_id [description]
     * @return [type]          [description]
     */
    public function getOpenedStationByCity($city_id,Request $request){
      $now = date('H:i:s',strtotime($request->time));
      #$now=date('H:i:s');
      $stations = City::findOrFail($city_id)->stations()->where('opening', '<=', $now)
                           ->where('closing', '>', $now)
                           ->get();
      return $stations;
    }

    /**
     * [getClosestStation description]
     * @return [type] [description]
     */
    public function getClosestStation(Request $request){
      $lat=$request->lat;
      $lng=$request->lng;
      $stations = DB::table('stations AS S')
                ->select('*')
                ->selectRaw("
                        ( FLOOR(6371 * ACOS( COS( RADIANS( '$lat' ) ) * COS( RADIANS( S.latitude ) ) * COS( RADIANS( S.longitude ) - RADIANS( '$lng' ) ) + SIN( RADIANS( '$lat' ) ) * SIN( RADIANS( S.latitude ) ) )) ) distance")
                ->orderBy('distance')
                ->get();
      return $stations;
    }
}
