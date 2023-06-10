<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SumService;
use App\Services\SubtractService;
use App\Services\MultiplyService;
use App\Services\PowerService;
use App\Services\ModuleService;
use App\Services\SinService;
use App\Services\CosineService;

class CalculatorController extends Controller
{
    protected $sumService;
    protected $subtractService;
    protected $multiplyService;
    protected $powerService;
    protected $moduleService;
    protected $sinService;
    protected $cosineService;

    public function __construct(
        SumService $sumService,
        SubtractService $subtractService,
        MultiplyService $multiplyService,
        PowerService $powerService,
        ModuleService $moduleService,
        SinService $sinService,
        CosineService $cosineService
    ) {
        $this->sumService = $sumService;
        $this->subtractService = $subtractService;
        $this->multiplyService = $multiplyService;
        $this->powerService = $powerService;
        $this->moduleService = $moduleService;
        $this->sinService = $sinService;
        $this->cosineService = $cosineService;
    }

    public function sum(Request $request)
    {
        $result = $this->sumService->calculate($request->input('x'), $request->input('y'));
        return response()->json(['result' => $result]);
    }

    public function subtract(Request $request)
    {
        $result = $this->subtractService->calculate($request->input('x'), $request->input('y'));
        return response()->json(['result' => $result]);
    }

    public function multiply(Request $request)
    {
        $result = $this->multiplyService->calculate($request->input('x'), $request->input('y'));
        return response()->json(['result' => $result]);
    }

    public function power(Request $request)
    {
        $result = $this->powerService->calculate($request->input('x'), $request->input('y'));
        return response()->json(['result' => $result]);
    }

    public function module(Request $request)
    {
        $result = $this->moduleService->calculate($request->input('x'), $request->input('y'));
        return response()->json(['result' => $result]);
    }

    public function sin(Request $request)
    {
        $result = $this->sinService->calculate($request->input('x'));
        return response()->json(['result' => $result]);
    }

    public function cosine(Request $request)
    {
        $result = $this->cosineService->calculate($request->input('x'));
        return response()->json(['result' => $result]);
    }
}
