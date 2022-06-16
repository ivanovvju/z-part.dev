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
                            <p class="h5">Загрузка прайса в формате excel</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="container">
                            <div class="row mt-4">
                                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" role="form">
                                    @csrf
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="file" name="product_import" class="form-control" id="product_import">
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
