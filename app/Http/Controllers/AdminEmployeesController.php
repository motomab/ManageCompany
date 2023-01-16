<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class AdminEmployeesController extends Controller
{
    public function index()
    {
        return view('admin.employee.index', [
            'emp' => employee::latest()->paginate(5),
        ]);
    }

    public function create()
    {
        return view('admin.employee.create');
    }

    public function store(Request $request)
    {
        $valiDateEmployeeData = $request->validate(employee::rules()) ;

        employee::create($valiDateEmployeeData);

        return redirect('/adminEmployee');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $e = employee::find($id);
        return view('admin.employee.edit',compact('e'));
    }

    public function update(Request $request, $id)
    {
        ddd($request->all());
    }

    public function destroy($id)
    {
    }
}
