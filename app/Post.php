<?php

namespace App;

use App\Model;

class Post extends Model
{
    // 默认Post model会对应表posts
    // 当然也可以指定table
    protected $table = 'posts';

//    protected $guarded; // 不可以注入的数据字段
//    protected $fillable=[
//        'title',
//        'content'
//    ]; // 可以注入的数据字段
}
