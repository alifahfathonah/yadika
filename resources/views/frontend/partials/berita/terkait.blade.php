<div class="row">
    @foreach ($artikel as $item)
        <a href="">
            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                <div class="card card-show">
                    <div class="card-body">
                        <p class="text-h5" style="padding:3px">{{$item->title}} - <span style="color:black">{{Carbon\carbon::parse($item->created_at)->format('d-m-Y')}}</span></p>
                        <span></span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
