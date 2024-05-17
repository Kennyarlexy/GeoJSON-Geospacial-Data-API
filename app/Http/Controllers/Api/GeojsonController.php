<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Geojson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeojsonController extends Controller
{
    private function getGeojsonContent($fileName) {
        $path = "/public/geojson/" . $fileName;

        return json_decode(Storage::get($path), true);
    }
    
    public function getAllGeojson(Request $request) {
        $withContent = filter_var($request->query('withContent', 'false'), 
                                  FILTER_VALIDATE_BOOLEAN, 
                                  FILTER_NULL_ON_FAILURE);
        
        $geojsons = Geojson::all();
        
        if ($withContent) {
            foreach ($geojsons as $geojson) {
                $geojson->content = $this->getGeojsonContent($geojson->file_geojson);
            }
        }

        return response()->json($geojsons);
    }

    public function getSingleGeojson(Geojson $geojson, Request $request) {
        $withContent = filter_var($request->query('withContent', 'false'), 
                                  FILTER_VALIDATE_BOOLEAN, 
                                  FILTER_NULL_ON_FAILURE);        

        if ($withContent) {
            $geojson->content = $this->getGeojsonContent($geojson->file_geojson);
        }

        return response()->json($geojson);
    }
}
