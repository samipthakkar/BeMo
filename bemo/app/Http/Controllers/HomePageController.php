<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\HomePage;
class HomePageController extends Controller
{
    public function index()
    {
        $data = HomePage::first();
        //dd($data);
        return view('home_page.index', compact('data'));
    }
    public function update(Request $request, HomePage $data)
    {   
        $data->id =1;
        $data->logo = request('logo');
        $data->is_visible = request('indexing');
        if($data->is_visible == 'true'){
            $index_bool = 1;
        }
        else{
            $index_bool = 0;
        }
        $data->image = request('image');
        $data->image_text = request('image_text');
        $data->title = request('title');
        $data->header_1 = request('header_1');
        $data->para_1 = request('para_1');
        $data->header_2 = request('header_2');
        $data->para_2 = request('para_2');
        $data->meta_title = request('meta_title');
        $data->meta_desc = request('meta_desc');
        $data->google_analytics = request('google_analytics');
        $data->facebook_pixel = request('facebook_pixel');

       $data->where('id', $data->id)->update([
            'logo' => $data->logo,
            'is_visible'=> $index_bool,
            'image' => $data->image,
            'image_text' => $data->image_text,
            'title' => $data->title,
            'header_1' => $data->header_1,
            'para_1' => $data->para_1,
            'header_2' => $data->header_2,
            'para_2' => $data->para_2,
            'meta_title' => $data->meta_title,
            'meta_desc' => $data->meta_desc,
            'google_analytics' => $data->google_analytics,
            'facebook_pixel' => $data->facebook_pixel
            ]);
       //HomePage::table('home_page_table')->where('id', $data->id)->update();
        // $data = HomePage::table('home_page_table')
        //         ->where('id', $data->id)
        //        ->update(['title' =>$data->title]);
        //dd($data);
        return view('home_page.index',compact('data'));
        //return redirect('home_page', compact('data'));
    }

    // public function fetch()
    // {
    //     $data = HomePage::first();
    //     return json_encode($data);
    // }

    public  function main()
    {
        $data = HomePage::first();
        return view('main', compact('data'));
    }
    public  function contact()
    {
        $data = HomePage::first();
        return view('contact', compact('data'));
    }

    public function mail(Request $request)
    {
        $email_data=[
        $name = request('name'),
        $email = request('email') ,
        $msg = request('msg')
     ];
     
     Mail::to('test@test.com')->send(new ContactFormMail($email_data));
     $data = HomePage::first();
        return view('contact', compact('data'));
    }
}
