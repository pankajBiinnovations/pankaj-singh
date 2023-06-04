<?php

namespace App\Http\Controllers;
use App\Services\BlogPostService;
use Illuminate\Http\Request;

class ServceController extends Controller
{
    protected $blogPostService;

    public function __construct(BlogPostService $blogPostService)
    {
        $this->blogPostService = $blogPostService;
    }

    public function index()
    {
        $blogPosts = $this->blogPostService->all();

        return view('blog.index', compact('blogPosts'));
    }

    public function show($id)
    {
        $blogPost = $this->blogPostService->find($id);

        return view('blog.show', compact('blogPost'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        $data = request()->all();

        $blogPost = $this->blogPostService->create($data);

        return redirect()->route('blog.show', $blogPost->id);
    }

    public function edit($id)
    {
        $blogPost = $this->blogPostService->find($id);

        return view('blog.edit', compact('blogPost'));
    }

    public function update($id)
    {
        $data = request()->all();

        $blogPost = $this->blogPostService->update($id, $data);

        return redirect()->route('blog.show', $blogPost->id);
    }

    public function destroy($id)
    {
        $this->blogPostService->delete($id);

        return redirect()->route('blog.index');
    }

}
