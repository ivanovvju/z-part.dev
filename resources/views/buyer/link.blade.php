@extends('layouts.layout')

@section('menu-account-left')
    @include('buyer.left-navbar')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 container-info-element">
                <div class="container">
                    <div class="row mt-2">
                        <div class="container">
                            <div class="col">
                                <div class="link" style="display: block;margin: 20px 0 40px;">
                                    @if($link)
                                        <a href="{{ route('download', ['file' => $link]) }}">Скачать файл Excel</a>
                                    @else
                                        <span>Вы не загружали файлы</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
