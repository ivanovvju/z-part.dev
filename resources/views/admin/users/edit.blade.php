@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование пользователя</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Редактирование - {{ $user->name }}</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('users.update', ['user' => $user->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name-org">Наименование организации</label>
                                    <input type="text" name="name-org"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Наименование организации" value="{{ $user->name_org }}">
                                </div>
                                <div class="form-group">
                                    <label for="full-name-org">Полное наименование организации</label>
                                    <input type="text" name="full-name-org"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Полное наименование организации" value="{{ $user->full_name_org }}">
                                </div>
                                <div class="form-group">
                                    <label for="address-org">Адрес организации (юриический, фактический)</label>
                                    <input type="text" name="address-org"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Адрес организации" value="{{ $user->address_org }}">
                                </div>
                                <div class="form-group">
                                    <label for="inn">ИНН</label>
                                    <input type="number" name="inn"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="ИНН" value="{{ $user->inn }}">
                                </div>
                                <div class="form-group">
                                    <label for="kpp">КПП</label>
                                    <input type="number" name="kpp"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="КПП" value="{{ $user->kpp }}">
                                </div>
                                <div class="form-group">
                                    <label for="ogrn">ОГРН</label>
                                    <input type="number" name="ogrn"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="ОГРН" value="{{ $user->ogrn }}">
                                </div>
                                <div class="form-group">
                                    <label for="name-bank">Наименование банка</label>
                                    <input type="text" name="name-bank"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Наименование банка" value="{{ $user->name_bank }}">
                                </div>
                                <div class="form-group">
                                    <label for="payment-account">Р/счет</label>
                                    <input type="number" name="payment-account"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Р/счет" value="{{ $user->payment_account }}">
                                </div>
                                <div class="form-group">
                                    <label for="corresp-account">К/счет</label>
                                    <input type="number" name="corresp-account"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="К/счет" value="{{ $user->corresp_account }}">
                                </div>
                                <div class="form-group">
                                    <label for="bik">БИК</label>
                                    <input type="number" name="bik"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="БИК" value="{{ $user->bik }}">
                                </div>
                                <div class="form-group">
                                    <label for="fio-general-manager">ФИО генерального директора</label>
                                    <input type="text" name="fio-general-manager"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="ФИО генерального директора" value="{{ $user->fio_general_manager }}">
                                </div>
                                <div class="form-group">
                                    <label for="site">Сайт</label>
                                    <input type="text" name="site"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Сайт" value="{{ $user->site }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Телефон</label>
                                    <input type="number" name="phone"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Телефон" value="{{ $user->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" id="email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <span class="generate-password" id="generate-password">Сгенерировать пароль</span>
                                    <input type="text" name="password"
                                           class="form-control @error('password') is-invalid @enderror" id="password"
                                           placeholder="Введите новый пароль, иначе оставьте поле пустым">
                                </div>
                                <div class="form-group">
                                    <label>Роль</label>
                                    <select class="form-control" name="role" id="role" data-placeholder="Выберите роль" autocomplete="off">
                                        <option value="0" @if($user->role == 0) selected @endif>Администратор</option>
                                        <option value="1" @if($user->role == 1) selected @endif>Покупатель</option>
                                        <option value="2" @if($user->role == 2) selected @endif>Поставщик</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
