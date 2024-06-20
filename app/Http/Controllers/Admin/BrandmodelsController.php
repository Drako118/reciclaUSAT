<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Brandmodel;
use Illuminate\Http\Request;

class BrandmodelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Brandmodel::select(
            'brandmodels.id as id',
            'brandmodels.name as name',
            'brands.name as mname',
            'brandmodels.description as description'
        )->join('brands', 'brandmodels.brand_id', '=', 'brands.id')->get();
        return view('admin.models.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::pluck('name', 'id');

        return view('admin.models.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brandmodel::create($request->all());
        return redirect()->route('admin.models.index');
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
        //
    }

    public function modelsbybrand($id)
    {
        $models = Brandmodel::where('brand_id', $id)->get();
        return $models;
    }
}
