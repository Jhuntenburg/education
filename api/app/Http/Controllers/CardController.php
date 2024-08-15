<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Symfony\Component\HttpFoundation\JsonResponse;

class CardController extends Controller
{
    public function getCardNames(): JsonResponse
    {
        $cards = Card::select('id', 'name')
            ->where('name', '!=', 'BACK')
            ->get();
        return response()->json($cards);
    }

    public function show($id)
    {
        $card = Card::findOrFail($id);
        return view('card.show', compact('card'));
    }
}
