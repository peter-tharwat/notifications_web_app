<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Twilio\Exceptions\RestException::class,
    ];
 
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];
 
    public function report(Exception $exception)
    {
        
        parent::report($exception);
    }
 
    public function render($request, Exception $exception)
    {   
        if ($exception instanceof \Twilio\Exceptions\RestException) {
            /*return redirect('/deal')->with('data', ['alert'=>'تم حذف المعاملة بنجاح','alert-type'=>'success']);
                return response()->json(
                    ['status' => $exception->getStatusCode()]
                    , 201);*/
            }
        return parent::render($request, $exception);
    }
}
