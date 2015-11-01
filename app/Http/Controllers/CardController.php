<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return $cards;
    }
}
