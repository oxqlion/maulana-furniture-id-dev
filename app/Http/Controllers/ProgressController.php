<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

            $projectName = $project->nama_proyek;
            $progressDesc = $progress->deskripsi;
            $client = $project->user->name;
           
            Mail::raw(
                "Yth. $client\n\nTerdapat progress baru dari project anda, segera kunjugi website dan berikan feedback\nNama Project: $projectName\nDeskripsi: $progressDesc\n\nWebsite: www.maulanafurniture.com\nWhatsapp: +62 87815879282\nInstagram: maulanafurniture.indo" , 
                function ($message) {             
                    $message->to('rhermanto01@student.ciputra.ac.id')->subject('Update Progress Baru');             
                });

            // return view('project_detail', ['id' => $request->project])->with(['project' => $project, 'user' => $user]);
            return redirect()->route('detail_project', ['id' => $request->project])->with(['project' => $project, 'user' => $user]);
        }

        $projects = Project::all();
        $user = Auth::user();
        return view('projects', compact('projects', 'user'));
    }
}
