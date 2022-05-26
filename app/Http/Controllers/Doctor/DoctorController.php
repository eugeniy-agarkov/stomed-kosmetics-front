<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Clinic\Clinic;
use App\Models\Direction\Direction;
use App\Models\Doctor\Doctor;
use App\Models\Sales\Sale;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Doctor $doctor, Clinic $clinic)
    {

        $items = $doctor
            ->whereClinic($clinic)
            ->whereSearch($request->input('search'))
            ->paginate(4);

        if ( $request->ajax() )
        {
            return view('doctor.direction-items', compact('items'));
        }

        return view('doctor.index', [
            'items' => $items,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Doctor $doctor)
    {

        return view('doctor.detail.index', [
            'doctor' => $doctor,
            'prices' => $doctor->prices,
            'sertificats' => $doctor->sertificats,
            'reviews' => $doctor->reviews->take(10),
            'sales' => Sale::whereLast(5)->get(),
            'seo' => $doctor->page,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
