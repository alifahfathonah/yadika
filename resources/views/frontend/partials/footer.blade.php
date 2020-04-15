<div class="container-fluid foot">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-md-4">
            <!-- begin section-container -->
            <div class="section-container">
                <h4>WEBSITE SMK YADIKA NATAR</h4>
                <p>
                    Ini adalah website resmi KSMK YADIKA NATAR dengan template dan desain baru. Anda dapat menemukan informasi lebih lanjut tentang SMK YADIKA NATAR di website ini.
                </p>
                <p>
                    Kami akan selalu memperbarui website kami, termasuk informasi-informasinya dan kami terus berusaha mengembangkan website kami agar menjadi lebih baik.
                </p>
            </div>
            <!-- end section-container -->
        </div>
        <!-- end col-4 -->
        <!-- begin col-4 -->
        <div class="col-md-4">
            <!-- begin section-container -->
            <div class="section-container">
                <h4>BERITA TERBARU</h4>
                <ul class="latest-post">
                    @foreach ($artikel as $item)
                        <li>
                            <h4 class="title"><a href="{{url('berita', $item->slug)}}" style="text-decoration:none">{{$item->title}}</a></h4>
                            <p class="time"> <i class="fa fa-clock-o"></i> {{Carbon\carbon::parse($item->created_at)->format('d-m-Y')}}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- end section-container -->
        </div>
        <!-- end col-4 -->
        <!-- begin col-4 -->
        <div class="col-md-4">
            <!-- begin section-container -->
            <div class="section-container">
                <h4>KONTAK</h4>
                <ul class="latest-post">
                    <li>
                        <h4 class="title">Social Media</h4>
                        <p style="padding-left:0px">
                            <a href="http://"><i class="fa fa-instagram"></i></a>
                            <a href="http://"><i class="fa fa-twitter"></i></a>
                            <a href="http://"><i class="fa fa-facebook"></i></a>
                            <a href="http://"><i class="fa fa-youtube"></i></a>
                        </p>
                    </li>
                    <li>
                        <h4 class="title">Alamat</h4>
                        <p style="padding-left:0px">
                          <i class="fa fa-info">  Jl.Raya Merak Batin</i>
                        </p>
                    </li>
                    <li>
                        <h4 class="title">Telp</h4>
                        <p style="padding-left:0px">
                            <i class="fa fa-whatsapp">   0822 4888 5062 </i> <br>
                            <i class="fa fa-phone"> (0721) 0093 833</i>
                            
                        </p>
                    </li>
                    <li>
                        <h4 class="title">E-mail</h4>
                        <p style="padding-left:0px">
                            <i class="fa fa-envelope-o"> <a href="mailto:smkyadikanatar@gmail.com" style="text-decoration:none">smkyadikanatar@gmail.com</a> </i> 
                        </p>
                    </li>
                </ul>
            </div>
            <!-- end section-container -->
        </div>
        <!-- end col-4 -->
    </div>
    <!-- end row -->
</div>