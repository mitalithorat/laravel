<?php

namespace App\Interfaces;

interface AccountRepositoryInterface
{
    public function all();
    public function store($data);
    public function find($id);
    public function update($id, array $data);
    public function delete($id);

}
?>
