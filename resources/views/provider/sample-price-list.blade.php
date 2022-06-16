@extends('layouts.layout')

@section('menu-account-left')
    @include('provider.left-navbar')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 container-info-element">
                <div class="container">
                    <div class="row title-info-element">
                        <div class="col-12">
                            <p class="h5">Шаблоны</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Для загрузки прайса-листа необходимо использовать только шаблоны. Шаблоны доступны для скачивания по ссылке ниже</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Шаблон прайс-листа:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <a href="https://docs.google.com/spreadsheets/d/1ZoWs9ym31TKnuBqsXPCE1tBnePpEq7eI/edit?usp=sharing&ouid=104205255530367367752&rtpof=true&sd=true" target="_blank">Скачать с облака</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Пример прайс-листа:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <a href="https://docs.google.com/spreadsheets/d/1ynQZHSNG3o5kx0r3-UDHVWUhQvnH0xjy/edit?usp=sharing&ouid=104205255530367367752&rtpof=true&sd=true" target="_blank">Скачать с облака</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
