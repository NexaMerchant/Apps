<?php

namespace NexaMerchant\Apps\Models;

class AppProxy extends App
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function scopeEnabled($query)
    {
        return $query->where('status', 'enable');
    }
    public function scopeDisabled($query)
    {
        return $query->where('status', 'disable');
    }
    public function scopeApplied($query)
    {
        return $query->where('status', 'apply');
    }
    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}