<?php


namespace App\Services;


interface BaseServiceInterface
{
    public function validationRules(): array;

    public function all();

    public function get($id, $with = null);

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
