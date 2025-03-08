<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
//    // Afficher tous les projets
//    public function index()
//    {
//        $projects = Project::all();
//        return view('projects.index', compact('projects'));
//    }
//
//    // Afficher le formulaire de création
//    public function create()
//    {
//        return view('projects.create');
//    }
//
//    // Enregistrer un nouveau projet
//    public function store(Request $request)
//    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'image' => 'image|nullable|max:1999',
//        ]);
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('project_images', 'public');
//        }
//
//        Project::create([
//            'title' => $request->title,
//            'description' => $request->description,
//            'image' => $imagePath ?? null,
//        ]);
//
//        return redirect()->route('projects.index')->with('success', 'Projet créé avec succès.');
//    }
//
//    // Afficher un projet spécifique
//    public function show(Project $project)
//    {
//        return view('projects.show', compact('project'));
//    }
//
//    // Afficher le formulaire d'édition
//    public function edit(Project $project)
//    {
//        return view('projects.edit', compact('project'));
//    }
//
//    // Mettre à jour un projet
//    public function update(Request $request, Project $project)
//    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'image' => 'image|nullable|max:1999',
//        ]);
//
//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('project_images', 'public');
//            $project->image = $imagePath;
//        }
//
//        $project->title = $request->title;
//        $project->description = $request->description;
//        $project->save();
//
//        return redirect()->route('projects.index')->with('success', 'Projet mis à jour avec succès.');
//    }
//
//    // Supprimer un projet
//    public function destroy(Project $project)
//    {
//        $project->delete();
//        return redirect()->route('projects.index')->with('success', 'Projet supprimé avec succès.');
//    }
}
