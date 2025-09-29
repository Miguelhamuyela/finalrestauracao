<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Auditorium;
use App\Models\Client;
use App\Models\Cowork;
use App\Models\Elearning;
use App\Models\Employee;
use App\Models\EquipmentRepair;
use App\Models\Log;
use App\Models\ManufacturesSoftware;
use App\Models\MeetingRoom;
use App\Models\Startup;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* contadores */
        $response['user'] = User::count();
        $response['elearning'] = Elearning::count();
        $response['cowork'] = Cowork::count();
        $response['auditorium'] = Auditorium::count();
        $response['meetingRoom'] = MeetingRoom::count();
        $response['startup'] = Startup::count();
        $response['employee'] = Employee::count();
        $response['client'] = Client::count();
        $response['manufacturesSoftware'] = ManufacturesSoftware::count();
        $response['equipmentRepair'] = EquipmentRepair::count();
        /* fim contadores */


        $jan = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 01)->count();
        $response['jan'] = json_encode($jan);


        $fev = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 02)->count();

        $response['fev'] = json_encode($fev);

        $mar = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 03)->count();
        $response['mar'] = json_encode($mar);

        $abr = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 04)->count();
        $response['abr'] = json_encode($abr);
        $maio = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 05)->count();
        $response['maio'] = json_encode($maio);

        $jun = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 06)->count();
        $response['jun'] = json_encode($jun);
        $jul = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 07)->count();
        $response['jul'] = json_encode($jul);
        $ago = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', '08')->count();
        $response['ago'] = json_encode($ago);
        /**d */
        $set = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', '09')->count();
        $response['set'] = json_encode($set);

        $out = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', '10')->count();
        $response['out'] = json_encode($out);
        $nov = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 11)->count();
        $response['nov'] = json_encode($nov);


        $dez = Log::where('USER_ID', Auth::user()->id)->whereMonth('created_at', '=', 12)->count();
        $response['dez'] = json_encode($dez);
        return view('admin.home.index', $response);
    }
}
