<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function index()
    {   
        $lists = ContactUs::get();
        return view('admin.contact_us.index',compact('lists'));
    }

    public function store(Request $request)
    {
        ContactUs::create($request->all());
        return redirect('/contact_us')->with('message','發送成功，請等候我們的聯繫。');
    }
    public function edit($id)
    {
        $contactUs = ContactUs::find($id);
        return view('admin.contact_us.edit',compact('contactUs'));
    }
    public function delete($id)
    {
        $contactUs = ContactUs::find($id);
        $contactUs->delete();
        return redirect('/admin/contact_us')->with('message','刪除成功');
    }
}
