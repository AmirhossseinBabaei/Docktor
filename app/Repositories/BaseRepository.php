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
}
