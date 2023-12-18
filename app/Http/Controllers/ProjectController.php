<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Progress;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function indexProject()
    {
        $projects = Project::all();
        $user = Auth::user();
        $clients = User::where('role_id', 2)->get();
        return view('projects', compact('projects', 'user', 'clients'));
    }

    public function tambahProject()
    {
        $users = User::where('role_id', 2)->get();
        $user = Auth::user();
        return view('buat_project', compact('users', 'user'));
    }

    public function storeProject(Request $request)
    {
        $validateData = $request->validate([
            'nama_proyek' => 'required',
            'deadline' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        if ($request->hasFile('gambar')) {

            // return view('projects', compact('projects', 'user'));
            $thumbnail = $request->file('gambar');
            $imageName = $thumbnail->getClientOriginalName();
            $path = $thumbnail->storeAs('products', $imageName, 'public');

            if ($request->client == "") {
                $user_id = $request->client;
            } else {
                $user_id = null;
            }

            $project = Project::create([
                'nama_proyek' => $request->nama_proyek,
                'deadline' => $request->deadline,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'user_id' => $user_id,
                'image_path' => $path,
            ]);

            $projects = Project::all();
            $user = Auth::user();

            // return view('projects', compact('projects', 'user'));
            return redirect()->route('projects')->with(['projects' => $projects, 'user' => $user]);
        }

        $users = User::where('role_id', 2)->get();
        $user = Auth::user();

        return view('buat_project', compact('users', 'user'));
    }

    public function projectDetail($id)
    {
        $project = Project::find($id);
        $comments = Comment::with('progress')->get();
        $progress = Progress::where('project_id', $id)->orderBy('created_at', 'desc')->get();
        // $progress = Progress::where('project_id', $id)->get();
        $user = Auth::user();

        // return redirect()->route('detail_project', ['id' => $id])->with(['project' => $project, 'user' => $user]);
        return view('project_detail')->with(['project' => $project, 'user' => $user, 'progress' => $progress, 'comments' => $comments]);
    }

    public function assignClient(Project $project, Request $request)
    {
        $project->update([
            'user_id' => $request->user
        ]);

        return redirect()->back();
    }
}
