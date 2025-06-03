<?php

class Pelanggan extends Model {
    protected $table = 'pelanggan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'email', 'telepon', 'alamat'];

    public function createPelanggan($data) {
        return $this->insert($data);
    }

    public function getPelanggan($id) {
        return $this->find($id);
    }

    public function updatePelanggan($id, $data) {
        return $this->where($this->primaryKey, $id)->update($data);
    }

    public function deletePelanggan($id) {
        return $this->where($this->primaryKey, $id)->delete();
    }

    public function getAllPelanggan() {
        return $this->all();
    }
}