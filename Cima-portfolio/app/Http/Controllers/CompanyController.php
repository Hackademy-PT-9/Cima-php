<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public static $services = ['Siti', 'eCommerce', 'Gestionali', 'Marketing'];
    public function servizi() {
        return view('servizi', ['services' => self::$services]);
    }
    
        public function dettagliservizi($stringa) {

            foreach (self::$services as $service)
            {
                if($stringa==$service)
                {
                    return view('dettagliservizi',['servizio' => $stringa]);
                }
            }
            abort(404);
            
    }
}
