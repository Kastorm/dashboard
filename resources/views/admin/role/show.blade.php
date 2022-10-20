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
                            <a class="like" href="{{route('role.index')}}">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </a>
                            </div>
                        </div>
                        <div class="block block-rounded">

                            <table class="table table-striped table-vcenter">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">ID</th>
                                    <th>Роль</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Статус</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" scope="row">{{$role->id}}</th>
                                        <td>{{$role->role}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </main>

@endsection
