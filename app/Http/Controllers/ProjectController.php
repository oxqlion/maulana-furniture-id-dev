<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function indexProject()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function tambahProject()
    {
        $users = User::where('role_id', 2)->get();
        return view('tambahProject', compact('users'));
    }

    public function storeProject(Request $request)
    {
        $validateData = $request->validate([
            'nama_proyek' => 'required',
            'deadline' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $project = Project::create([
            'nama_proyek' => $request->nama_proyek,
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'user_id' => $request->user_ui,
        ]);

        $projects = Project::all();

        return view('projects', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = Project::find($id);

        return view('project_detail', compact('project'));
    }
}
