<?php

namespace Fuguevit\Commentable;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'comments';

    /**
     * {@inheritdoc}
     */
    protected $fillable = ['user_id', 'title', 'body'];

    public function commentable()
    {
        return $this->morphTo();
    }
}
