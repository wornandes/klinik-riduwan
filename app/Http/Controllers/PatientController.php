<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        
        $patients = Patient::paginate(10);
        return view('patient.index', [
            'patients' => $patients
        ]);
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$patient = Patient::where('name','like',"%".$search."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
            return view('patient.index', [
                'patients' => $patient
            ]);
 
	}

    public function showDetailPatient($patient_id){
        return view('patient.show',[
            'patient' => Patient::find($patient_id)
        ]);
    }

    public function addPatient(){
        return view('patient.add',[
            'patients' => Patient::all() 
        ]);
    }

    public function storePatient(Request $request){
        $validated = $this->validate($request, [
            'name' => 'required',
            'birthdate' => 'required',
            'sex' => 'required',
            'address' => 'required',
            'allergy' => 'required',
            'phone' => 'required'
        ]);

        $patient = new Patient();
        $patient->name = $request->name;
        $patient->birthdate = $request->birthdate;
        $patient->sex = $request->sex;
        $patient->address = $request->address;
        $patient->allergy = $request->allergy;
        $patient->phone = $request->phone;
        $patient->save();

        return redirect('/patient')->with('success', 'Data Pasien berhasil ditambah');
    }

    public function editPatient($patient_id){
        return view('patient.edit', [
            'patient' => Patient::find($patient_id)
        ]);
    }

    public function updatePatient(Request $request){
        $validated = $this->validate($request, [
            'name' => 'required' . $request->id,
            'birthdate' => 'required',
            'sex' => 'required',
            'address' => 'required',
            'allergy' => 'required',
            'phone' => 'required'
        ]);

        $patient = Patient::find($request->id);
        $patient->name = $request->name;
        $patient->birthdate = $request->birthdate;
        $patient->sex = $request->sex;
        $patient->address = $request->address;
        $patient->allergy = $request->allergy;
        $patient->phone = $request->phone;
        $patient->save();

        return redirect('/patient')->with('success', 'Data Pasien berhasil diubah');
    }

    public function destroyPatient(Request $request){
        Patient::destroy($request->id);
        return redirect('/patient')->with('success', 'Data Pasien berhasil dihapus');
    }

}
