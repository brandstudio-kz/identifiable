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
        return $this->name ?? $this->getKey();
    }

    public function identifiableLink() : string
    {
        return backpack_url(strtolower(class_basename(static::class)))."/{$this->getKey()}/show";
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
