<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Helper;
use App;
use Illuminate\Support\Facades\Session;

use Jenssegers\Agent\Agent;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($lang)
    {
        Session::set('locale', $lang); // กำหนดค่าตัวแปรแบบ locale session ให้มีค่าเท่ากับตัวแปรที่ส่งเข้ามา 
        return redirect()->back(); // สั่งให้โหลดหน้าเดิม
    }
}