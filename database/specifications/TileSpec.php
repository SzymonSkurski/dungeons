<?php

namespace database\specifications;

class TileSpec
{
    public const TABLE = 'tiles';
    public const ID = 'id';
    public const KIND = 'kind';
    public const KIND_VALIDATE = 'string|max:64';
    public const IMAGE = 'image';
    public const IMAGE_VALIDATE = 'string|max:64';
    public const OPENINGS = 'openings';
    public const OPENINGS_VALIDATE = 'JSON';
    public const STATS = 'stats';
    public const STATS_VALIDATE = 'json|nullable';
    public const VALIDATE = [self::KIND, self::IMAGE, self::OPENINGS, self::STATS];

    public static function getValidate(): array
    {
        $val = [];
        foreach (self::VALIDATE as $property) {
            $const = strtoupper($property).'_VALIDATE';
            $val[$property] = constant("self::{$const}");
        }
        return $val;
    }
}
