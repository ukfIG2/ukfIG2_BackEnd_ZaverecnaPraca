<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showAll()
    {
        return Company::get(
            ['idCompany', 'Company_name', 'created_at', 'updated_at']);
    }
}
