<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specification;
use App\Http\Requests\specificationRequest;

class AdminSpecificationController extends Controller
{
    public function listShow(){
        $specifications=Specification::paginate(6);

        return view('Admin/Specification/specificationList',['specifications'=>$specifications]);
    }

    public function show($specification_id){

        $specification=Specification::find($specification_id);

        return view('Admin/Specification/specificationShow',['specification'=>$specification]);
    }

    public function create(){

        return view('Admin/Specification/specificationCreate');

    }

    public function store(specificationRequest $request){

        $specification=new Specification ;
        $specification->fill($request->all());
        $specification->save();

        return redirect()->route('adminPage');
    }

    public function edit($specification_id){

        $specification=specification::find($specification_id);

        return view('Admin/Specification/specificationEdit',['specification'=>$specification]);
    }

    public function update(specificationRequest $request,$specification_id){

        $specification=Specification::find($specification_id);
        $specification->update($request->all());

        return redirect()->route('specification.list');
    }

    public function delete($specification_id){

        $specification=Specification::find($specification_id);
        $specification->delete();

        return redirect()->route('specification.list');
    }
}
