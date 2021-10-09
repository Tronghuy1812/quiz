<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function save(array $input, $id = null)
    {
        $data = [
            'name' => $input['name'],
            'slug' => $input['slug'],
        ];

        if (!$id) {
            $data['created_by'] = auth()->user()->id;
            $data['created_at'] = now();
            $data['updated_at'] = now();
        }

        if ($id) {
            $data['updated_at'] = now();
        }

        return Category::updateOrCreate(['id' => $id], $data);
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function paginate($limit = 15, $filter = [])
    {
        return Category::paginate($limit);
    }

    public function get($filter = [])
    {
        return Category::get();
    }

    public function delete(array $ids)
    {
        return Category::whereIn('id', $ids)->delete();
    }
}
