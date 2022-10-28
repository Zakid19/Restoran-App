<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservation.index', [
            'reservations' => Reservation::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = Table::where('status', TableStatus::Avaliable)->get();
        return view('admin.reservation.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose table base on guest');
        }

        $request_date = Carbon::parse($request->res_date);
        foreach($table->reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reversed for this date');
            }
        }

        Reservation::create($request->validated());
        return redirect('admin/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $tables = Table::all();
        return view('admin.reservation.edit', compact('reservation', 'tables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose table base on guest');
        }

        $request_date = Carbon::parse($request->res_date);
        foreach($table->reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reversed for this date');
            }
        }

        $reservation->update($request->validated());
        return redirect('admin/reservation')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return back();
    }
}
