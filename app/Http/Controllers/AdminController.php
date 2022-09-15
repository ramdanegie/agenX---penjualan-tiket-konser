<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tickets = Ticket::latest()->paginate(10);

        return view('admin.order', [
            'tickets' => $tickets,
        ]);
    }

    public function report()
    {
        $checked = Ticket::whereNotNull('checked')->paginate(10);
        $uncheck = Ticket::whereNull('checked')->paginate(10);

        return view('admin.report', [
            'checked' => $checked,
            'uncheck' => $uncheck,
        ]);
    }

    public function checkin()
    {
        if (request('search')) {
            $id = request('search');
            $tiket = Ticket::where('id', $id)->first();
            return view('admin.checkin', [
                'tiket' => $tiket,
            ])->with('result', 'Data berhasil didapatkan');
        }
        return view('admin.checkin');
    }

    public function checked(Request $request)
    {
        $id = request('search');
        dd($id);
        $request()->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'ktp' => 'required|min:16|max:16'
        ]);

        $tickets = Ticket::find($id);
        dd($tickets);
        $tickets->nama = $request->nama;
        $tickets->ktp = $request->ktp;
        $tickets->email = $request->email;
        $tickets->checked = 'yes';

        $tickets->save();

        return redirect('/admin/check');
    }
}
