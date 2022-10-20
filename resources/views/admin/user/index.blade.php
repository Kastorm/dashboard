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
                                        <th>Имя</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Email</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Права</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Компания</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Статус</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Дата добавления</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Дата изменения</th>
                                        <th class="text-center" style="width: 100px;">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <th class="text-center" scope="row">{{$user->id}}</th>
                                            <td class="">{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role_id}}</td>
                                            <td>{{$user->entity_id}}</td>
                                            <td>{{$user->status}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->updated_at}}</td>


                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="like" href="{{ route('user.show',$user->id)}}">
                                                        <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                        <i class="fa fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a class="like" href="{{ route('user.edit',$user->id)}}">
                                                        <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </button>
                                                    </a>
                                                    <form  action="{{route('user.delete', $user->id)}}" method="POST" >
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
