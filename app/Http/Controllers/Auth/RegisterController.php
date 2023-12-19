<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function generateNextCustomerID()
    {
        // Get the latest appointment ID
        $latestCustomer = Customer::latest('customer_id')->first();

        // Extract the numeric part from the ID and increment it
        $numericPart = intval(substr($latestCustomer->customer_id, 1)) + 1;

        // Format the next ID with the desired pattern (e.g., A001)
        $nextCustomerID = 'C' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        return $nextCustomerID;
    }
    public function regis(Request $request)
    {
        // $selectedPaymentId = $request->input('paymentId');
        // $employee = $request->session()->get('employee');
        // $service = $request->session()->get('service');
        // $date = $request->session()->get('date');
        // $credentials = $request->only('customer_name', 'email', 'password', 'çustomer_phone');
        Customer::create([
            'customer_id' => $this->generateNextCustomerID,
            'customer_role' => "1",
            'customer_address' => $request->input('customerAddress'),
            'customer_img' => "path to img",
            'customer_name' => $request->input('customerName'),
            'email' => $request->input('customerEmail'),
            'password' => $request->input('customerPassword'),
            'çustomer_phone' => $request->input('customerPhone'),
        ]);
        //$errors = ["Invalid Credentials"];
        // if ($customer && ($credentials['password'] == $customer->password)) {
        //     Auth::login($customer);
        //     return redirect()->route('showHome');
        // } else {
        //     return view('login')->with('errors', $credentials);
        // }

        // if (Auth::attempt($credentials)) {
        //     // Authentication passed
        //     return redirect()->intended('/dashboard');
        // }
        //return redirect()->route('login')->with('error', 'Invalid login credentials');
    }

    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/');
    }
}
