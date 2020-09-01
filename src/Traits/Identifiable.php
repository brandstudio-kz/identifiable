<?php

namespace BrandStudio\Identifiable\Traits;

trait Identifiable
{

    public function identifiableName() : string
    {
        return trans_choice("admin.{$this->getTable()}", 1)." ".($this->name ?? $this->id);
    }

    public function identifiableLink() : string
    {
        return backpack_url(strtolower(class_basename(static::class)))."/{$this->id}/show";
    }

}
