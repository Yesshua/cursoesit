<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function pdf(){
        $projects=Project::all();
        $pdf = Pdf::loadView('projects.pdf', compact('projects'));
        return $pdf->stream();
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombredeproyecto' => 'required|string|min:1|max:100',
            'fuentefondo' => 'required|string|min:1',
            'montoplanificado' => 'required|integer|min:1',
            'montopatrocinado' => 'required|integer|min:1',
            'montofondospropios' => 'required|integer|min:1'
        ]);

        Project::create($request->all());


        return redirect()->route('projects.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombredeproyecto' => 'required|string|min:1|max:100',
            'fuentedefondo' => 'required|string|min:1',
            'montoplanificado' => 'required|integer|min:1',
            'montopatrocinado' => 'required|integer|min:1',
            'montofondospropios' => 'required|integer|min:1'
        ]);

        $project = Project::findOrFail($id);

        $project->update($request->all());

        return redirect()->route('projects.index');
    }

    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route('projects.index');
    }
}
