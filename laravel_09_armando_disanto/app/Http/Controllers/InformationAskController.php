<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationAsk;

class InformationAskController extends Controller
{
    public function store(Request $request)
    {
        // Validazione dei dati
        $request->validate([
            'email' => 'required|email',
            'number' => 'required|string|max:15',
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Salvataggio nel database
        InformationAsk::create([
            'email' => $request->email,
            'number' => $request->number,
            'name' => $request->name,
            'message' => $request->message,
        ]);


        return redirect()->back()->with('success', 'Messaggio inviato con successo!');
    }
}
