<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-11-16
 * Time: 17:59
 */

//\app\Http\Controllers\MyTestController.php
namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MyTestController extends Controller
{

    public function myTest(Request $request, Field $field) : JsonResponse
    {
        $fields = $field::all();
        dd($fields);
//        try {
//            $res = $this->validate($request,
//                [
//                    'postVar' => 'required|unique:posts|max:255',
//                ]);
//            return response()->json($res);
//        } catch (ValidationException $ve) {
//            return response()->json(['err' => $ve->getMessage()]);
//        }

        $res =
            [
                'get' => $request->get('get'),
                'myVar' => $request->myVar ?? 'all',
            ];
        return response()->json($res);
    }

}