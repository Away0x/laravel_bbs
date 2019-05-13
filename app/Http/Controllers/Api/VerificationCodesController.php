<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class VerificationCodesController extends Controller
{
    public function store()
    {
        return $this->response->array(['test_message' => 'store verification code']);
    }
}
