<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berkas extends Model
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
    protected $table = 'berkas';
    protected $fillable = [
        'no_berkas', 'nama', 'alamat', 'no_telp', 'user_id', 'category_id', 'status_id', 'file', 'keterangan',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setFilenamesAttribute($value)
    {
        $this->attributes['file'] = json_encode($value);
    }


}
