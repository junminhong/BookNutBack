<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Google\Cloud\Firestore\FirestoreClient;
class FireBaseController extends Controller
{
    //
    public function index(){
        $factory = (new Factory)->withServiceAccount(__DIR__.'/booknut.json');
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $userRef =  $database->collection('users');
        $snapshot = $userRef->document('5vS7z3eLlCdAAunadPkf')->snapshot();
        if($snapshot->exists()) {
            $user_password = $snapshot->data()['password'];
            $user_account = $snapshot->data()['account'];
            return response()->json(['account' =>  $user_account, 'password' => $user_password]);
        }
    }
    public function getcrsf(){
        return csrf_token();
    }
    public function show(){
        $factory = (new Factory)->withServiceAccount(__DIR__.'/booknut.json');
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $database->collection('users')
        ->document('test01')
        ->set(['account' => 'Los Angeles', 'password' => 'CA']);
        print_r($database);
        return response()->json(['status' => 'create ok']);
    }

    public function store(){
        $product = new Users();
        $product->name = "Latte";
        $product->email = "test";
        $product->password = "test";
        $product->save();
    }

    public function login(){

    }
}
