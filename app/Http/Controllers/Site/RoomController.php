<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Common;

class RoomController extends Controller
{
    public function index($slug){
        $data['detail'] = Common::room($slug);

        $data['collection'] = collect($data['detail']['icon']);

        $data['slug'] = $slug;
      
        return view('site.room.index',$data);
    }
}
