<?php

namespace App\Http\Controllers;
use App\Models\Costumer;
use App\Http\Requests\CostumerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
class CostumerController extends Controller
{
    public function store(CostumerRequest $request){
        $input = $request->validated();
        $password = Str::random(6);
        $user = User::create(["role"=>1, "phone"=>$input["phone"], "name"=>$input["name"], "password"=> bcrypt($password)]);
        $input["user_id"] = $user["id"];
        $input["password"] = $password;
        $costumer = Costumer::create($input);
        return $costumer;
        
    }
    public function index()
    {
        $costumers = Costumer::all();
        return $costumers;
    }
    public function show($id)
    {
        $costumers = Costumer::findOrFail($id);
        return $costumers;
    }
    public function update(Request $request,$id)
    {
        $costumer = Costumer::findOrFail($id);
        $costumer->update($request->all());
        return $costumer;
    }
    public function destroy($id)
    {
        $costumer = Costumer::findOrFail($id)->delete();
    }
}
