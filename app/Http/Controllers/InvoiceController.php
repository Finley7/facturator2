<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class InvoiceController extends Controller
{
    public function index()
    {
        return Inertia::render('Invoice/Index', [
            'invoices' => Auth::user()->invoices
        ]);
    }

    public function create()
    {
        return Inertia::render('Invoice/Create');
    }
}
