<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
     public $timestamps = true;
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'adminid',
        'uid',
        'category_id',
        'tags',
        'uuid',
        'title',
        'name',
        'author',
        'source',
        'description',
        'password',
        'cover_ids',
        'pid',
        'level',
        'type',
        'show_type',
        'position',
        'content',
        'comment',
        'view',
        'page_tpl',
        'file_id',
        'comment_status',
        'status'
    ];

    protected $dates = ['delete_at'];
}