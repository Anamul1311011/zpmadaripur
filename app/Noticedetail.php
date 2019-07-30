<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticedetail extends Model
{
    protected $fillable = ['notice_title', 'notice_detail', 'featured_image'];
}
