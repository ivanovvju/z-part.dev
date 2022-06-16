@extends('layouts.layout')

@section('menu-account-left')
    @include('buyer.left-navbar')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 container-info-element">
                <div class="container">
                    <div class="row title-info-element">
                        <div class="col-12">
                            <p class="h5">Информация о клиенте</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Наименование:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->name_org }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Полное наименование:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->full_name_org }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Адрес:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->address_org }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>ОГРН:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->ogrn }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 offset-md-1 container-help-user">
                <div class="container">
                    <div class="row">
                        <div class="col-12 title-help-user">
                            <p>Обнаружили ошибку в личных данных?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 justify-content-center button-help-user">
                            <i class="bi bi-envelope"></i>
                            <p>Связаться с менеджером</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 container-info-element">
                <div class="container">
                    <div class="row title-info-element">
                        <div class="col-12">
                            <p class="h5">Контактная информация</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Ответственное лицо:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->fio_general_manager }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Сайт:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->site }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>Телефон:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->phone }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 info-name-element-account">
                                    <p>E-mail:</p>
                                </div>
                                <div class="col-6 info-value-element-account text-muted">
                                    <p>{{ $user->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
