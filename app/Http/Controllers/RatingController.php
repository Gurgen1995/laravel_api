<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class RatingController extends Controller
{
    public function index(Request $request)
    {
        $ratings = DB::table('comments')
            ->Join('companies', 'comments.company_id', '=', 'companies.id')
            ->select('comments.company_id', 'comments.content', 'comments.grades', 'comments.grades as top', 'companies.name')
            ->where('company_id', '=', '3')
            ->orWhere('company_id', '=', '4')
            ->orWhere('company_id', '=', '5')
            ->orWhere('company_id', '=', '6')
            ->orWhere('company_id', '=', '7')
            ->orWhere('company_id', '=', '8')
            ->orWhere('company_id', '=', '9')
            ->orWhere('company_id', '=', '10')
            ->orWhere('company_id', '=', '11')
            ->orderBy('comments.grades', 'DESC')
            ->limit(10)
            ->get();

        $i = 1;


        return view('rating.index', compact('ratings', 'request', 'i'));
    }
}
