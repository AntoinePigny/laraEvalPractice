<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Gender;
use App\Color;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function insertOne(Request $request)
    {
        $cat = new Cat;
        $cat->name = $request->name;
        $cat->size = $request->size;
        $cat->weight = $request->weight;
        $cat->age = $request->age;
        $cat->gender_id = $request->gender;
        $cat->save();
        $cat->colors()->attach($request->color);
        return redirect('/');
    }
    public function deleteOne(Request $request, $id)
    {
        $cat = Cat::find($id);
        $cat->colors()->detach();
        $cat->delete();
        return redirect('/');
    }
    public function updateOne(Request $request, $id)
    {
        $cat = Cat::find($id);
        $gendersAll = Gender::all();
        $genders = [];
        foreach ($gendersAll as $value) {
            $genders[$value->id] = $value->gender;
        }
        $colorsAll = Color::all();
        $colors = [];
        foreach ($colorsAll as $value) {
            $colors[$value->id] = $value->colors;
        }
        return view('update', ['genders' => $genders, 'colors' => $colors, 'cat' => $cat]);
    }

    public function updateOneAction(Request $request)
    {
        $cat = Cat::find($request->id);
        $cat->name = $request->name;
        $cat->size = $request->size;
        $cat->weight = $request->weight;
        $cat->age = $request->age;
        $cat->gender_id = $request->gender;
        $cat->save();
        $cat->colors()->detach();
        $cat->colors()->attach($request->colors);
        return redirect('/');
    }
}
