<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function index()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->findAll();

        return view('categories/index', $data);
    }

    public function create()
    {
        return view('categories/create');
    }

    public function store()
    {
        $model = new CategoryModel();

        $data = [
            'kategori_kode' => $this->request->getPost('kategori_kode'),
            'kategori_name' => $this->request->getPost('kategori_name'),
        ];

        $model->insert($data);

        return redirect()->to('/category')->with('success', 'Category added successfully.');
    }

    public function edit($id)
    {
        $model = new CategoryModel();
        $data['category'] = $model->find($id);

        return view('categories/edit', $data);
    }

    public function update($id)
    {
        $model = new CategoryModel();

        $data = [
            'kategori_kode' => $this->request->getPost('kategori_kode'),
            'kategori_name' => $this->request->getPost('kategori_name'),
        ];

        $model->update($id, $data);

        return redirect()->to('/category')->with('success', 'Category updated successfully.');
    }

    public function delete($id)
    {
        $model = new CategoryModel();
        $model->delete($id);

        return redirect()->to('/category')->with('success', 'Category deleted successfully.');
    }
}
