<?php

namespace App\Http\Controllers\Frontend;

use Throwable;
use Illuminate\Http\Request;
use App\Models\Frontend\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function sent_message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:190',
            'email' => 'required|email|max:190',
            'contact' => 'nullable|max:190',
            'subject' => 'required|max:1000',
            'message' => 'required|max:10000',
        ]);

        if( $validator->fails() ){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return response()->json(['success'=> 'success'], 201);

        try {


        } catch (Throwable $th) {
            return response()->json(['error'=> $th], 500);
        }
    }
}
