<?php

class PelangganController extends Controller
{
    public function index()
    {
        // Load the Pelanggan model
        $pelangganModel = new Pelanggan();
        // Fetch all customers
        $data['pelanggan'] = $pelangganModel->getAll();
        // Load the view to display customers
        $this->view('pelanggan/index', $data);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Load the Pelanggan model
            $pelangganModel = new Pelanggan();
            // Prepare data for the new customer
            $data = [
                'nama' => trim($_POST['nama']),
                'email' => trim($_POST['email']),
                'telepon' => trim($_POST['telepon']),
                'alamat' => trim($_POST['alamat']),
            ];
            // Create the customer
            if ($pelangganModel->create($data)) {
                // Redirect to the customer index page
                header('Location: /pelanggan');
            } else {
                // Handle error
                $data['error'] = 'Gagal menambahkan pelanggan.';
            }
        }
        // Load the view to create a new customer
        $this->view('pelanggan/create');
    }

    public function edit($id)
    {
        // Load the Pelanggan model
        $pelangganModel = new Pelanggan();
        // Fetch the customer data
        $data['pelanggan'] = $pelangganModel->getById($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Prepare data for the updated customer
            $dataUpdate = [
                'id' => $id,
                'nama' => trim($_POST['nama']),
                'email' => trim($_POST['email']),
                'telepon' => trim($_POST['telepon']),
                'alamat' => trim($_POST['alamat']),
            ];
            // Update the customer
            if ($pelangganModel->update($dataUpdate)) {
                // Redirect to the customer index page
                header('Location: /pelanggan');
            } else {
                // Handle error
                $data['error'] = 'Gagal memperbarui pelanggan.';
            }
        }
        // Load the view to edit the customer
        $this->view('pelanggan/edit', $data);
    }

    public function delete($id)
    {
        // Load the Pelanggan model
        $pelangganModel = new Pelanggan();
        // Delete the customer
        if ($pelangganModel->delete($id)) {
            // Redirect to the customer index page
            header('Location: /pelanggan');
        } else {
            // Handle error
            echo 'Gagal menghapus pelanggan.';
        }
    }
}