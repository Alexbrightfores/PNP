<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Pnp;
use App\Models\Station;
use App\Models\Violation;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getTickets()
    {
        $products = Ticket::latest()->paginate(10)->sort();
        return $products;
    }
    public function getProfile()
    {
        $products = User::latest()->paginate(10)->sort();
        return $products;
    }
    public function getPersonnel()
    {
        $products = Pnp::latest()->paginate(10)->sort();
        return $products;
    }
    public function getViolations()
    {
        $products = Violation::latest()->paginate(10)->sort();
        return $products;
    }
    public function getStations()
    {
        $products = Station::latest()->paginate(10)->sort();
        return $products;
    }
    public function addTicket(Request $request)
    {
        Ticket::create($request->all());
        $products = Ticket::latest()->paginate(10)->sort();
        return $products;
    }
    public function updateTicket(Request $request, Ticket $ticket)
    {
        $ticket = Ticket::find($request->id);
        $ticket->driversName = $request->driversName;
        $ticket->plateNo = $request->plateNo;
        $ticket->apprehendingOfficer = $request->apprehendingOfficer;
        $ticket->location = $request->location;
        $ticket->amount = $request->amount;
        $ticket->save();
        $products = Ticket::latest()->paginate(10)->sort();
        return $products;
    }
    public function updateProfile()
    {

    }
    public function logout()
    {
        
    }
}
