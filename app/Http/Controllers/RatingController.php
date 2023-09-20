<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function index(Request $request)
    {
        $ratings = DB::table('comments')
            ->Join('companies', 'comments.id', '=', 'companies.id')
            ->select('comments.company_id as company_id', 'companies.name as company_name', 'comments.content', 'comments.grades')
            ->get();

        return view('rating.index', compact('ratings', 'request'));
    }
}
