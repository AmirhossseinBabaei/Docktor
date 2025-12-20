<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{
    public $setModel;
    public $table;

    protected function query()
    {
        return DB::table($this->table);
    }

    protected function model()
    {
        return app($this->setModel);
    }

    public function insert(array $data)
    {
        return $this->model()->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->model()->where('id', $id)->update($data);
    }
}
