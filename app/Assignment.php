<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Assignment extends Model
{
    public function complete() {
        $this->completed_at = Carbon::now();
        $this->save();
    }
}
