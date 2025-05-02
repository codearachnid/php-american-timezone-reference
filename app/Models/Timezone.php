<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    use \Sushi\Sushi;
    
    protected $rows = [
        [
            'abbr' => 'EST',
            'php' => 'America/New_York',
            'primary' => true,
        ],
        [
            'abbr' => 'CST',
            'php' => 'America/Chicago',
            'primary' => true,
        ],
        [
            'abbr' => 'MDT',
            'php' => 'America/Denver',
            'primary' => true,
        ],
        [
            'abbr' => 'MST',
            'php' => 'America/Phoenix',
            'primary' => true,
        ],
        [
            'abbr' => 'PST',
            'php' => 'America/Los_Angeles',
            'primary' => true,
        ],
        [
            'abbr' => 'AKST',
            'php' => 'America/Anchorage',
            'primary' => true,
        ],
        [
            'abbr' => 'HDT',
            'php' => 'America/Adak',
            'primary' => true,
        ],
        [
            'abbr' => 'HST',
            'php' => 'Pacific/Honolulu',
            'primary' => true,
        ],
    ];
}
