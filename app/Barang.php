<?php

namespace Laraspace;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $keyType = 'id_barang';
    public $timestamps = false;
    protected $fillable = [
        "id_barang",
        "jenis_barang",
        "berat_barang",
        "id_pengirim",
        "jumlah_pcs"
    ];
    public function saveBarang($data)
    {
        $this->id_barang = $data['id_barang'];
        $this->jenis_barang = $data['jenis_barang'];
        $this->berat_barang = $data['berat_barang'];
        $this->id_pengirim = $data['id_pengirim'];
        $this->jumlah_pcs = $data['jumlah_pcs'];
        $this->save();
        return 1;
    }

    public function pengirim()
    {
        return $this->belongsTo('Laraspace\Pengirim', 'id_pengirim', 'id_pengirim');
    }
}
