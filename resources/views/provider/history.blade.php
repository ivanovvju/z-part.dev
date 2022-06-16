@extends('layouts.layout')

@section('menu-account-left')
    @include('provider.left-navbar')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 container-info-element">
                <div class="container">
                    <div class="row mt-2">
                        <div class="container">
                            <div class="col">
                                <div class="table" style="margin-top: 40px">
                                    <table>
                                        <thead>
                                        <tr>
                                            {{--<td>ID</td>--}}
                                            <td style="padding: 10px 30px 10px 0"><b>Наименование</b></td>
                                            <td style="padding: 10px 30px 10px 0"><b>Дата</b></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($history as $item)
                                            <tr>
                                                {{--<td style="padding-right: 20px">{{ $item->id }}</td>--}}
                                                <td style="padding: 10px 30px 10px 0">{{ $item->title }}</td>
                                                <td style="padding: 10px 0 10px 0">{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
