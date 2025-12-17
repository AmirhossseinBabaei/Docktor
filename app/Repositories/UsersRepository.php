<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository extends BaseRepository
{
    protected string $setModel = User::class;
    protected string $table = "users";
}
