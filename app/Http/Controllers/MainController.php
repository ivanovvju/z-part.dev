<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\HistoryBuyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
//        if (Auth::check() && Auth::user()->role == 1) {
//            return redirect()->route('buyer.index');
//        } else if (Auth::check() && Auth::user()->role == 2) {
//            return redirect()->route('provider.index');
//        }
        return view('welcome');
    }

    public function link()
    {
        $nameSection = "Забрать отчет";
        $history = HistoryBuyer::where('buyer_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();
        $user = User::where('id', Auth::user()->id)->first();
        $link = $history->title ?? null;

        if(is_file(str_replace('\\', '/', Storage::path($link . '.xlsx')))) {
            unlink(str_replace('\\', '/', Storage::path($link . '.xlsx')));
        }

        return view('buyer.link', compact(['link', 'nameSection', 'user']));
    }

    public function getDownload($file)
    {
        $path = str_replace('\\', '/', public_path($file . '.zip')); // ���� �� �����

        $headers = array(
            'Content-Type: application/zip',
        );

        return Response::download($path, $file . '.zip', $headers);
    }
}
