<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.product.item.index';
        $this->create = 'admin.product.item.create';
        $this->edit = 'admin.product.item.edit';
        $this->show = 'admin.product.item.show';
    }

    public function index()
    {
        $lists = Product::get();
        return view($this->index, compact('lists'));
    }

    public function create()
    {
        $type = ProductType::get();

        return view($this->create, compact('type'));
    }

    public function store(Request $request) {
        $requestData = $request->all();
        if($request->hasFile('photo')){
            $requestData['photo'] = FileController::imageUpload($request->file('photo'),'product');
        }
        
        $new_record = Product::create($requestData);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $item) {
                $path = FileController::imageUpload($item,'product');

                ProductImg::create([
                    'photo' => $path,
                    'product_id' => $new_record->id
                ]);
            }
        }
        return redirect('/admin/product/item')->with('message', '新增產品成功！');
    }

    public function edit($id)
    {
        $record = Product::with('photos')->find($id);
        $type = ProductType::get();

        return view($this->edit, compact('record', 'type'));
    }

    public function deleteImage(Request $request) {
        // 先透過 ID 找出要刪除的資料
        $old_record = ProductImg::find($request->id);

        // 判斷要刪除的檔案是否存在
        if (file_exists(public_path() . $old_record->photo)) {
            // 如果該檔案存在，就刪除該檔案
            File::delete(public_path() . $old_record->photo);
        }
        $old_record->delete();

        return 'success';
    }
}
