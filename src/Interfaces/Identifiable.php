<?php

namespace BrandStudio\Identifiable\Interfaces;

interface Identifiable
{

    public static function identifiableClassName() : string;

    public function identifiableName() : string;

    public function identifiableLink() : string;

}
