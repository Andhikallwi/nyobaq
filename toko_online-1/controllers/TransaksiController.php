<?php

class TransaksiController extends Controller
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new Transaksi();
    }

    public function index()
    {
        $transaksis = $this->transaksiModel->getAllTransaksis();
        require_once '../views/transaksi/index.php';
    }

    public function detail($id)
    {
        $transaksi = $this->transaksiModel->getTransaksiById($id);
        require_once '../views/transaksi/detail.php';
    }
}