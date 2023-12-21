<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Progress;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function indexProject(Request $request)
    {
        if($request->has('search')){
            $projects = Project::where('nama_proyek', 'like','%'. $request->search .'%')->get();
        }else{
            $projects = Project::orderByRaw("CASE WHEN user_id = " . Auth::id() . " THEN 0 ELSE 1 END")
            ->get();
        }
        $user = Auth::user();
        $total_products = Product::count();
        $total_projects = Project::count();
        $clients = User::where('role_id', 2)->get();
        $total_clients = User::where('role_id', '2')->count();
        return view('projects', compact('projects', 'user', 'clients', 'total_products', 'total_projects', 'total_clients'));
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
        $paid = Payment::where('project_id', $id)->where('is_paid', 1)->sum('jumlah');
        // $progress = Progress::where('project_id', $id)->get();
        $user = Auth::user();

        // return redirect()->route('detail_project', ['id' => $id])->with(['project' => $project, 'user' => $user]);
        return view('project_detail')->with(['project' => $project, 'user' => $user, 'progress' => $progress, 'comments' => $comments, 'paid' => $paid]);
    }

    public function assignClient(Project $project, Request $request)
    {
        $project->update([
            'user_id' => $request->user
        ]);

        return redirect()->back();
    }
}
