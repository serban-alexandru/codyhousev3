<?php

namespace Modules\Blog\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Repositories\BlogRepo;

class BlogService extends Service implements IDBService
{
    protected $blogRepo;

    public function __construct()
    {
        $this->blogRepo = new BlogRepo;
    }

    public function getAll(){
        return $this->blogRepo->getAll();
    }

    public function getById($id){
        return $this->blogRepo->getById($id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function update($request)
    {
        // TODO: Implement update() method.
    }

    public function remove($id)
    {
        // TODO: Implement remove() method.
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}