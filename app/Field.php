<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Field extends Model
{
    protected $guarded = [];


    /**
     * @return BelongsTo
     */
    public function tile() : BelongsTo
    {
        return $this->belongsTo(Field::class);
    }

    public function getCurrentOpenings(): array
    {
        $dir = ['t', 'r', 'b', 'l'];
        $openings = [0,1,0,1];
        $count = count($openings);
        $d = 0;
        while ($d <= 8) {
            $key = $d % $count;
            print_r("\r\nkey:{$key} it:");
            print_r($d .' '.$dir[$key] .' :'. $openings[$key] . "\r\n");
            $d ++;
        }

        die();
    }
}
