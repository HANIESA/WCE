<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Field;
use Illuminate\Http\Request;


use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {

        if ($request->get('field')) {
            $field = Field::where('id',$request->get('field'))->first();
            $defaultField = Field::where('default_template_id',1)->where('template_id',$field->template_id)->first();
            $contents = Content::where('field_id',$defaultField->id)->get();
            return view('admin.contentsCreate',['contents'=>$contents,'field'=>$field]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i=0; $i < sizeOf($request->text); $i++) { 
            $content = new Content;
            $content->text = $request->text[$i];
            $content->image = $request->image[$i];
            $content->isExist = $request->isExist[$i];
            $content->field_id = $request->field_id[$i];
            // $content->adminDescription = $request->adminDescription[$i];
            $content->save();
        }
        return 'done';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $contents= Content::where('field_id',$request->get('field'))->get();
        return view('admin.contentsEdit',['contents'=>$contents,'field_id'=>$request->get('field')]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContentRequest  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->content_id);

        for ($i=0; $i < sizeOf($request->text); $i++) { 
            $content = Content::where('id',$request->content_id[$i])->first();
            $content->text = $request->text[$i];
            $content->image = $request->image[$i];
            $content->isExist = $request->isExist[$i];
            $content->field_id = $request->field_id[$i];
            // $content->adminDescription = $request->adminDescription[$i];
            $content->update();

        }
        return 'done';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
