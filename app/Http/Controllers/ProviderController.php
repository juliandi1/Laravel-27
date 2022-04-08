<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Resources\Provider\MainCollection;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::orderBy('name', 'asc')->get();
        return new MainCollection($providers);
    }
}
