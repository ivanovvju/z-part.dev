<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    /**
     * Загрузить прайс.
     */
    public function index()
    {
        $nameSection = "Загрузить прайс";
        $user = User::where('id', Auth::user()->id)->first();
        return view('provider.index', compact('nameSection', 'user'));
    }

    /**
     * История запросов.
     */
    public function historyRequest()
    {
        $nameSection = "История запросов";
        $user = User::where('id', Auth::user()->id)->first();
        $history = History::where('provider_id', Auth::user()->id)->orderBy('created_at', 'desc')->limit(5)->get();
        return view('provider.history', compact('history', 'nameSection', 'user'));
    }

    /**
     * Личный кабинет.
     */
    public function cabinet()
    {
        $nameSection = "Личный кабинет";
        $user = User::where('id', Auth::user()->id)->first();

        return view('provider.cabinet', compact('nameSection', 'user'));
    }

    /**
     * Образец прайса.
     */
    public function samplePrice()
    {
        $nameSection = "Образец прайса";
        $user = User::where('id', Auth::user()->id)->first();

        return view('provider.sample-price-list', compact('nameSection', 'user'));
    }

    /**
     * Подбор зап. частей.
     */
    public function selectionParts()
    {
        $nameSection = "Подбор зап. частей";
        $user = User::where('id', Auth::user()->id)->first();

        return view('provider.page-dev', compact('nameSection', 'user'));
    }

    /**
     * Забрать отчет.
     */
    public function downloadReport()
    {
        $nameSection = "Забрать отчет";
        $user = User::where('id', Auth::user()->id)->first();

        return view('provider.page-dev', compact('nameSection', 'user'));
    }
}
