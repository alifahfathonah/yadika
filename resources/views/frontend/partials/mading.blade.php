<div class="row">
    <div class="col-12">
        @foreach ($mading as $item)
            <div class="card card-2">
                <div class="body-card example">
                    <h3 class="text-h3">{{$item->isi}}</h3>
                    <h6 class="text-h6">{{$item->info}} <span style="float:right; color:black">{{Carbon\carbon::parse($item->created_at)->format('d-m-Y')}}</span> </h6>                
                </div>
            </div>
        @endforeach
    </div>
</div>
@if (@$item->id >= 4)
    <div class="col-12">
        <a href="" style="text-decoration:none">
            <div class="card nexta">
                <div class="body-card">
                    <p style="font-size:15px; ">Lihat Semua<i class='uil-arrow-right'></i></p>
                </div>
            </div>
        </a>
    </div>
@else
    <div class="col text-center">
        <h3>Mading Masih Kosong !</h3>
    </div>
@endif