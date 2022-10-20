@extends('admin.layouts.admin.admin')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content ">

            <div class="row">

                <div class="col-md-12" >
                    <div class="block block-rounded ">
                        <div class="block-header block-header-default">
                            <div class="block-options">
                            <a class="like" href="{{route('role.index')}}">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </a>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row">
                                <div class="col-lg-8 space-y-2">
                                    <!-- Form Inline - Default Style -->
                                    <form class="row row-cols-lg-auto g-3 align-items-center" action="{{route('role.store')}}" method="POST" >
                                        @csrf
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="example-id-name" name="role" placeholder="Менеджер">
                                        </div>
                                        <div>
                                            <input type="submit" class="btn btn-primary " value="Сохранить">
                                        </div>
                                    </form>
                                    <!-- END Form Inline - Default Style -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>

@endsection
