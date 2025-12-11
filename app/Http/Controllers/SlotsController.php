<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SlotsController extends Controller
{
    public function getGames()
    {
        return response()->json(['success' => true, 'games' => []]);
    }
    
    public function getGameURI(Request $request)
    {
        $user = Auth::user();
        if(!$user) return response()->json(['error' => 'Please login']);
        
        return response()->json(['success' => true, 'url' => '']);
    }
    
    public function callback(Request $request)
    {
        return response()->json(['success' => true]);
    }
}
