<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flash_Card;
use App\Child;

class FlashCardsController extends Controller
{
    public function index(Child $child)
    {
        $flashCards = Flash_Card::latest()->where('child_id', $child->id)->get();

        return view('flashCards.index', compact('flashCards', 'child'));
    }
}
