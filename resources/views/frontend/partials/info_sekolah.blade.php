<div class="row">
    <div class="col-12">
        @foreach ($info as $item)
            <div class="card card-1">
                <div class="body-card">
                    {!!$item->isi!!}
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="col-12">
    <a href="" style="text-decoration:none">
        <div class="card nexta">
            <div class="body-card">
                <p style="font-size:15px; ">Lihat Semua<i class='uil-arrow-right'></i></p>
            </div>
        </div>
    </a>
</div>