<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use function Laravel\Prompts\select;

class RatingController extends Controller
{
    public function index(Request $request)
    {
        $comments = DB::table('comments')->select('content', 'company_id')
            ->where('company_id', '=', '3')
            ->orWhere('company_id', '=', '4')
            ->orWhere('company_id', '=', '5')
            ->orWhere('company_id', '=', '6')
            ->orWhere('company_id', '=', '7')
            ->orWhere('company_id', '=', '8')
            ->orWhere('company_id', '=', '9')
            ->orWhere('company_id', '=', '10')
            ->orWhere('company_id', '=', '11')
            ->orWhere('company_id', '=', '12')
            ->orWhere('company_id', '=', '13')
            ->orWhere('company_id', '=', '14')
            ->orderBy('company_id')
            ->get();

        $ratings = DB::table('comments')
            ->Join('companies', 'comments.company_id', '=', 'companies.id')
            ->selectRaw('avg(comments.grades) as grades, companies.name')
            ->groupBy('company_id', 'companies.name')
            ->where('company_id', '=', '3')
            ->orWhere('company_id', '=', '4')
            ->orWhere('company_id', '=', '5')
            ->orWhere('company_id', '=', '6')
            ->orWhere('company_id', '=', '7')
            ->orWhere('company_id', '=', '8')
            ->orWhere('company_id', '=', '9')
            ->orWhere('company_id', '=', '10')
            ->orWhere('company_id', '=', '11')
            ->orWhere('company_id', '=', '12')
            ->orWhere('company_id', '=', '13')
            ->orWhere('company_id', '=', '14')
            ->limit(10)
            ->orderBy('grades', 'DESC')
            ->get();

        $i = 1;


        return view('rating.index', compact('ratings', 'request', 'i', 'comments'));
    }
}
