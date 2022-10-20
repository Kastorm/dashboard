@extends('admin.layouts.admin.admin')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <!-- Row #1 -->
                <div class="col-md-6 col-xl-2">
                    <a class="block block-bordered block-rounded block-link-shadow text-start"
                       href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fs-3 fw-semibold">1/34</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Заявки</div>
                            </div>
                            <div>
                                <i class="si si-bag fa-2x opacity-25"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-2">
                    <a class="block block-bordered block-rounded block-link-shadow text-start"
                       href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fs-3 fw-semibold">5/55</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">События</div>
                            </div>
                            <div>
                                <i class="si si-wallet fa-2x opacity-25"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-2">
                    <a class="block block-bordered block-rounded block-link-shadow text-start"
                       href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fs-3 fw-semibold">2/55</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Авария</div>
                            </div>
                            <div>
                                <i class="si si-globe fa-2x opacity-25"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-2">
                    <a class="block block-bordered block-rounded block-link-shadow text-start"
                       href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fs-3 fw-semibold">7</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Объекты</div>
                            </div>
                            <div>
                                <i class="si si-briefcase fa-2x opacity-25"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-2">
                    <a class="block block-bordered block-rounded block-link-shadow text-start"
                       href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fs-3 fw-semibold">7</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Заказчики</div>
                            </div>
                            <div>
                                <i class="si si-briefcase fa-2x opacity-25"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-2">
                    <a class="block block-bordered block-rounded block-link-shadow text-start"
                       href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fs-3 fw-semibold">7</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Подрядчики</div>
                            </div>
                            <div>
                                <i class="si si-briefcase fa-2x opacity-25"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Row #1 -->
            </div>
            <div class="row">
                <!-- Row #2 -->
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
                            <h3 class="block-title">Журнал Заявок</h3>
                        </div>
                        <div class="block-content">
                            <table class="table table-sm table-vcenter">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;"></th>
                                    <th>Объект</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Статус</th>
                                    <th>В работе </th>
                                    <th>Коментарий</th>

                                    <th class="text-center" style="width: 100px;">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="text-center" scope="row">1</th>
                                    <td>Детский сад 5</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-primary">Плановое ТО</span>
                                    </td>
                                    <td>Петров</td>
                                    <td> проверка АПС 5 этаж</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">2</th>
                                    <td>Островиятанова 1</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-danger">Авария</span>
                                    </td>
                                    <td>Петров</td>
                                    <td> 2 этаж кабинет 201</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">3</th>
                                    <td>Ленина 22</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-success">Заявка</span>
                                    </td>
                                    <td></td>
                                    <td>Сработка 14 этаж</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">4</th>
                                    <td>Пирогова 22</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-info">Работы ТО</span>
                                    </td>
                                    <td>Симовнов М.В.</td>
                                    <td>Перетядка кабеля 14 этаж</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">5</th>
                                    <td>Школа 55</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-success">Заявка</span>
                                    </td>
                                    <td>Симовнов М.В.</td>
                                    <td>сработка 14 этаж</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">6</th>
                                    <td>Пирогова 22 </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-warning">Архив</span>
                                    </td>
                                    <td>Симовнов М.В.</td>
                                    <td>сработка 14 этаж</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">7</th>
                                    <td>Линина22</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-warning">Архив</span>
                                    </td>
                                    <td>Симовнов М.В.</td>
                                    <td>сработка 14 этаж</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center" scope="row">8</th>
                                    <td>Волгина 34</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-success">Заявка</span>
                                    </td>
                                    <td></td>
                                    <td>сработка</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

                <!-- END Row #2 -->
            </div>

        </div>
        <!-- END Page Content -->
    </main>


@endsection
