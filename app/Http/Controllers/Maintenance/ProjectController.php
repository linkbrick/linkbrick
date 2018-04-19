<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $caption = Project::COLUMN_CAPTION;
        $tableHeaders = ['name','property_size','price_range','launched_date','completion_date'];
        $projects = Project::active()->get();
        return view('projects.index',compact('caption','tableHeaders','projects'));
    }

    public function create()
    {
        $caption = Project::COLUMN_CAPTION;
        return view('projects.create',compact('caption'));
    }

    public function store(Request $request)
    {
        // store the corporates
        $project = Project::create($request->only(['launched_date','completion_date','tenure','unit_per_floor','title',
            'property_size','price_range','price_per_sqft','value_for_money','potential_capital_gain',
            'value_for_rental_yield','family_investment','suitability_for_expatriates','students',
            'mixed_development','security_level','density','down_payment', 'location',
            'maintenance_fee','booking_fee','number_of_floor','number_of_unit', 'number_of_block',
            'land_area','name','project_tag_line','status','excerpt','developer']));

        if($request->filled('name')) $project->slug = str_slug($request->input('name'),'-');

        if ($request->file('banner_image') !== null) {
            $project->addMedia($request->file('banner_image'))->toMediaCollection('banner');
        }

        if ($request->file('main_image') !== null) {
            $project->addMedia($request->file('main_image'))->toMediaCollection('main');
        }

        if ($request->file('facility_image') !== null) {
            $project->addMedia($request->file('facility_image'))->toMediaCollection('facility');
        }

        $project->save();

        return redirect()->route('projects.index')->withSuccess('Project has been created.');
    }

    public function edit(Project $project)
    {
        $caption = Project::COLUMN_CAPTION;
        return view('projects.edit', compact('project','caption'));
    }

    public function update(Request $request, Project $project)
    {
        $project->fill($request->only(['launched_date','completion_date','tenure','unit_per_floor','title',
            'property_size','price_range','price_per_sqft','value_for_money','potential_capital_gain',
            'value_for_rental_yield','family_investment','suitability_for_expatriates','students',
            'mixed_development','security_level','density','down_payment', 'location',
            'maintenance_fee','booking_fee','number_of_floor','number_of_unit', 'number_of_block',
            'land_area','name','project_tag_line','status','excerpt','developer']))->save();

        if($request->filled('name')) $project->slug = str_slug($request->input('name'),'-');

        if($request->input('remove_banner_image') == "true"){
            $project->clearMediaCollection('banner');
        }

        if ($request->file('banner_image') !== null) {
            $project->clearMediaCollection('banner');
            $project->addMedia($request->file('banner_image'))->toMediaCollection('banner');
        }

        if($request->input('remove_main_image') == "true"){
            $project->clearMediaCollection('main');
        }

        if ($request->file('main_image') !== null) {
            $project->clearMediaCollection('main');
            $project->addMedia($request->file('main_image'))->toMediaCollection('main');
        }

        if($request->input('remove_facility_image') == "true"){
            $project->clearMediaCollection('facility');
        }

        if ($request->file('faciity_image') !== null) {
            $project->clearMediaCollection('facility');
            $project->addMedia($request->file('faciity_image'))->toMediaCollection('facility');
        }

        $project->save();


        return redirect()->route('projects.index')->withSuccess($request->input('name') . ' has been updated.');

    }

    public function show(Project $project)
    {
        $caption = Project::COLUMN_CAPTION;
        return view('projects.show', compact('project','caption'));
    }

    public function download(Project $project,$type)
    {
        return response()->download($project->getMedia($type)->first()->getPath(), $project->getMedia($type)->first()->file_name);
    }

}
