<?php

namespace App\Http\Controllers\Admin;

use App\Claim;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClaimRequest; // Check if you have this request class
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClaimController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('claim_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $claims = Claim::all();

        return view('admin.claims.index', compact('claims'));
    }





  
}
