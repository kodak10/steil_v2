<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\marque;
use App\Models\piece;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $engins = Engin::get();
        $piece_autos = piece::get();
        //$piece_autos = piece::where('categories_pieces', '=', 'moteur');
        $marques = marque::get();


        return view('index', compact('engins', 'piece_autos', 'marques'));
    }

    public function about()
    {
        return view('about');
    }

    public function reparation()
    {
        return view('reparation');
    }

    public function pieceMoteur()
    {
        $piece_autos = piece::paginate(6);
        $newpieces = piece::paginate(10);
        return view('Shop_Pieces_Moteur', compact('piece_autos', 'newpieces'));
    }

    public function engin()
    {
        $engins = Engin::get();

        return view('engin', compact('engins'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function search(Request $request)
    {
        $piece_autos = piece::get();
        $newpieces = piece::paginate(10);

        $keyword = $request->input('keyword');

        $query = DB::table('pieces');

        if (!empty($keyword)) {
            $query->where('nom', 'like', '%' . $keyword . '%');
        }

        $piece_autos = $query->paginate(8);


        return view('Shop_Pieces_Moteur', compact('piece_autos', 'newpieces'));
    }

}
