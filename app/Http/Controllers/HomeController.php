<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Field;
use App\Models\Content;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function engine(Request $request)    
    {
        $customer = Customer::where('id',$request->customer_id)->first();
        $field = Field::where('id',$customer->field_id)->first();
        $content = $field->contents->toArray();

        switch ($customer->template_id) {
            case '1':
                #sliders
                $content[9]['text'] = $customer->name;
                $content[10]['text'] = $customer->description;
                return view('templates.1.index',['customer'=>$customer,'content'=>$content]);
                break;
            
            default:
                # code...
                break;
        }
    }
}
