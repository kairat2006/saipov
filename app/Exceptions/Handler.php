<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr;
use Throwable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     if($request->expectsJson())
    //     {
    //         return response()->json(['error' => 'Unauthenticated.'], 401);
    //     }
    //     $guard = Arr::get($exception->guards(), 0);

    //     switch($guard)
    //     {
    //         case 'admin':
    //         $login = 'admin';
    //         break;
    //     default: 
    //         $login = 'login';
    //     break;
    //     }
    //     return redirect()->guest(route('$login'));
    // }








    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
