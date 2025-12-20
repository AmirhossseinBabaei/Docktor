<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository extends BaseRepository
{
    public $setModel = User::class;
    public $table = "users";
}
