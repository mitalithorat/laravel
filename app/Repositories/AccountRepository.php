<?php

namespace App\Repositories;

use App\Interfaces\AccountRepositoryInterface;
use App\Models\Account;

class AccountRepository implements AccountRepositoryInterface
{
    public function all()
    {
        return Account::all();
    }
    public function store($data)
    {
        Account::create($data);
    }
    public function find($id)
    {
        return Account::where('id', $id)->first();
    }
    public function update($id, array $data)
    {
        $account = $this->find($id);
        $account->update($data);
    }
    public function delete($id)
    {
        $account = $this->find($id);
        $account->delete();
    }
}
