<?php

namespace BrandStudio\Identifiable\Traits;

trait Identifiable
{

    public static function identifiableClassName() : string
    {
        return trans('admin.'.strtolower(class_basename(static::class)));
    }

    public function identifiableName() : string
    {
        return $this->name ?? $this->id;
    }

    public function identifiableLink() : string
    {
        return backpack_url(strtolower(class_basename(static::class)))."/{$this->id}/show";
    }

    public function getIdentifiableNameAttribute()
    {
        return $this->identifiableName();
    }

    public function getIdentifiableLinkAttribute()
    {
        return $this->identifiableLink();
    }

}
