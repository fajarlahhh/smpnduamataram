@extends('frontend.pages.main')

@section('subcontent')
<!--Start about area-->
<section class="about-area">
    @if ($data)
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="about-text">
                    <div class="sec-title">
                        <div class="title">Tata Usaha<br><span>SMPN 2 Mataram</span></div>
                    </div>
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="additional-info-content-box">
                                    <div class="accordion-box">
                                        @foreach ($data as $row)
                                            <!--Start single accordion box-->
                                        <div class="accordion accordion-block">
                                            <div class="accord-btn active">
                                                <h4>{{ $row->tata_usaha_jabatan }}</h4>
                                            </div>
                                            <div class="accord-content">
                                                <p>{{ $row->tata_usaha_pejabat }}
                                                    <br>NIP : {{ $row->tata_usaha_pejabat_nip }}</p>
                                            </div>
                                        </div>
                                        <!--End single accordion box-->
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endif
</section>
<!--End about Area-->
@endsection
