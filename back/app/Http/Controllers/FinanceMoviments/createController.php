<?php

namespace App\Http\Controllers\FinanceMoviments;

use App\Http\Controllers\Controller;
use App\Models\FinanceMoviment;
use Illuminate\Http\Request;

class createController extends Controller
{
    function __construct()
    {
        $this->financeMoviment = new FinanceMoviment();
    }
    public function create(Request $request)
    {
        return $this->financeMoviment->store($request->all());
    }
}
