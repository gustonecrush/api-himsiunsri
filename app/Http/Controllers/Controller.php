<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendResponse($result, $message) 
    {
        $response = [
            "code" => 200,
            "success" => true,
            "message" => $message,
            "data" => $result,
        ];

        return response()->json($response, 200);
    }

    protected function sendError($error, $errorMessages = [], $code = 404) 
    {
        $response = [
            "code" => $code,
            "success" => false,
            "message" => $error,
        ];

        if (!empty($errorMessages)) {
            $response["error"] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    protected function slug($text) 
    {
        $text = explode(" ", strtolower($text));
        $slug = "";

        for ($i = 0; $i < sizeof($text); $i++) {
            if ($i == sizeof($text)-1) {
                $slug .= $text[$i];
            } else {
                $slug .= $text[$i] . "-";
            }
        }

        return $slug;
    }

}
