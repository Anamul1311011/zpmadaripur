<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable =['menu_id', 'menu_title_id', 'page_title', 'featured_image', 'page_content'];
}
