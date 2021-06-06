<?php

namespace App\Http\Controllers;

use App\Models\Jaula;
use Illuminate\Http\Request;

/**
 * Class JaulaController
 * @package App\Http\Controllers
 */
class JaulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jaulas = Jaula::paginate();

        return view('jaula.index', compact('jaulas'))
            ->with('i', (request()->input('page', 1) - 1) * $jaulas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jaula = new Jaula();
        return view('jaula.create', compact('jaula'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Jaula::$rules);

        $jaula = Jaula::create($request->all());

        return redirect()->route('jaulas.index')
            ->with('success', 'Jaula created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jaula = Jaula::find($id);

        return view('jaula.show', compact('jaula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jaula = Jaula::find($id);

        return view('jaula.edit', compact('jaula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Jaula $jaula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jaula $jaula)
    {
        request()->validate(Jaula::$rules);

        $jaula->update($request->all());

        return redirect()->route('jaulas.index')
            ->with('success', 'Jaula updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jaula = Jaula::find($id)->delete();

        return redirect()->route('jaulas.index')
            ->with('success', 'Jaula deleted successfully');
    }
}
