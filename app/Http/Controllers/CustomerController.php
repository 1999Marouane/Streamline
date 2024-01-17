<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        $test = Customer::all();
        return view('data_form_handler',compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $Customer = new Customer();



            if($request->hasFile('image')){
                $file = $request->file('image');
                $extension    = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension ;
                $file->move('upload/empolyee/',$filename);


                $Customer->image = $filename;

            }else{
                return $request;
                $Customer->image = '';
            }

            $Customer->first= $request->first;
            $Customer->last = $request->last;
            $Customer->email= $request->email;

            $Customer->save();
            return view('/create_data')->with('Customer',$Customer);

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);

        // Delete the image file from storage
        if (file_exists(public_path('/upload/empolyee/' . $customer->image))) {
            unlink(public_path('/upload/empolyee/' . $customer->image));
        }


        $customer->delete();

        return redirect()->route('crud')->with('success', 'Photo deleted successfully.');
    }
}
