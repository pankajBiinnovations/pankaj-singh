<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class UserController extends Controller
{
    // protected $userRepository;

    // public function __construct(UserRepository $userRepository)
    // {
    //     $this->userRepository = $userRepository;
    // }
    public function __construct(ProductRepositoryInterface $productRepository)
{
    $this->productRepository = $productRepository;
}

    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        dd($user);
        // ...
    }
    public function delete($id)
    {
        $user = $this->userRepository->delete($id);
        dd($user);
        // ...
    }
    public function create(array $datas)
    {
        
        $this->ProductRepository->create($data);
        
        // ...
    }

    // Other controller methods...

    public function send(Request $request)
    {
        $user = User::find($request->user_id);

        $firebase = app('firebase');

        $notification = [
            'title' => 'New message',
            'body' => 'You have a new message from John Doe',
        ];

        $firebase->send($user->device_token, $notification);
    }

    public function store(Request $request)
{
    $data =[
        'name' => 'aa',
        'email' => 'aa@gmail.com',
        
    ];

    $product = $this->productRepository->create($data);
    return $product;
}
}
