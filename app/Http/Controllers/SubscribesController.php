<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribersRequest;

class SubscribesController extends Controller
{
    /**
     * 
     */
    public function subscribe(SubscribersRequest $request)
    {
        try {
            $request->save();
            return json_encode([
                'success' => 'Thanks for your subscription',
                'status' => 200
            ], JSON_FORCE_OBJECT);
        } catch (\Throwable $th) {
            return json_encode([
                'error' => $th->getMessage(),
                'status' => 422
            ], JSON_FORCE_OBJECT);
        }
    }
}
