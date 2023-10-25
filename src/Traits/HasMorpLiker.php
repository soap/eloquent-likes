<?php

namespace Soap\EloquentLike;

trait HasMorphLiker
{
    public function likedBy()
    {
        return $this->morphMany('likerable');
    }

    /**
     * Alias for likedBy()
     */
    public function likers()
    {
        return $this->likedBy();
    }
}
