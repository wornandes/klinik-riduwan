<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Patient;

class RegistrationController extends Controller
{
    public function index(){
        $registrations = Registration::with('patient')->paginate(10);
        return view('registration.index', [
            'registrations' => $registrations
        ]);
    }

    public function addRegistration($patient_id){
        return view('registration.add',[
            'patient' => Patient::find($patient_id) 
        ]);
    }

    public function storeRegistration(Request $request){
        $validated = $this->validate($request, [
            'check_date' => 'required',
            'registration_date' => 'required',
            'id' => 'required'
        ]);

        $registrations = new Registration();
        $registrations->check_date = $request->check_date;
        $registrations->registration_date = $request->registration_date;
        $registrations->patient_id = $request->id;
        $registrations->save();

        return redirect('/registration')->with('success', 'Data Antrian berhasil ditambah');
    }

    public function destroyRegistration(Request $request){
        Registration::destroy($request->id);
        return redirect('/registration')->with('success', 'Data Antrian berhasil dihapus');
    }
}
