<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Runner\Exception;

class PublicController extends Controller
{
    public function home()
    {

        $allenatori = [
            // 'allenatori' => [
            [
                'nome' => 'Lance',
                'img' => 'https://pa1.aminoapps.com/6977/ebb68f0e97f552083c317af83f155a2331396ee3r1-500-597_hq.gif',
                'ruolo' => 'Campione',
                'squadra' => ['Dragonite', 'Aerodactyl', 'Charizard', 'Gyarados', 'Salamence', 'Kingdra'],
            ],
            [
                'nome' => 'Cynthia',
                'img' => 'https://media.tenor.com/TnD8y7cA2uIAAAAj/pokemon-cynthia.gif',
                'ruolo' => 'Campionessa',
                'squadra' => ['Garchomp', 'Lucario', 'Roserade', 'Milotic', 'Spiritomb', 'Togekiss'],
            ],
            [
                'nome' => 'Steven Stone',
                'img' => 'https://pa1.aminoapps.com/5873/9c50462f4776b012bae1e17b161af9f7676db2d8_hq.gif',
                'ruolo' => 'Campione',
                'squadra' => ['Metagross', 'Aggron', 'Claydol', 'Armaldo', 'Cradily', 'Skarmory'],
            ],
            [
                'nome' => 'Red',
                'ruolo' => 'Allenatore leggendario',
                'img' => 'https://media.tenor.com/X_xh7_GIN9YAAAAi/rojo-pokemon.gif',
                'squadra' => ['Pikachu', 'Charizard', 'Venusaur', 'Blastoise', 'Snorlax', 'Lapras'],
            ],
            [
                'nome' => 'Alder',
                'img' => '',
                'ruolo' => 'Campione',
                'squadra' => ['Volcarona', 'Bouffalant', 'Escavalier', 'Accelgor', 'Druddigon', 'Vanilluxe'],
            ],
            [
                'nome' => 'Iris',
                'img' => '',
                'ruolo' => 'Campionessa',
                'squadra' => ['Haxorus', 'Lapras', 'Aggron', 'Druddigon', 'Archeops', 'Hydreigon'],
            ],
            // ],
        ];
        return view("welcome", ['allenatori' => $allenatori]);
    }

    public function contacts()
    {
        return view("contact");
    }

    public function submit(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $body = $request->body;
        $content = compact("username", "email", "body");
        try {
            Mail::to($email)->send(new ContactMail($content));
        } catch (Exception $e) {
            return redirect(route("home"))->with("errorMessage", "la tua email non é stata inviata riprova dopo");
        }
        return redirect(route("home"))->with("successMessage", "la tua email é stata inviata");
    }
}
