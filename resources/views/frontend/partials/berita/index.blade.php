<div class="row">
    @foreach ($artikel as $item)
        <div class="col-lg-6 col-xl-6 col-12">
            <a href="{{url('berita', [$item->slug] )}}" style="text-decoration:none; color:lightslategray">
                <div class="card card-5">
                    <div class="body-card">
                        <p class="title">{{$item->title}}</p>
                        <p class="sub-title">Posted By <span style="font-weight:bold">Andri</span> | Berita | {{Carbon\carbon::parse($item->created_at)->format('d-m-Y')}}</p>
                        <p class="isi">{!! \Illuminate\Support\Str::limit($item->isi, 150, '...') !!}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    @if (@$item->id >= 4)
    <div class="col-12 col-lg-12 col-xl-12">
        <a href="" style="text-decoration:none;">
            <div class="card nextb">
                <div class="body-card">
                    <p style="font-size:15px; color:white">Lihat Semua<i class='uil-arrow-right'></i></p>
                </div>
            </div>
        </a>
    </div>
    @endif
</div>
