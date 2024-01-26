<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\TransactionModel;
use App\Models\CategoryModel;
use App\Models\RoomModel;
use App\Models\LocationModel;
use App\Models\ProductModel;

class TransactionController extends BaseController
{
    public function index()
    {
        $model = new TransactionModel();

        // Perform the join on the necessary tables
        $model->join('categories', 'categories.id = transactions.category_id');
        $model->join('rooms', 'rooms.id = transactions.room_id');
        $model->join('locations', 'locations.id = transactions.location_id');
        $model->join('products', 'products.id = transactions.product_id');

        // Fetch the data
        $data['transactions'] = $model->findAll();

        return view('transactions/index', $data);
    }

    public function create()
    {
        $categoryModel = new CategoryModel();
        $roomModel = new RoomModel();
        $locationModel = new LocationModel();
        $productModel = new ProductModel();

        $data['categories'] = $categoryModel->findAll();
        $data['rooms'] = $roomModel->findAll();
        $data['locations'] = $locationModel->findAll();
        $data['products'] = $productModel->findAll();

        return view('transactions/create', $data);
    }

    public function store()
    {
        $model = new TransactionModel();

        $data = [
            'category_id' => $this->request->getPost('category_id'),
            'room_id' => $this->request->getPost('room_id'),
            'location_id' => $this->request->getPost('location_id'),
            'product_id' => $this->request->getPost('product_id'),
            'tanggal_perolehan' => $this->request->getPost('tanggal_perolehan'),
            'penyusutan' => $this->request->getPost('penyusutan'),
            'bulan_berjalan_rp' => $this->request->getPost('bulan_berjalan_rp'),
            'harga_perolehan' => $this->request->getPost('harga_perolehan'),
        ];

        $model->insert($data);

        return redirect()->to('/transaction')->with('success', 'Transaction added successfully.');
    }

    public function edit($id)
    {
        $model = new TransactionModel();
        $categoryModel = new CategoryModel();
        $roomModel = new RoomModel();
        $locationModel = new LocationModel();
        $productModel = new ProductModel();

        $data['transaction'] = $model->find($id);
        $data['categories'] = $categoryModel->findAll();
        $data['rooms'] = $roomModel->findAll();
        $data['locations'] = $locationModel->findAll();
        $data['products'] = $productModel->findAll();

        return view('transactions/edit', $data);
    }

    public function update($id)
    {
        $model = new TransactionModel();

        $data = [
            'category_id' => $this->request->getPost('category_id'),
            'room_id' => $this->request->getPost('room_id'),
            'location_id' => $this->request->getPost('location_id'),
            'product_id' => $this->request->getPost('product_id'),
            'tanggal_perolehan' => $this->request->getPost('tanggal_perolehan'),
            'penyusutan' => $this->request->getPost('penyusutan'),
            'bulan_berjalan_rp' => $this->request->getPost('bulan_berjalan_rp'),
            'harga_perolehan' => $this->request->getPost('harga_perolehan'),
        ];

        $model->update($id, $data);

        return redirect()->to('/transaction')->with('success', 'Transaction updated successfully.');
    }

    public function delete($id)
    {
        $model = new TransactionModel();
        $model->delete($id);

        return redirect()->to('/transaction')->with('success', 'Transaction deleted successfully.');
    }
}
