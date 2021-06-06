<?php

namespace App\Http\Controllers;

use App\Models\JaulasCuidadore;
use Illuminate\Http\Request;

/**
 * Class JaulasCuidadoreController
 * @package App\Http\Controllers
 */
class JaulasCuidadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jaulasCuidadores = JaulasCuidadore::paginate();

        return view('jaulas-cuidadore.index', compact('jaulasCuidadores'))
            ->with('i', (request()->input('page', 1) - 1) * $jaulasCuidadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jaulasCuidadore = new JaulasCuidadore();
        return view('jaulas-cuidadore.create', compact('jaulasCuidadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(JaulasCuidadore::$rules);

        $jaulasCuidadore = JaulasCuidadore::create($request->all());

        return redirect()->route('jaulas-cuidadores.index')
            ->with('success', 'JaulasCuidadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jaulasCuidadore = JaulasCuidadore::find($id);

        return view('jaulas-cuidadore.show', compact('jaulasCuidadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jaulasCuidadore = JaulasCuidadore::find($id);

        return view('jaulas-cuidadore.edit', compact('jaulasCuidadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  JaulasCuidadore $jaulasCuidadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JaulasCuidadore $jaulasCuidadore)
    {
        request()->validate(JaulasCuidadore::$rules);

        $jaulasCuidadore->update($request->all());

        return redirect()->route('jaulas-cuidadores.index')
            ->with('success', 'JaulasCuidadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jaulasCuidadore = JaulasCuidadore::find($id)->delete();

        return redirect()->route('jaulas-cuidadores.index')
            ->with('success', 'JaulasCuidadore deleted successfully');
    }
}
