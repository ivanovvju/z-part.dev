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
                            <p class="h5">Загрузка элементов для поиска в формате excel</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="container">
                            <div class="row mt-4">
                                <form action="{{ route('query_import') }}" method="POST" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="file" name="query_import" id="query_import" style="margin-top: 10px">
                                        </div>

                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-success">Загрузить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
