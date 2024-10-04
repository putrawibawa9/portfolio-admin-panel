<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
   
        $photo = null;
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'url' => 'required',
            'repository_link' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
         $photo = time().'-'.$request->thumbnail->getClientOriginalName();
        $request->thumbnail->move(public_path('images'), $photo);
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'url' => $request->url,
            'repository_link' => $request->repository_link,
            'thumbnail' => $photo,
        ]);
        return redirect()->route('projects.index')->with('create', 'Proyek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // dd($request->all());
           $field = [
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'url' => $request->url,
            'repository_link' => $request->repository_link,
            'thumbnail' => $request->thumbnail,
        ];
      $photo = null;

      if($request->thumbnail){
        // validate
          $request->validate([
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $photo = time().'-'.$request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('images'), $photo);
            $field['thumbnail'] = $photo;
        }
    
        $project->update($field);
        return redirect()->route('projects.index')->with('update', 'Proyek berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('delete', 'Proyek berhasil dihapus');
    }
}
