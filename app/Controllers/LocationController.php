<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LocationModel;
use App\Models\RoomModel;

class LocationController extends BaseController
{
    public function index()
    {
        $model = new LocationModel();
        $model->select('locations.*,rooms.room_name');
        $model->join('rooms', 'rooms.id = locations.room_id');
        $data['locations'] = $model->findAll();

        return view('locations/index', $data);
    }

    public function create()
    {
        $roomModel = new RoomModel();
        $data['rooms'] = $roomModel->findAll();
        return view('locations/create',$data);
    }

    public function store()
    {
        $model = new LocationModel();

        $data = [
            'room_id' => $this->request->getPost('room_id'),
            'location_code' => $this->request->getPost('location_code'),
            'location_name' => $this->request->getPost('location_name'),
        ];

        $model->insert($data);

        return redirect()->to('/locations')->with('success', 'Location added successfully.');
    }

    public function edit($id)
    {
        $roomModel = new RoomModel();
        $data['rooms'] = $roomModel->findAll();
        $model = new LocationModel();
        $data['locations'] = $model->find($id);

        return view('locations/edit', $data);
    }

    public function update($id)
    {
        $model = new LocationModel();

        $data = [
            'room_id' => $this->request->getPost('room_id'),
            'location_code' => $this->request->getPost('location_code'),
            'location_name' => $this->request->getPost('location_name'),
        ];

        $model->update($id, $data);

        return redirect()->to('/locations')->with('success', 'Location updated successfully.');
    }

    public function delete($id)
    {
        $model = new LocationModel();
        $model->delete($id);

        return redirect()->to('/locations')->with('success', 'Location deleted successfully.');
    }
}
