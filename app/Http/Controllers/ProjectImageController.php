<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class ProjectImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     // Fetch projects and their images from the database
$projects = DB::table('projects')
    ->join('project_images', 'projects.id', '=', 'project_images.project_id')
    ->select('projects.id', 'projects.name', 'project_images.image')
    ->get()
    ->groupBy('id'); // Group by 'projects.id' instead of 'project_id'

// dd($projects); // Check how the data is structured after grouping

// Format the data as needed
$projectImages = [];

foreach ($projects as $id => $projectGroup) {
    // Initialize each project with its name
    $projectImages[$id]['name'] = $projectGroup->first()->name;
    
    // Add images to the project
    $projectImages[$id]['images'] = [];
    
    foreach ($projectGroup as $project) {
        // Push each image to the project's 'images' array
        $projectImages[$id]['images'][] = $project->image;
    }
}


// Return the view with the formatted data
return view('projectImages.index', compact('projectImages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        return view('projectImages.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
        'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $project_id = $request->project_id;

    if ($request->hasFile('image')) {
        $files = $request->file('image');

        foreach ($files as $file) {
            $photoName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('images'), $photoName);

            $fields = [
                'project_id' => $project_id,
                'image' => $photoName,
            ];

            ProjectImage::create($fields);
        }
    }

    return redirect('/projectImages')->with('create', 'Gambar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectImage $projectImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
           // Fetch the project by id_project
        $project = Project::with('images')
        ->where('id', $id)
        ->firstOrFail();
        return view('projectImages.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectImage $projectImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectImage $projectImage)
    {
      $projectImage->delete();
        return redirect('/projectImages')->with('hapus', 'Gambar berhasil dihapus');
    }
}
