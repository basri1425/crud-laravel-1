<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable =['isiJawab','pertanyaan_id'];
}
