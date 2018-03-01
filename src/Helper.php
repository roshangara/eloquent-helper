<?php

namespace Roshangara\EloquentHelper;

trait Helper
{
    /**
     * Return last model
     * @param $query
     * @return mixed
     */
    public function scopeLast($query)
    {
        return $query->latest()->first();
    }

    /**
     * Sort models from latest
     * @param $query
     * @return mixed
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('id', 'desc');
    }
}