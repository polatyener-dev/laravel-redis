<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Redis;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        //return $this->postRepository->getAll();
        return self::redisControl();
    }

    public function redisControl()
    {
        if (Redis::get('post:List')) {
            return Redis::get('post:List');
        }
        return self::createRedisData();
    }

    public function createRedisData()
    {
       $postList =  $this->postRepository->getAll();
       Redis::set('post:List', $postList);
       return $postList;
    }
}
