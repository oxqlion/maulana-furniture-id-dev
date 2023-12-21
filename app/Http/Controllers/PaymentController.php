<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function listPembayaran(Request $request)
    {
        if ($request->has('search')) {
            $payments = Payment::whereHas('project', function ($query) use ($request) {
                $query->where('nama_proyek', 'like', '%' . $request->search . '%');
            })->paginate(10);
        } else {
            $payments = Payment::paginate(10);
        }
        $total_products = Product::count();
        $total_projects = Project::count();
        $user = Auth::user();
        return view('pembayaran', compact('payments', 'user', 'total_products', 'total_projects'));
    }

    public function konfirmasiPembayaran(Payment $payment)
    {
        $payment->update([
            'is_paid' => 1
        ]);
        return redirect()->route('pembayaran');
    }

    public function penolakanPembayaran(Payment $payment)
    {
        $payment->update([
            'is_paid' => 2
        ]);
        return redirect()->route('pembayaran');
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

        return redirect()->route('pembayaran');
    }
}
