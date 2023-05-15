<?php

namespace App\Interfaces;

interface ContactRepositoryInterface
{
    public function all();
    public function store($data);
    public function find($id);
    public function update($id, array $data);
    public function delete($id);

}
?>
