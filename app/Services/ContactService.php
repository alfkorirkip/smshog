<?php

namespace App\Services;

use App\Models\ContactModel;

class ContactService
{
    protected ContactModel $contacts;

    public function __construct()
    {
        $this->contacts = new ContactModel();
    }

    public function all($perPage = 25)
    {
        return $this->contacts
            ->orderBy('first_name')
            ->paginate($perPage);
    }

    public function create(array $data)
    {
        return $this->contacts->insert($data);
    }

    public function update(int $id, array $data)
    {
        return $this->contacts->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->contacts->delete($id);
    }

    public function find(int $id)
    {
        return $this->contacts->find($id);
    }
}