<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        return view('products/index', $data);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
    {
        $model = new ProductModel();

        $data = [
            'product_kode' => $this->request->getPost('product_kode'),
            'product_name' => $this->request->getPost('product_name'),
        ];

        $model->insert($data);

        return redirect()->to('/products')->with('success', 'products added successfully.');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['products'] = $model->find($id);

        return view('products/edit', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();

        $data = [
            'kategori_kode' => $this->request->getPost('kategori_kode'),
            'kategori_name' => $this->request->getPost('kategori_name'),
        ];

        $model->update($id, $data);

        return redirect()->to('/products')->with('success', 'products updated successfully.');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/products')->with('success', 'products deleted successfully.');
    }
}
