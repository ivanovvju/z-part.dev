<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\HistoryBuyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    public function start()
    {
        return view('buyer.start');
    }

    /**
     * Загрузить отчет.
     */
    public function index()
    {
        $nameSection = "Загрузить отчет";
        $user = User::where('id', Auth::user()->id)->first();
        return view('buyer.index', compact('nameSection', 'user'));
    }

    /**
     * История запросов.
     */
    public function historyRequest()
    {
        $nameSection = "История запросов";
        $history = HistoryBuyer::where('buyer_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(5)->get();
        $user = User::where('id', Auth::user()->id)->first();
        return view('buyer.history', compact('history','nameSection', 'user'));
    }

    /**
     * Личный кабинет.
     */
    public function cabinet()
    {
        $nameSection = "Личный кабинет";
        $user = User::where('id', Auth::user()->id)->first();

        return view('buyer.cabinet', compact('nameSection', 'user'));
    }

    /**
     * Образец запроса.
     */
    public function sampleRequest()
    {
        $nameSection = "Образец запроса";
        $user = User::where('id', Auth::user()->id)->first();

        return view('buyer.sample-request-list', compact('nameSection', 'user'));
    }

    /**
     * Подбор зап. частей.
     */
    public function selectionParts()
    {
        $nameSection = "Подбор зап. частей";
        $user = User::where('id', Auth::user()->id)->first();

        return view('buyer.page-dev', compact('nameSection', 'user'));
    }

    /**
     * Забрать отчет.
     */
    public function downloadReport()
    {
        $nameSection = "Забрать отчет";
        $user = User::where('id', Auth::user()->id)->first();

        return view('buyer.page-dev', compact('nameSection', 'user'));
    }
}
