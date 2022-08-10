<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Response;

class ResponseRestApi {

    private $data;

    const STATUS_OK = 200;
    const STATUS_CREATED = 201;
    const STATUS_BAD = 400;
    const STATUS_UNAUTHORIZED = 401;
    const STATUS_FORBIDDEN = 403;
    const STATUS_NOT_FOUND = 404;
    const STATUS_ERROR = 500;

    public function __construct($data) {
        $this->data = $data;
    }

    public function ok($message = "Request was successfully processed and returned!")
    {
        return Response::json([
            'status' => self::STATUS_OK,
            'message' => $message,
            'result' => $this->data
        ], self::STATUS_OK);
    }

    public function created($message = "Request was successfully processed and returned!")
    {
        return Response::json([
            'status' => self::STATUS_CREATED,
            'message' => $message,
            'result' => $this->data
        ], self::STATUS_CREATED);
    }

    public function bad($message = "Missing or invalid parameter(s)!")
    {
        return Response::json([
            'status' => self::STATUS_BAD,
            'message' => $message,
            'result' => $this->data
        ], self::STATUS_BAD);
    }

    public function unauthorized($message = "User is not authorized to access this resource with an explicit deny!")
    {
        return Response::json([
            'status' => self::STATUS_UNAUTHORIZED,
            'message' => $message,
            'result' => $this->data
        ], self::STATUS_UNAUTHORIZED);
    }

    public function forbidden($message = "Forbidden!")
    {
        return Response::json([
            'status' => self::STATUS_FORBIDDEN,
            'message' => $message,
            'result' => $this->data
        ], self::STATUS_FORBIDDEN);
    }

    public function notFound($message = "Ops... Not Found!")
    {
        return Response::json([
            'status' => self::STATUS_NOT_FOUND,
            'message' => $message,
            'result' => $this->data
        ], self::STATUS_NOT_FOUND);
    }

    public function error($message = "Ops... Internal server error, please contact support!")
    {
        return Response::json([
            'status' => self::STATUS_ERROR,
            'message' => $message,
            'result' => $this->data
        ], self::STATUS_ERROR);
    }

    public function custom($status_code, $message)
    {
        return Response::json([
            'status' => $status_code,
            'message' => $message,
            'result' => $this->data
        ], $status_code);
    }

}