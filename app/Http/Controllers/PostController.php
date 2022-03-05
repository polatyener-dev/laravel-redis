<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $result = ['status' => 200];
        try {
            $postList = $this->postService->getAll();
            $result['data'] = json_decode($postList, true, JSON_UNESCAPED_SLASHES);
        } catch (\Throwable $e) {
            $result = [
                'status' => 500,
                'message' => $e->getMessage()
            ];
        }

        return $result;
    }
}
