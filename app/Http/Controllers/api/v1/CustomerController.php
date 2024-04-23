<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

use App\Models\v1\Customer;

use App\Http\Requests\V1\StoreCustomerRequest;
use App\Http\Requests\V1\UpdateCustomerRequest;
use App\Http\Resources\V1\CustomerResource;
use App\Http\Resources\V1\CustomerCollection;


class CustomerController extends Controller
{
    public function index()
    {
        return new CustomerCollection(Customer::all());
    }

    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->all());
        return response("Success Created!", 201);
    }

    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        return response("Success Updated!", 200);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response("Success Deleted!", 200);
    }
}
