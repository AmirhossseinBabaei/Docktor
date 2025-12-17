<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{
    protected string $setModel;
    protected string $table;

    protected function query()
    {
        return DB::table($this->table);
    }

    protected function model()
    {
        return get_class($this->setModel);
    }
}
