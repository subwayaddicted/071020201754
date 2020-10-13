<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Show addresses page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show()
    {
        $addresses = Address::all()->sortBy('name');

        return view('layout', ['addresses' => $addresses]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validated_data = $this->validate($request, [
            'name' => 'required|string',
            'city' => 'required|string',
            'area' => 'required|string',
            'street' => 'nullable|string',
            'house' => 'nullable|string',
            'additional_info' => 'nullable|string',
            ],[
                'name.required' => 'Address name is required',
                'city.required' => 'City name is required',
                'area.required' => 'Area name is required',
        ]);

        Address::create($validated_data);

        return back()->with('success', 'Address added successfully.');
    }
}
