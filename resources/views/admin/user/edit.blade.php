@extends('admin.layouts.admin.admin')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="block block-rounded">
                        <!-- Шапка+Копки -->
                        <form method="POST" action="{{route('user.update', $user->id)}}">
                            @csrf
                            @method('PATCH')
                        <div class="block-header block-header-default">
                            <div class="block-options">
                                <a class="like" href="{{route('user.index')}}">
                                    <button type="button" class="btn btn-sm btn-primary">
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </button>
                                </a>

                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-check opacity-50 me-1"></i> Сохранить
                                </button>
                                <button type="reset" class="btn btn-sm btn-secondary">Сброс</button>
                            </div>

                        </div>
                        <!-- Конец Шапка + Копки -->
                        <!-- Блок Личные данные -->
                        <div class="block-content block-content-full">
                            <h2 class="content-heading">Личные данные</h2>
                            <div class="row items-push">
                                <div class="col-lg-4">
                                    <p class="fs-sm text-muted">
                                        Все данные заполняються без сокращений полностью
                                    </p>
                                </div>
                                <div class="col-lg-8 col-xl-5">
                                    <div class="mb-4">
                                        <label class="form-label" for="val-username" >ФИО <span class="text-danger">*</span></label>
                                        <input type="text"  class="form-control  @error('name') is-invalid @enderror" id="val-username" name="name" value="{{$user->name}}" placeholder="" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="val-email" name="email"  value="{{$user->email}}"  placeholder="" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-masked-phone">Телефон</label>
                                        <input type="text" class="js-masked-phone form-control js-masked-enabled" id="example-masked-phone" name="phone"  value="{{$user->phone}}" placeholder="+7 (925) 000-0000" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-select">Роль</label>
                                        <select class="form-select" id="example-select" name="role_id" value="{{$user->role_id}}">
                                            <option value="1">Менджер</option>
                                            <option value="2">Инженер</option>
                                            <option value="3">Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="example-select">Организация</label>
                                        <select class="form-select" id="example-select" name="entity_id" value="{{$user->entity_id}}">
                                            <option value="1">ООО ИИСУЗ</option>
                                            <option value="2">ООО МКМ</option>
                                            <option value="3">РНИМУ</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label  class="form-label" for="example-textarea-input">Коментарий</label>
                                        <textarea  type="text" class="form-control" id="example-textarea-input" name="description" value="{{$user->description}} rows="4" placeholder=""></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Сатус</label>
                                        <div class="space-x-2">

                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" id="example-switch-inline2" name="status"  placeholder="0">
                                                <label class="form-check-label" for="example-switch-inline2">Активный</label>
                                            </div>
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="" id="example-switch-inline3" name="example-switch-inline3" disabled="">
                                                <label class="form-check-label" for="example-switch-inline3">Удален</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="val-email">Пароль <span class="text-danger">*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>

                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="val-email">Пароль еще раз <span class="text-danger">*</span></label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="">
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-primary " value="Сохранить">
                                    </div>

                                </div>
                            </div>

                        </div>
                            <!-- END Личные данные-->
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </main>

@endsection
