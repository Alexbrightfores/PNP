<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Ticket::latest()->paginate(10)->sort();
        return view('tickets', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function ticketCancel(Request $request, Ticket $ticket)
    {
        $ticket = Ticket::find($request->selectTicket['id']);
        $ticket->status = 'Cancel';
        $ticket->save();
        return $ticket;
    }
    public function api_get()
    {
        $products = Ticket::latest()->paginate(10)->sort();
        return $products;
    }
}
