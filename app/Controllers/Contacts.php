<?php

namespace App\Controllers;

use App\Services\ContactService;

class Contacts extends BaseController
{
    protected ContactService $service;

    public function __construct()
    {
        $this->service = new ContactService();
    }

    public function index()
    {
        return view('contacts', [

            'contacts' => $this->service->all()

        ]);
    }

    public function create()
    {
        return view('contacts_create');
    }

    public function store()
    {
        $this->service->create($this->request->getPost());

        return redirect()->to('/contacts')
            ->with('success', 'Contact created successfully.');
    }
}