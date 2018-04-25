<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;

class CU_43Controller extends Controller {

    public function mostraUsuari() {

        $id = filter_input(INPUT_GET, 'id');
        //$usuari = Usuari::findOrFail($id);// no funciona este metodo aqui
        //$usuari = Usuari::where('idUsuari', $id)->first();// tampoco funciona este metodo aqui
        $usuari = DB::select("SELECT * FROM usuaris WHERE idUsuari = " . $id);

        $grups = DB::table('usuarigrup')
                        ->where('idUsuari', $id)
                        ->leftJoin('grups', 'usuarigrup.idGrup', '=', 'grups.idGrup')->get();

        return [$usuari, $grups];
    }

    public function eliminarUsuari(Request $request) {

        $id = $request->cu43_idUsuari;
        $user = Usuari::findOrFail($id);

        if ($user != null) {
            $user->delete();

            Notification::success("L'usuari s'ha eliminat correctament.");
            return redirect('CU_42_GestionarUsuaris');
        } else {
            Notification::error("Error!!! Aquest usuari no existeix.");
            return redirect('CU_42_GestionarUsuaris');
        }

        /* Falta eliminar carpeta o pertinença agrups??   */
    }

}
