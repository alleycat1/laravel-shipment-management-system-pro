<?php

namespace Laraspace;

use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
{
    protected $table = 'pengirim';
    protected $keyType = 'id_pengirim';
    public $timestamps = false;
    protected $fillable = [
        'id_pengirim',
        'nama_pengirim',
        'alamat_pengirim',
        'no_telpon'
    ];

    /**
     * store data pengirim
     */
    public function savePengirim($data)
    {
        $this->id_pengirim = $data['id_pengirim'];
        $this->nama_pengirim = $data['nama_pengirim'];
        $this->alamat_pengirim = $data['alamat_pengirim'];
        $this->no_telpon = $data['no_telpon'];
        $this->save();
        return 1;
    }
    /**
     * Method One To Many Pengirim -> Tracking
     *
     * @return void
     */
    public function trackings()
    {
        return $this->hasMany('Laraspace\Tracking', 'id_pengirim', 'id_pengirim');
    }
}
