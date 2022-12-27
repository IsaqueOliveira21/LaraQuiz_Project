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

    public function verificarRespostas(Request $request)
    {
        $respostas = [];

        if ($request->questao1 == 'correta') {
            $respostas[] = 'Questão 1: Respostas Correta';
        } else {
            $respostas[] = 'Questão 1: Respostas Incorreta';
        }
        if ($request->questao2 == 'correta') {
            $respostas[] = 'Questão 2: Respostas Correta';
        } else {
            $respostas[] = 'Questão 2: Respostas Incorreta';
        }
        if ($request->questao3 == 'correta') {
            $respostas[] = 'Questão 3: Respostas Correta';
        } else {
            $respostas[] = 'Questão 3: Respostas Incorreta';
        }

        $acertos = 0;
        foreach($respostas as $resposta) {
            if(str_contains($resposta, 'Correta')){
                $acertos++;
            }
        }
        $porcentagemAcerto = $acertos/count($respostas) * 100;
        return view('laraquiz.result', compact('respostas', 'porcentagemAcerto'));
    }
}
