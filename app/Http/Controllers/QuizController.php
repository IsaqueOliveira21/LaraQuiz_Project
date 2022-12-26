<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        return view('laraquiz.main');
    }

    public function verificarRespostas(Request $request) {
        $respostas = [];

        switch ($request) {
            case $request->questao1 == 'correta':
                $respostas[] = 'ACERTOU 1';
            case $request->questao2 == 'correta':
                $respostas[] = 'ACERTOU 2';
        }

        dd($respostas);
    }
}
