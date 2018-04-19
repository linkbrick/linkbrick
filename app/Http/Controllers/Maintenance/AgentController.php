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

    public function create()
    {
        $caption = Agent::COLUMN_CAPTION;
        return view('agents.create',compact('caption'));
    }

    public function store(Request $request)
    {
        // store the corporates
        $agent = Agent::create($request->only(['name','position','excerpt','description','email','contact_no','type','sequence','facebook_url','instagram_url']));

        if ($request->file('agent_image') !== null) {
            $agent->addMedia($request->file('agent_image'))->toMediaCollection('agent_image');
        }

        $agent->save();

        return redirect()->route('agents.index')->withSuccess('Agent has been created.');
    }

    public function edit(Agent $agent)
    {
        $caption = Agent::COLUMN_CAPTION;
        return view('agents.edit', compact('agent','caption'));
    }

    public function update(Request $request, Agent $agent)
    {
        $agent->fill($request->only(['name','position','excerpt','description','email','contact_no','type','sequence','facebook_url','instagram_url']))->save();

        if($request->input('agent_image') == "true"){
            $agent->clearMediaCollection('agent_image');
        }

        if ($request->file('banner_image') !== null) {
            $agent->clearMediaCollection('agent_image');
            $agent->addMedia($request->file('agent_image'))->toMediaCollection('agent_image');
        }

        $agent->save();

        return redirect()->route('agents.index')->withSuccess($request->input('name') . ' has been updated.');

    }

    public function show(Agent $agent)
    {
        $caption = Agent::COLUMN_CAPTION;
        return view('agents.show', compact('agent','caption'));
    }
}
