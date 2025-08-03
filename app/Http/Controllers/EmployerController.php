<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Collection;

class EmployerController extends Controller
{
    public function index(): Collection
    {
        return Employer::all();
    }
}
