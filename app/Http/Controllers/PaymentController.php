<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function listPembayaran(Project $project){
        $payment = Payment::where('project_id', $project->id)->get();

        return view('', compact('payment'));
    }
    public function konfirmasiPembayaran(Payment $payment){
        $payment->update([
            'is_paid' => true
        ]);

        return view('', compact(''));
    }

    public function simpanPembayaran(Request $request)
    {
        $payment = Payment::create([
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
            'project_id' => $request->project_id
        ]);
        $newlyCreatedPayment = Payment::find($payment->id);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $imageName = $newlyCreatedPayment->id . '.' . $file->extension();
            $path = $file->storeAs('payments', $imageName, 'public');

            $payment->update([
                'gambar' => $path,
            ]);
        }
        $projects = Project::all();
        $user = Auth::user();

        return redirect()->route('projects')->with(['projects' => $projects, 'user' => $user]);
    }
}
