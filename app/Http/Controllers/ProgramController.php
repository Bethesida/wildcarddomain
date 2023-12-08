<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(Request $request, $domain)
    {
        $domain = Program::where('domain_name', $domain)->firstOrFail();
        return view('program', ['domain' => $domain]);
    }

    public function createProgram(Request $request)
    {

        $validatedData = $request->validate([
            'domain_name' => 'required|unique:programs|max:255',
            'domain_description' => 'required|max:255',
        ]);


        $domain = new Program;
        $domain->domain_name = $validatedData['domain_name'];
        $domain->domain_description = $validatedData['domain_description'];

        $domain->save();

        return redirect()->route('program', ['domain' => $domain->domain_name]);
    }

    public function createForm()
    {
        return view('create');
    }



}
