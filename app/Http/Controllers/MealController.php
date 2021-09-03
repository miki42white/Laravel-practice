<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $items = Meal::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Meal::$rules);
        $form = $request->all();
        Meal::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Meal::$rules);
        Meal::where('id', $request->id)->update(['breakfast'=>$request->breakfast]);
        Meal::where('id', $request->id)->update(['lunch'=>$request->lunch]);
        Meal::where('id', $request->id)->update(['dinner'=>$request->dinner]);
        return redirect('/');
    }
    public function remove(Request $request)
    {
        Meal::where('id',$request->id)->delete();
        return redirect('/');
    }
}