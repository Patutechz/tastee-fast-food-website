<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerFormRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->SimplePaginate(10);
        //$customers = customer::all();
        //return $customers;
        return view('admin.customers.index' , compact('customers'));
        //return view('admin.customers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerFormRequest $request)
    {
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('images',$filename,'public');
            Customer::create([
                'avatar' => $filename,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,            
                ]);
        }else{
            Customer::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,                
                ]);
        }
        return redirect()->route('admin.customers.create')->with('message','customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerFormRequest $request, Customer $customer)
    {
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('images',$filename,'public');
            $customer->update([
                'avatar' => $filename,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,                
                ]);
        }else{
            $customer->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,               
                ]);
        }
        return redirect()->route('admin.customers.index')->with('message','customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('admin.customers.index')->with('message','customer deleted successfully');
    }
}
