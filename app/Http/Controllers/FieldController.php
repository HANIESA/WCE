<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Template;
use Illuminate\Http\Request;

use App\Http\Requests\StoreFieldRequest;
use App\Http\Requests\UpdateFieldRequest;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::paginate(15);
        return view('admin.fields',['fields'=>$fields]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $templates = Template::all();
        if ($request->get('template')) {
            $field = Field::where('default_template_id',$request->get('template'))->first();
            return view('admin.fieldsCreate',['field'=>$field,'templates'=>$templates]);

        }   

        return view('admin.fieldsCreate',['templates'=>$templates]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFieldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $field = new Field;
        $field->name = $request->name;
        $field->language = $request->language;
        $field->rtl = $request->rtl;
        $field->template_id = $request->template_id;
        $field->default_template_id = $request->default_template_id;
        $field->save();
        return redirect()->route('fields.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Field $field)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldRequest  $request
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldRequest $request, Field $field)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy(Field $field)
    {
        //
    }
}
