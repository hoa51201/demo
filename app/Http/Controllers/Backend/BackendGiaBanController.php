<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendGiaBanRequest;
use App\Models\DoUong;
use App\Models\GiaBan;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class BackendGiaBanController extends Controller
{
    protected $folder = 'backend.gia_ban.';
    public function index()
    {
        $admin= Admin::find(get_data_user('admins'));
        $giabans = GiaBan::with('douong:id,tendouong')->orderByDesc('id')->paginate(10);
        $viewData = [
            'giabans' => $giabans, 'admin'     => $admin,
        ];
        return view($this->folder . 'index', $viewData);
       
    }

    public function create()
    {
        $admin= Admin::find(get_data_user('admins'));
        $douong = DoUong::all();
        $viewData = [
            'douong' => $douong, 'admin'     => $admin,
        ];

        return view($this->folder . 'create', $viewData);
    }

    public function store(BackendGiaBanRequest $request)
    {
        $data = $request->except('_token');
        GiaBan::create($data);

        return redirect()->back()->with('success', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $admin= Admin::find(get_data_user('admins'));
        $douong = DoUong::all();
        $giabans = GiaBan::find($id);

        $viewData = [
            'douong' => $douong,
            'giabans' => $giabans, 'admin'     => $admin,
        ];
        return view($this->folder . 'update', $viewData);
    }

    public function update(BackendGiaBanRequest $request, $id)
    {
        $data = $request->except('_token');
        GiaBan::find($id)->update($data);
        return redirect()->back()->with('success', 'Sửa thành công!');

    }
    public function delete($id)
    {
        DB::table('giaban')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}