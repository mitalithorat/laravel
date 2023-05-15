<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function all()
    {
        return Contact::all();
    }
    public function store($data)
    {
        Contact::create($data);
    }
    public function find($id)
    {
        return Contact::where('id', $id)->first();
    }
    public function update($id, array $data)
    {
        $Contact = $this->find($id);
        $Contact->update($data);
    }
    public function delete($id)
    {
        $Contact = $this->find($id);
        $Contact->delete();
    }
}
