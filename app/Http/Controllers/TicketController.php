<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use GuzzleHttp\Psr7\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tickets.index', [
            'title' => 'Home',
            'active' => 'home'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create', [
            'title' => 'Pesan Tiket',
            'active' => 'buy'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'ktp' => 'required|min:16|max:16'
        ]);

        $ticket = new Ticket;
        $ticket->nama = $request->nama;
        $ticket->ktp = $request->ktp;
        $ticket->email = $request->email;

        $ticket->save();

        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Tiket berhasil dipesan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', [
            'ticket' => $ticket,
            'active' => 'buy',
            'title' => 'Detail Tiket'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('admin.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketRequest  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'ktp' => 'required|min:16|max:16',
        ]);

        dd($validated);

        $tiket = new Ticket;
        $tiket->nama = $request->nama;
        $tiket->ktp = $request->ktp;
        $tiket->email = $request->email;
        $tiket->checked = $request->checked === 'Tersedia' ? NULL : 'yes';

        $tiket->save();

        return view('admin/')->with('success', 'Tiket berhasil dipesan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect('/admin')->with('deleted');
    }
}
