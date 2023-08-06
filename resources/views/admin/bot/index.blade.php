@extends('admin.layouts.admin.admin')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <div class="block-options">
                                <a class="like" href="{{route('user.create')}}">
                                    <button type="button" class="btn btn-sm btn-primary">
                                        <i class="fa fa-plus "></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="block block-rounded">
                            <div class="block-content">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">ID</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">имя</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Категория</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Статус</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">testnet</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Плечо</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Ордер%</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">TP</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">SL</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">TSL</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">A.TSL</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Баланс.МИН</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Создан</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Изменен</th>
                                        <th class="text-center" style="width: 100px;">Действие</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bot as $data)
                                        <tr>
                                            <th class="text-center" scope="row">{{$data->id}}</th>
                                            <td >{{$data->name}}</td>
                                            <td >{{$data->category}}</td>
                                            <td >{{$data->status}}</td>
                                            <td >{{$data->testnet}}</td>
                                            <td>{{$data->leverage}}</td>
                                            <td>{{$data->order_size}}</td>
                                            <td>{{$data->order_tp}}</td>
                                            <td>{{$data->order_sl}}</td>
                                            <td>{{$data->order_tsl}}</td>
                                            <td>{{$data->order_activ_tsl}}</td>
                                            <td>{{$data->balans_min}}</td>
                                            <td>{{$data->created_at}}</td>
                                            <td>{{$data->updated_at}}</td>



                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="like" href="{{ route('user.show',$data->id)}}">
                                                        <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a class="like" href="{{ route('user.edit',$data->id)}}">
                                                        <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </button>
                                                    </a>
                                                    <form  action="{{route('user.delete', $data->id)}}" method="POST" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"  class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
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

    </main>

@endsection
