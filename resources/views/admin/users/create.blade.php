@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Создание пользователя</h1>
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
                            <h3 class="card-title">Создание пользователя</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name-org">Наименование организации</label>
                                    <input type="text" name="name-org"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Наименование организации">
                                </div>
                                <div class="form-group">
                                    <label for="full-name-org">Полное наименование организации</label>
                                    <input type="text" name="full-name-org"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Полное наименование организации">
                                </div>
                                <div class="form-group">
                                    <label for="address-org">Адрес организации (юриический, фактический)</label>
                                    <input type="text" name="address-org"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Адрес организации">
                                </div>
                                <div class="form-group">
                                    <label for="inn">ИНН</label>
                                    <input type="number" name="inn"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="ИНН">
                                </div>
                                <div class="form-group">
                                    <label for="kpp">КПП</label>
                                    <input type="number" name="kpp"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="КПП">
                                </div>
                                <div class="form-group">
                                    <label for="ogrn">ОГРН</label>
                                    <input type="number" name="ogrn"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="ОГРН">
                                </div>
                                <div class="form-group">
                                    <label for="name-bank">Наименование банка</label>
                                    <input type="text" name="name-bank"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Наименование банка">
                                </div>
                                <div class="form-group">
                                    <label for="payment-account">Р/счет</label>
                                    <input type="number" name="payment-account"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Р/счет">
                                </div>
                                <div class="form-group">
                                    <label for="corresp-account">К/счет</label>
                                    <input type="number" name="corresp-account"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="К/счет">
                                </div>
                                <div class="form-group">
                                    <label for="bik">БИК</label>
                                    <input type="number" name="bik"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="БИК">
                                </div>
                                <div class="form-group">
                                    <label for="fio-general-manager">ФИО генерального директора</label>
                                    <input type="text" name="fio-general-manager"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="ФИО генерального директора">
                                </div>
                                <div class="form-group">
                                    <label for="site">Сайт</label>
                                    <input type="text" name="site"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Сайт">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Телефон</label>
                                    <input type="number" name="phone"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <label for="email">Адрес электронной почты</label>
                                    <input type="email" name="email"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Адрес электронной почты">
                                </div>
                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <span class="generate-password" id="generate-password">Сгенерировать пароль</span>
                                    <input type="text" name="password"
                                           class="form-control @error('password') is-invalid @enderror" id="password"
                                           placeholder="Пароль">
                                </div>
                                <div class="form-group">
                                    <label>Роль</label>
                                    <select class="form-control" name="role" id="role" data-placeholder="Выберите роль" autocomplete="off">
                                        <option value="0">Администратор</option>
                                        <option value="1" selected>Покупатель</option>
                                        <option value="2">Поставщик</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить пользователя</button>
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
