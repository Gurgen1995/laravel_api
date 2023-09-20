<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        $companies = Company::all();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(): View
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|between:3, 40',
            'description' => 'required|between:150, 400',
            'photo' => 'required|file|image|mimes:png|max:3072'
        ]);


        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company has been created successfully.');
    }

    public function show(Company $company): View
    {
        return view('company.show',compact('company'));
    }


    public function edit(Company $company): View
    {
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Company $company): RedirectResponse
    {
        $request->validate([
            'name' => 'required|between:3, 40',
            'description' => 'required|between:150, 400',
            'photo' => 'required|file|image|mimes:png|max:3072'
        ]);

        $company->update($request->all());

        return redirect()->route('companies.index')
            ->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Company $company): RedirectResponse
    {
        $company->delete();

        return redirect()->route('companies.index')
            ->with('success','Company has been deleted successfully');
    }
}
