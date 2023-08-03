<?php

namespace Laraspace;

use Illuminate\Database\Eloquent\Model;

class Tb_jns_pengiriman extends Model
{
    protected $table = 'tb_jns_pengiriman';
    protected $keyType = 'kd_pengiriman';
    public $timestamps = false;
    protected $fillable = [
        'kd_pengiriman',
        'nm_jns_pengiriman',
        'harga_per_km'
    ];

    public function saveJenispengiriman($data)
    {
        $this->kd_pengiriman = $data['kd_pengiriman'];
        $this->nm_jns_pengiriman = $data['nm_jns_pengiriman'];
        $this->harga_per_km = $data['harga_per_km'];
        $this->save();
        return 1;
    }
}
