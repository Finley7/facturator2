<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index() {
        return Inertia::render('Client/Index', [
            'clients' => Auth::user()->clients
        ]);
    }

    public function create() {
        return Inertia::render('Client/Create');
    }

    public function edit($clientId) {

        $client = Auth::user()->clients->firstWhere('id', $clientId);

        return Inertia::render('Client/Edit', [
            'client' => $client
        ]);
    }

    public function update($clientId, CreateClientRequest $request) {

        $client = Client::find($clientId);
        $client->update($request->validated());

        return Redirect::route('clients.edit', ['clientId' => $clientId]);
    }

    public function store(CreateClientRequest $request) {

        $clientRequest = $request->validated();
        $clientRequest['owner_id'] = Auth::user()->id;

        Client::create($clientRequest);

        return Redirect::route('clients.create');
    }
}
