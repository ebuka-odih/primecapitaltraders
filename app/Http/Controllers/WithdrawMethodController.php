<?php

namespace App\Http\Controllers;

use App\WithdrawMethod;
use Illuminate\Http\Request;

class WithdrawMethodController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $this->getBTCData($request);
        $data['user_id'] = Auth::id();
        WithdrawMethod::create($data);
        return redirect()->back();
    }

    protected function getBTCData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'value' => 'nullable',
        ];
        return $request->validate($rules);
    }
    public function show(WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function edit(WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function update(Request $request, WithdrawMethod $withdrawMethod)
    {
        //
    }


    public function destroy(WithdrawMethod $withdrawMethod)
    {
        //
    }
}
