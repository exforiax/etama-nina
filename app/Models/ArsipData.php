<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArsipData extends Model
{
    use AutoNumberTrait;

    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    public function getAutoNumberOptions()
    {
        return [
            'no_berkas' => [
                'format' => 'DOC' . date('dmy') . '?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function berkas()
    {
        return $this->belongsTo(Berkas::class, 'berkas_id', 'id');
    }
}
