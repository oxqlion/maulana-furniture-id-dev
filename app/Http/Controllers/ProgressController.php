<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    public function addProgress(Request $request)
    {

        if ($request->hasFile('gambar')) {
            $thumbnail = $request->file('gambar');
            $imageName = $thumbnail->getClientOriginalName();
            $path = $thumbnail->storeAs('progress', $imageName, 'public');

            $progress = Progress::create([
                'gambar' => $path,
                'deskripsi' => $request->deskripsi,
                'project_id' => $request->project
            ]);

            $project = Project::find($request->project);
            $user = Auth::user();

            // return view('project_detail', ['id' => $request->project])->with(['project' => $project, 'user' => $user]);
            return redirect()->route('detail_project', ['id' => $request->project])->with(['project' => $project, 'user' => $user]);
        }

        $projects = Project::all();
        $user = Auth::user();
        return view('projects', compact('projects', 'user'));
    }
}
