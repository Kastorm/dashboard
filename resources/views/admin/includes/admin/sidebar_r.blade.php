<aside id="side-overlay">
    <!-- Side Header -->
    <div class="content-header bg-primary-dark">
        <!-- User Info -->
        <a class="link-fx text-white fw-semibold fs-sm" href="#">
            {{ Auth::user()->name }}
        </a>
        <!-- END User Info -->
        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout"
                data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
        </button>
        <!-- END Close Side Overlay -->
    </div>
    <!-- END Side Header -->
    <!-- Side Content -->
    <div class="content-side">
        <!-- Mini Stats -->
        <div class="block pull-t pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                        <div class="fs-4">985</div>
                    </div>
                    <div class="col-4">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Tickets</div>
                        <div class="fs-4">251</div>
                    </div>
                    <div class="col-4">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Projects</div>
                        <div class="fs-4">39</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Mini Stats -->
    </div>
    <!-- END Side Content -->
</aside>
