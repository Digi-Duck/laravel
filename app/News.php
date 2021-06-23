<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // 'key' => 'value'
    //  TYPE['key']
    const TYPE = [
        'announcement' => '公告',
        'event' => '活動',
        'promotion' => '促銷',
        'major' => '重大公告'
    ];

    protected $fillable = ['type', 'publish_date', 'title', 'img', 'content'];
}
