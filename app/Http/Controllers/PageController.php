<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $propertyInfo = ['launched_date','tenure','unit_per_floor','title','property_size'];
    public function project(Project $project)
    {
        $propertyInfo = $this->propertyInfo;
        $caption = Project::COLUMN_CAPTION;
        return view('projects.single',compact('project','propertyInfo','caption'));
    }

    public function team()
    {
        $agents = Agent::active()->get();
        return view('agents.team',compact('agents'));
    }
}
