<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RoomModel;

class RoomController extends BaseController
{
    public function index()
    {
        $model = new RoomModel();
        $data['rooms'] = $model->findAll();

        return view('rooms/index', $data);
    }

    public function create()
    {
        return view('rooms/create');
    }

    public function store()
    {
        $model = new RoomModel();

        $data = [
            'room_name' => $this->request->getPost('room_name'),
        ];

        $model->insert($data);

        return redirect()->to('/rooms')->with('success', 'Room added successfully.');
    }

    public function edit($id)
    {
        $model = new RoomModel();
        $data['rooms'] = $model->find($id);

        return view('rooms/edit', $data);
    }

    public function update($id)
    {
        $model = new RoomModel();

        $data = [
            'room_name' => $this->request->getPost('room_name'),
        ];

        $model->update($id, $data);

        return redirect()->to('/rooms')->with('success', 'Room updated successfully.');
    }

    public function delete($id)
    {
        $model = new RoomModel();
        $model->delete($id);

        return redirect()->to('/rooms')->with('success', 'Room deleted successfully.');
    }
}
