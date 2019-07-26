<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
/**
 * Appointment Controller
 * @author Henry Rojas Douglas
 * @version 1.0.0
 * @license MIT
 * @package mcappointments
 */
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @since 1.0.0
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::latest()->paginate(5);
        return view('appointment.index',compact('appointment'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     * @since 1.0.0
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client'            => 'required',
            'phone'             => 'required',
            'appointment_at'    => 'required',
        ]);
        Appointment::create($request->all());
        return redirect()->route('appointment.index')
                        ->with('success','Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     * @since 1.0.0
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('appointment.show',compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @since 1.0.0
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        return view('appointment.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'client'            => 'required',
            'phone'             => 'required',
            'appointment_at'    => 'required',
        ]);
        $appointment->update($request->all());
        return redirect()->route('appointment.index')
                        ->with('success','Appointment created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointment.index')
                        ->with('success','Appointment deleted successfully');
    }
}
