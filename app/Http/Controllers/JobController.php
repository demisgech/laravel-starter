<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;

class JobController extends Controller
{
    public function index(): Collection
    {
        return Job::all();
    }
}
