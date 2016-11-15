<?php
namespace EllorinGene\AuthMonitor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AuthMonitorController extends Controller
{

    public function index($data)
    {
        echo $data;
    }

    public function login(Request $request){

        
        if(!Auth::attempt($request->only('email', 'password'))){

        }
    }
}