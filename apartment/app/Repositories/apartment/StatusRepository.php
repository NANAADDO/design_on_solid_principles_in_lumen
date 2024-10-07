<?php

namespace App\Repositories\apartment;

use App\Models\Status;
use App\Repositories\BaseRepository;


class StatusRepository extends BaseRepository
{
    public function model()
    {
        return Status::class;
    }

}