<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Event\Telemetry\Info;

class CompanyController extends Controller
{


public static $services = [
    [
        'uri' => 'gestionali',
        'name' => 'Sistema Gestionali',
        'costo' => 1500,
        'tempo_di_realizzazione' => '2 settimane'
    ],
    [
        'uri' => 'ecommerce',
        'name' => 'Piattaforma eCommerce',
        'costo' => 2500,
        'tempo_di_realizzazione' => '3 settimane'
    ],
    [
        'uri' => 'siti-web',
        'name' => 'Siti Web',
        'costo' => 1000,
        'tempo_di_realizzazione' => '1 settimana'
    ],
    [
        'uri' => 'marketing-digitale',
        'name' => 'Marketing Digitale',
        'costo' => 1800,
        'tempo_di_realizzazione' => '2 settimane'
    ],
    [
        'uri' => 'app-mobile',
        'name' => 'Applicazione Mobile',
        'costo' => 3000,
        'tempo_di_realizzazione' => '4 settimane'
    ],
    [
        'uri' => 'seo',
        'name' => 'Servizi SEO',
        'costo' => 1200,
        'tempo_di_realizzazione' => '2 settimane'
    ],
    [
        'uri' => 'social-media',
        'name' => 'Gestione Social Media',
        'costo' => 800,
        'tempo_di_realizzazione' => '1 settimana'
    ],
    [
        'uri' => 'analisi-dati',
        'name' => 'Analisi Dati',
        'costo' => 2200,
        'tempo_di_realizzazione' => '3 settimane'
    ],
    [
        'uri' => 'design-grafico',
        'name' => 'Design Grafico',
        'costo' => 900,
        'tempo_di_realizzazione' => '1 settimana'
    ],
    [
        'uri' => 'formazione',
        'name' => 'Formazione Online',
        'costo' => 500,
        'tempo_di_realizzazione' => '2 settimane'
    ],
];


    public function servizi() {
        return view('servizi', ['services' => self::$services]);
    }

        public function dettagliservizi($stringa) {

            foreach (self::$services as $service)
            {
                if($stringa==$service['uri'])
                {
                    $stringa=$service['name'];
                    return view('dettagliservizi',['servizio' => $stringa]);
                }
            }
            abort(404);

    }

    public function send(Request $request){
        $request->validate([
            'nome'=>'required',
            'email'=>'required|email',
            'msg' => 'required|min:10'
        ]);

        $data=[
            'nome'=>$request->input('nome'),
            'email'=>$request->input('email'),
            'msg' => $request->input('msg')
        ];

        Mail::to($data['email'])
        ->send(new InfoMail($data));

        return view('contatti');
    }
}
