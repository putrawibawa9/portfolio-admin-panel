<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        // all projects
        $projects = Project::with('techStacks')->get();
        return view('landingPage.index', compact('projects'));
    }
    public function show(Project $id){
        // project with tech stacks and images
        $project = Project::with('techStacks', 'images')->find($id);
        // 3 projects with tech stacks and images
        $threeProjects = Project::with('techStacks', 'images')->inRandomOrder()->limit(3)->get();
        return view('landingPage.detail', compact('project', 'threeProjects'));
    }
}
