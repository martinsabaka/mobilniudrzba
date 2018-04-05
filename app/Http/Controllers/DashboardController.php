<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Test controller
    */
    public function index()
    {	
    	//$waitingUsers = User::where('role_id', 3)->get();
    	//$customerUsers = User::where('role_id', 2)->get();

    	$users = User::all();
    	$waitingUsers = array();
    	$customerUsers =array();
    	$adminUsers =array();
    	foreach ($users as $user) {
    		if ($user->isCustomer()) {
    			$customerUsers[] = $user; 
    		}
    		elseif ($user->isWaiting()) {
    			$waitingUsers[] = $user; 
    		}
    		elseif ($user->isAdmin()) {
    			$adminUsers[] = $user; 
    		}
    	}

        return view('dashboard', ['waitingUsers' => $waitingUsers, 'customerUsers' => $customerUsers, 'adminUsers' => $adminUsers]);
    }
}