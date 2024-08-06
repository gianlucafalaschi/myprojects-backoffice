<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; // importo il model Project

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::with('type', 'technologies')->get();
        //dd($projects);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($slug) {
        //dd($slug);
        $project = Project::where('slug', '=', $slug)->with('type', 'technologies')->first();    // first per fermarsi al primo risultato trovato
        //dd($project);

        $apiData = [];
        // se il project c'è 
        if($project) {
            $apiData = [
                'success' => true,
                'project' => $project
            ];
        //se il project non c'è (slug sbagliato)
        } else {
            $apiData = [
                'success' => false,
                'error' => 'no project found with this slug'
            ];
        }
        return response()->json($apiData);
    }
}
