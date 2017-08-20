<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;

class ChildrenController extends Controller
{
    public function index()
    {
        $children = Child::latest()->get();

        return view('children.index', compact('children'));
    }

    public function show(Child $child)
    {
        return view('children.show', compact('child'));
    }
}
