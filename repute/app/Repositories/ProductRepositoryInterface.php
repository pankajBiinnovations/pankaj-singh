<?php
namespace App\Repositories;

interface ProductRepositoryInterface
{
    public function all();

    public function getUserById($id);

    public function createUser();

    public function update($id);

    public function delete($id);
}
