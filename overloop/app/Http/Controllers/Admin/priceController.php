<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\price;
use Illuminate\Http\Request;

class priceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $price = price::where('price', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $price = price::latest()->paginate($perPage);
        }

        return view('admin.price.index', [
            'title' => 'Product'
        ],compact('price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.price.create',[
            'title' => 'Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'currency' => 'required|max:3',
        ]);
        
        price::create($requestData);

        return redirect('admin/price')->with('flash_message', 'price added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $price = price::findOrFail($id);

        return view('admin.price.show',[
            'title' => 'Product'
        ],compact('price'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $price = price::findOrFail($id);

        return view('admin.price.edit',[
            'title' => 'Product'
        ] ,compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'currency' => 'required|max:3',
        ]);
        
        $price = price::findOrFail($id);
        $price->update($requestData);

        return redirect('admin/price')->with('flash_message', 'price updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        price::destroy($id);

        return redirect('admin/price')->with('flash_message', 'price deleted!');
    }
}
