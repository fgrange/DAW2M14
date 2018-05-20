<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\Grup;
use App\UsuariGrup;
use App\Logs;

class CU_39Controller extends Controller {

    public function modificarGrup(Request $request) {

        $grup = Grup::where('idGrup', $request->idGrupEliminar)->first();
        $usuariGrup = UsuariGrup::where('idGrup', $request->idGrupEliminar)->first();

        $dataCreacioGrup = $grup->dataCreacio;
        $idGrup = $grup->idGrup;
        $nomGrup = $grup->nom;

        if ($grup !== null) {

            if ($usuariGrup !== null) {

                $arrayUsuarisGrup = UsuariGrup::where('idGrup', $idGrup)->get();

                foreach ($arrayUsuarisGrup as $idUsuariGrup) {
                    $usuariGrup2 = UsuariGrup::where('idGrup', $idUsuariGrup->idGrup)->first();
                    $usuariGrup2->delete();
                }
            }
            $grup->delete();

            $grupMod = new Grup;
            $grupMod->idGrup = $idGrup;
            $grupMod->nom = $nomGrup;
            $grupMod->dataCreacio = $dataCreacioGrup;
            $grupMod->dataModificacio = date('Y-m-d');
            $grupMod->save();

            $stringIdUsuarisGrup = $request->stringUsuarisGrup;
            $arrayidUsuarigrup = explode(",", $stringIdUsuarisGrup);
            foreach ($arrayidUsuarigrup as $idUsuariGrup) {
                $usuariGrup = new UsuariGrup;
                $usuariGrup->idUsuari = $idUsuariGrup;
                $usuariGrup->idGrup = $grup->idGrup;
                $usuariGrup->save();
            }

            /*
              $nlog = new Logs;
              $nlog->idUsuari = $idusuari;
              $nlog->descripcio = "Modificar Grup";
              $nlog->dataLog = date('Y-m-d');
              $nlog->hora = date('H:i:s');
              $nlog->path = "";
              $nlog->save();
             */

            Notification::success("Grup modificat correctament");
            return redirect('CU_36_GestionarGrups');
        } else {
            Notification::success("No s'ha pogut modificar el grup");
            return redirect('CU_36_GestionarGrups');
        }
    }

}
