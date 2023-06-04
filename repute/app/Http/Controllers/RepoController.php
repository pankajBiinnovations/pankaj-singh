<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;
class RepoController extends Controller
{
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
   public function getallusers()
   {
    $products = $this->productRepository->all();
    dd($products[0]['name']);
    
   }
   public function getUserById(Request $request, $id)
   {
    dd($this->productRepository->getUserById($id));
   }
   public function createUser(Request $request)
   {
    return($this->productRepository->createUser($request));
   }
   public function update(Request $request , $id)
   {
    return($this->productRepository->update($id));
   }
   public function delete(Request $request, $id)
   {
    dd($this->productRepository->delete($id));
   }
}
