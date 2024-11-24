<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $assinaturas = Subscription::all();
        return view('assinaturas.index', compact('assinaturas'));
    }

    public function create()
    {
        return view('assinaturas.create');
    }

    public function store(Request $request)
    {
        // Lógica para criar assinatura
    }

    // Outros métodos para gerenciar assinaturas
}
