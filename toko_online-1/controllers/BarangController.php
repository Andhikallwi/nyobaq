<?php

class BarangController extends Controller
{
    public function index()
    {
        $barangModel = new Barang();
        $data['barangs'] = $barangModel->getAll();
        $this->view('barang/index', $data);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $barangModel = new Barang();
            $barangModel->create($_POST);
            header('Location: /barang');
        } else {
            $this->view('barang/create');
        }
    }

    public function edit($id)
    {
        $barangModel = new Barang();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $barangModel->update($id, $_POST);
            header('Location: /barang');
        } else {
            $data['barang'] = $barangModel->getById($id);
            $this->view('barang/edit', $data);
        }
    }

    public function delete($id)
    {
        $barangModel = new Barang();
        $barangModel->delete($id);
        header('Location: /barang');
    }
}