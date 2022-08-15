<?php

namespace App\Http\Controllers;
use App\Models\datakepalakeluarga;
use App\Models\datart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class datakepalakeluargaController extends Controller
{
        //datakepalakeluarga

        public function datakartukeluargaindex(Request $request)
        {
            if($request->has('search')){
                $datakepalakeluarga = datakepalakeluarga::where('kepalakeluarga','LIKE','%' .$request->search.'%')->paginate(10);
            }else{
                $dtrt = datart::all();
                $datakepalakeluarga = datakepalakeluarga::with('datart')->latest()->paginate(10);
                return view('layouts.datapenduduk.datakepalakeluarga',compact('datakepalakeluarga','dtrt'));
            }



            
        }

        public function countkk()
        {
            // $countjiwa = datakepalakeluarga::all();
            // return DB::table('datakepalakeluarga')->count('jiwa');
            DB::table('datakepalakeluarga')->sum('jiwa');
            // return DB::table('datakepalakeluarga')->count('jiwa');
        }
    


        public function tambahkepalakeluarga(Request $request)
        {   

            $datakepalakeluarga = new datakepalakeluarga();

            $datakepalakeluarga->kepalakeluarga = $request->input('kepalakeluarga');
            $datakepalakeluarga->nokk = $request->input('nokk');
            $datakepalakeluarga->tempattinggal = $request->input('tempattinggal');
            $datakepalakeluarga->datart_id = $request->input('datart_id');
            $datakepalakeluarga->notelepon = $request->input('notelepon');
            $datakepalakeluarga->jumlahkeluarga = $request->input('jumlahkeluarga');
    
            if ($request->hasfile('imagekk')){
                $file = $request->file('imagekk');
                $extension = $file->getClientOriginalExtension('');
                $filename = time(). '.' . $extension;
                $file->move('scankk/',$filename);
                $datakepalakeluarga->imagekk = $filename;
            } else {
                return $request;
                $datakepalakeluarga->imagekk='';
            }
            $datakepalakeluarga->save();

            return redirect('/dashboard-datakepalakeluarga')->with('success', 'Task Created Successfully!');
        }

        public function editkepalakeluargaindex($id)
        {
            $dtrt = datart::all();
            $datakepalakeluarga=datakepalakeluarga::find($id);
            return view('layouts.datapenduduk.editkepalakeluarga',compact('datakepalakeluarga','dtrt'));

        }
        
        public function editkepalakeluarga(Request $request,$id)
        {
            $datakepalakeluarga = datakepalakeluarga::find($id);

            $datakepalakeluarga->kepalakeluarga = $request->input('kepalakeluarga');
            $datakepalakeluarga->nokk = $request->input('nokk');
            $datakepalakeluarga->tempattinggal = $request->input('tempattinggal');
            $datakepalakeluarga->datart_id = $request->input('datart_id');
            $datakepalakeluarga->notelepon = $request->input('notelepon');
            $datakepalakeluarga->jumlahkeluarga = $request->input('jumlahkeluarga');
    
            if ($request->hasfile('imagekk')){
                $file = $request->file('imagekk');
                $extension = $file->getClientOriginalExtension('');
                $filename = time(). '.' . $extension;
                $file->move('scankk/',$filename);
                $datakepalakeluarga->imagekk = $filename;
            } else {
                return $request;
                $datakepalakeluarga->imagekk='';
    
            }
            $datakepalakeluarga->save();


            return redirect('/dashboard-datakepalakeluarga')->with('sukses', 'Data Berhasil Diubah');
        }

        public function delete($id)
        {
            $datakepalakeluarga = datakepalakeluarga::find($id);
            $datakepalakeluarga->delete();
            
            return redirect('/dashboard-datakepalakeluarga')->with('datakepalakeluarga',$datakepalakeluarga);
        }

        public function editrt(Request $request, $id)
        {
            $datakepaladatakepalakeluarga =datakepalakeluarga::find($id);
            $datakepaladatakepalakeluarga->update($request->all());
    
            $datakepaladatakepalakeluarga->save();
            return redirect('/dashboard-datapenduduk')->with('datakepaladatakepalakeluarga', $datakepaladatakepalakeluarga);
        }
    
        public function editrtindex($id)
        {
            $datakepaladatakepalakeluarga =datakepalakeluarga::find($id);
            return view('layouts.datapenduduk.editrt',['datakepaladatakepalakeluarga'=>$datakepaladatakepalakeluarga]);
        }
}
