<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Common;

class GalleryController extends Controller
{
    public function index($slug)
    {
        $data['detail'] = Common::gallery($slug);

        $data['collection'] = collect($data['detail']['imgBlock2']);
        $data1['collection1'] = collect($data['detail']['imgBlock4']);
      
        return view('site.gallery.index',$data,$data1);
    }
}
