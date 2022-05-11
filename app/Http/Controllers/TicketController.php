<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        //
        $tickets = Ticket::all();

        return view('my_tickets', compact('tickets'));
    }

    public function create()
    {
        //
        return view('new_ticket');
    }

    public function store(Request $request)
    {
        //
        $ticket = new Ticket();
        $ticket->title = $request->title;
        $ticket->category = $request->category;
        $ticket->prioity = $request->prioity;
        $ticket->message = $request->message;
        $ticket->save();

        return redirect()->route('index.ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $tiicket = Ticket::all();

        return view('show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
