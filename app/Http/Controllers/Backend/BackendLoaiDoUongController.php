<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendLoaiDoUongRequest;
use App\Models\LoaiDoUong;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class BackendLoaiDoUongController extends Controller
{
    protected $folder = 'backend.loai_do_uong.';
    public function index()
    {
        $admin= Admin::find(get_data_user('admins'));
        $loaidouong = LoaiDoUong::orderByDesc('id')->paginate(20);
        $viewData = [
            'loaidouong' => $loaidouong, 'admin'     => $admin,
        ];
        return view($this->folder . 'index', $viewData);
    }

    public function create()
    {
        $admin= Admin::find(get_data_user('admins'));
        $loaidouong = LoaiDoUong::all();
        $viewData = [
            'loaidouong' => $loaidouong, 'admin'     => $admin,
        ];

        return view($this->folder . 'create', $viewData);
    }

    public function store(BackendLoaiDoUongRequest $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->tenloaidouong);
        LoaiDoUong::create($data);

        return redirect()->back()->with('success', 'Thêm thành công!');

    }

    public function edit($id)
    {
        $admin= Admin::find(get_data_user('admins'));
        $loaidouongs = LoaiDoUong::find($id);
        $viewData = [
            'loaidouongs' => $loaidouongs, 'admin'     => $admin,
        ];
        return view($this->folder . 'update', $viewData);
    }

    public function update(BackendLoaiDoUongRequest $request, $id)
    {
        $data = $request->except('_token');
        LoaiDoUong::find($id)->update($data);
        return redirect()->back()->with('success', 'Sửa thành công!');

    }
    public function delete($id)
    {
        DB::table('loaidouong')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}