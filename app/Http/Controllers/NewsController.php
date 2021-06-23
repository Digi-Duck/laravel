<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class NewsController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.news.index';
        $this->create = 'admin.news.create';
        $this->edit = 'admin.news.edit';
        $this->show = 'admin.news.show';
        $this->listPage = '/admin/news';
    }

    public function index()
    {
        $lists = News::get();

        return view($this->index, compact('lists'));
    }

    public function create()
    {
        $type = News::TYPE;
        
        return view($this->create, compact('type'));
    }

    public function store(Request $request) {
        // dd($request->all());
        if ($request->hasFile('img')) {
            $path = FileController::imageUpload($request->file('img'),'news');
        }

        News::create([
            'type' => $request->type,
            'publish_date' => date("Y-m-d"),
            'title' => $request->title,
            'img' => $path??'',
            'content' => $request->content
        ]);

        return redirect($this->listPage)->with('message', '新增最新消息成功！');
    }

    public function edit($id) {
        $record = News::find($id);
        $type = News::TYPE;

        return view($this->edit, compact('record', 'type'));
    }

    public function update(Request $request, $id)
    {
        $old_record = News::find($id);

        if ($request->hasFile('img')) {
            // 刪除舊圖片
            File::delete(public_path() . $old_record->img);

            $file = $request->file('img');
            // 如果上傳檔案的資料夾不存在
            if(!is_dir('upload/')) {
                // 創造一個上傳檔案的資料夾
                mkdir('upload/');
            }

            // 取得圖片副檔名
            $extenstion = $request->img->getClientOriginalExtension();
            // 亂數重新命名圖片
            $fliename = md5(uniqid(rand())) . '.' . $extenstion;
            // 設定圖片儲存路徑
            $path = '/upload/' . $fliename;

            // 上傳檔案並移動到對應位置
            move_uploaded_file($file, public_path() . $path);
            
            $old_record->img = $path;
        }

        $old_record->type = $request->type;
        $old_record->title = $request->title;
        $old_record->content = $request->content;
        $old_record->save();

        return redirect($this->listPage)->with('message', '編輯最新消息成功！');
    }
}
