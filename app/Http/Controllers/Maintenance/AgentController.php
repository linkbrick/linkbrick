<?php

namespace App\Http\Controllers\Maintenance;

use App\Agent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(Request $request)
    {
        $caption = Agent::COLUMN_CAPTION;
        $tableHeaders = ['name','position','email','contact_no'];
        $agents = Agent::active()->get();
        return view('agents.index',compact('caption','tableHeaders','agents'));
    }
}
