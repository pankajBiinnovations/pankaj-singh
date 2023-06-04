<?php
namespace App\Repositories;

use App\Models\User;
use Hash;
class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

    public function createUser()
    {
        $name='pankaj singh';
        $email='abcd@gmail.com';
        $password=Hash::make('nddh');

        return User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
        ]);
    }

    public function update($id)
    {
        $product = User::find($id);
        $product->name ='llala';
        $product->email='ayt@gmail.com';
        $product->password='123';
        $product->save();
        return $product;
    }

    public function delete($id)
    {
        $product = User::find($id);
        $product->delete();
    }
}
