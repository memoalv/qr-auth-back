<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use App\AccessLog;
use App\Helpers\DammAlgorithm;
use Illuminate\Support\Facades\Storage;

class QR_auth extends Controller
{
    public function getStudentsData(Request $req)
    {

        $alumno = Alumnos::where('matricula', $req->matricula)
            ->first();

        $accessLog = new AccessLog;
        $accessLog->alumno_id = $alumno->id;
        $accessLog->save();
        
        return response()->json($alumno);
    }

    public function getStudentsAvatar(Request $req)
    {
        $damm = new DammAlgorithm;
        dd($damm);
    }
}
