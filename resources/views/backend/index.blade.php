@extends('layouts.backend')
@section('content')
<div class="row mt-3">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Jumlah Siswa</span>
                        <h2 class="mb-0">300</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-primary" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Jumlah Siswi</span>
                        <h2 class="mb-0">200</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-info" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Jumlah Guru</span>
                        <h2 class="mb-0">20</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-danger" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Jumlah Staf</span>
                        <h2 class="mb-0">4</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-warning" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 


<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <h5 class="card-title header-title border-bottom p-3 mb-0">3 Tahun Terakhir</h5>
                <!-- stat 1 -->
                <div class="media px-3 py-4 border-bottom">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">240</h4>
                        <span class="text-muted">Murid - 2019</span>
                    </div>
                    <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                </div>

                <!-- stat 2 -->
                <div class="media px-3 py-4 border-bottom">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">170</h4>
                        <span class="text-muted">Murid - 2018</span>
                    </div>
                    <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                </div>

                <!-- stat 3 -->
                <div class="media px-3 py-4">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">150</h4>
                        <span class="text-muted">Murid - 2017</span>
                    </div>
                    <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9">
        <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title mb-0 header-title">Sejak Berdiri</h5>
                <div id="revenue-chart" class="apex-charts mt-3"  dir="ltr"></div>
            </div>
        </div>
    </div>
</div> 
@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@endsection