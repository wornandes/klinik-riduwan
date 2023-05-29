<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalRecord;
use App\Models\Patient;

class MedicalRecordController extends Controller
{
    public function index(){
        $medical_records = MedicalRecord::with('patient')->paginate(10);
        return view('medical_record.index', [
            'medical_records' => $medical_records
        ]);
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$patient = Patient::where('name','like',"%".$search."%");
        $medical_records = MedicalRecord::with('patient')->where('patient_id', '=', $patient->get('id'));
    		// mengirim data pegawai ke view index
            return view('medical_record.index', [
                'medical_records' => $medical_records
            ]);
 
	}

    public function addPatientView(){
        $patients = Patient::paginate(10);
        return view('medical_record.add1', [
            'patients' => $patients
        ]);
    }

    public function showDetailMedicalRecord($medical_record_id){
        return view('medical_record.show',[
            'medical_record' => MedicalRecord::find($medical_record_id)
        ]);
    }

    public function addMedicalRecord($patient_id){
        return view('medical_record.add',[
            'patient' => Patient::find($patient_id)
        ]);
    }

    public function storeMedicalRecord(Request $request){
        $validated = $this->validate($request, [
            'date' => 'required',
            'anamnesis' => 'required',
            'diagnosis' => 'required',
            'therapy' => 'required',
            'id' => 'required'
        ]);

        $medical_record = new MedicalRecord();
        $medical_record->date = $request->date;
        $medical_record->anamnesis = $request->anamnesis;
        $medical_record->diagnosis = $request->diagnosis;
        $medical_record->therapy = $request->therapy;
        $medical_record->patient_id = $request->id;
        $medical_record->save();

        return redirect('/medical_record')->with('success', 'Data Rekam Medis berhasil ditambah');
    }

    public function editMedicalRecord($medical_record_id){
        return view('medical_record.edit', [
            'medical_record' => MedicalRecord::find($medical_record_id)
        ]);
    }

    public function updateMedicalRecord(Request $request){
        $validated = $this->validate($request, [
            'date' => 'required' ,
            'anamnesis' => 'required',
            'diagnosis' => 'required',
            'therapy' => 'required',
            'patient_id' => 'required'
        ]);

        $medical_record = MedicalRecord::find($request->id);
        $medical_record->date = $request->date;
        $medical_record->anamnesis = $request->anamnesis;
        $medical_record->diagnosis = $request->diagnosis;
        $medical_record->therapy = $request->therapy;
        $medical_record->patient_id = $request->patient_id;
        $medical_record->save();

        return redirect('/medical_record')->with('success', 'Data Rekam Medis berhasil diubah');
    }

    public function destroyMedicalRecord(Request $request){
        MedicalRecord::destroy($request->id);
        return redirect('/medical_record')->with('success', 'Data Pasien berhasil dihapus');
    }
}
