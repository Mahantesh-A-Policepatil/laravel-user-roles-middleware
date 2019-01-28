<?php

namespace App\Http\Controllers;

class CompaniesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Admin');
    }
    public function index()
    {
        return view('admin.companies.index');
    }

}
