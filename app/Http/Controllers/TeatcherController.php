<?php

namespace App\Http\Controllers;

use App\Models\Teatcher;
use Illuminate\Http\Request;

class TeatcherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Teatcher::all();
        return view('teatchers.index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teatchers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teatcher::create(
            [
                'teatcher_name' => $request->teatcher_name,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'salary' => $request->salary,
            ]
        );
        return redirect()->route('teatcher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $query = Teatcher::all();
        // return view('teatchers.show', compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teatcher = Teatcher::findorFail($id);
        return
            view('teatchers.edit', compact('teatcher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $TeatcherId = Teatcher::findorFail($id);
        $TeatcherId->update([
            'teatcher_name' => $request->teatcher_name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'salary' => $request->salary,
        ]);
        return redirect()->route('teatcher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Teatcher::where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
