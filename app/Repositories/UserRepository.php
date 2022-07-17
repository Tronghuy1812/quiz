<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Schema;
class UserRepository
{
    public function save(array $input, $id = null)
    {
        if(!empty($input['password']))
        {
            $input['password']= bcrypt($input['password']);
        }
        return User::updateOrCreate(['id'=> $id],$input);
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function paginate( $filter = [],$limit = 15)
    {

        $query = User::query();
       
        if(!empty($filter['name'])) {
            $query->where('name', 'like', '%'. $filter['name'] .'%');
        }

        if(!empty($filter['email'])) {
            $query->where('email', $filter['email']);
        }
        
        if(!empty($filter['sort_column']) && !empty($filter['sort_type']) && in_array(strtolower($filter['sort_type']),['desc','asc']))
        {
            if (Schema::hasColumn((new User)->getTable(),$filter['sort_column']))
            {
                $query->orderBy($filter['sort_column'], $filter['sort_type']);
            }
        }
        
        return $query->paginate($limit);
    }

    public function get($filter = [])
    {
        return User::get();
    }

    public function delete(array $ids)
    {
        return User::whereIn('id', $ids)->delete();
    }
}
