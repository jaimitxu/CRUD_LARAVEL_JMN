<?php

namespace App\Http\Controllers;

use App\Models\Cuidadore;
use Illuminate\Http\Request;

/**
 * Class CuidadoreController
 * @package App\Http\Controllers
 */
class CuidadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuidadores = Cuidadore::paginate();

        return view('cuidadore.index', compact('cuidadores'))
            ->with('i', (request()->input('page', 1) - 1) * $cuidadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuidadore = new Cuidadore();
        return view('cuidadore.create', compact('cuidadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cuidadore::$rules);

        $cuidadore = Cuidadore::create($request->all());

        return redirect()->route('cuidadores.index')
            ->with('success', 'Cuidadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuidadore = Cuidadore::find($id);

        return view('cuidadore.show', compact('cuidadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuidadore = Cuidadore::find($id);

        return view('cuidadore.edit', compact('cuidadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cuidadore $cuidadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuidadore $cuidadore)
    {
        request()->validate(Cuidadore::$rules);

        $cuidadore->update($request->all());

        return redirect()->route('cuidadores.index')
            ->with('success', 'Cuidadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cuidadore = Cuidadore::find($id)->delete();

        return redirect()->route('cuidadores.index')
            ->with('success', 'Cuidadore deleted successfully');
    }
}
