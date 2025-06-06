<?php

namespace App\Repositories\Web;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct(
        User $model
    ) {
        parent::__construct(
            $model,
            'user'
        );
    }
}
