<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    // Fetch all projects with their associated tech stacks
    $projects = Project::with('techStacks')->get();

    // Add a custom attribute 'tech_stack_names' to each project
    $projects->each(function($project) {
        // Join the tech stack names with a comma and assign it to a new attribute
        $project->tech_stack_names = $project->techStacks->pluck('name')->implode(', ');
    });

    // Pass the projects data to the view
    return view('techStacks.index', compact('projects'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        $techStacks = TechStack::all();
        return view('techStacks.create', compact('projects', 'techStacks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request (optional)
    // dd($request->all());
        $request->validate([
            'project_id' => 'required|integer',
            'tech_stacks' => 'required|array',
            'tech_stacks.*' => 'string' // Each tech stack should be a string
        ]);

        // Store the project data
        $project = Project::find($request->input('project_id'));

        // Store the tech stacks associated with this project
        foreach ($request->input('tech_stacks') as $techStackName) {
            TechStack::create([
                'project_id' => $project->id,
                'name' => $techStackName
            ]);
        }

        // Redirect to the index page
        return redirect()->route('techStacks.index');
}


    /**
     * Display the specified resource.
     */
    public function show(TechStack $techStack)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::with('techStacks')->find($id);
        return view('techStacks.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TechStack $techStack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechStack $techStack)
    {
        $techStack->delete();
        return redirect()->route('techStacks.index');
    }
}
