<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DoUong;
use App\Models\LoaiDoUong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Admin;

class BackendDoUongController extends Controller
{
    protected $folder = 'backend.do_uong.';
    public function index()
    {
        $admin= Admin::find(get_data_user('admins'));
        $douongs = DoUong::with('loaidouong:id,tenloaidouong')->orderByDesc('id')->get();
        $viewData = [
            'douongs' => $douongs, 'admin'     => $admin,
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
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->tendouong);
        $data['soluongconlai'] = 0;
        $data['slban'] = 0;
        if ($request->hinhanh) {
            $image = upload_image('hinhanh');
            if (isset($image['code'])) {
                $data['hinhanh'] = $image['name'];
            }
        }
        DoUong::create($data);
        return redirect()->back()->with('success', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $admin= Admin::find(get_data_user('admins'));
        $loaidouong = LoaiDoUong::all();
        $douongs = DoUong::find($id);
        $viewData = [
            'loaidouong' => $loaidouong,
            'douongs' => $douongs, 'admin'     => $admin,
        ];
        return view($this->folder . 'update', $viewData);
    }

    public function editview($id)
    {
        $admin= Admin::find(get_data_user('admins'));
        $loaidouong = LoaiDoUong::all();
        $douongs = DoUong::find($id);
        $viewData = [
            'loaidouong' => $loaidouong,
            'douongs' => $douongs,
        ];
        return view($this->folder . 'view', $viewData);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        if ($request->hinhanh) {
            $image = upload_image('hinhanh');

            if (isset($image['code'])) {
                $data['hinhanh'] = $image['name'];
            }
        }
        DoUong::find($id)->update($data);
        return redirect()->back()->with('success', 'Sửa thành công!');

    }
    public function delete($id)
    {
        DB::table('douong')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }

}