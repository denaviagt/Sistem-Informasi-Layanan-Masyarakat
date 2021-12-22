@extends('front.layout.app')

@section('content')
    <main>
        <!-- Services Area Start -->
        <section class="service-area section-padding mt-5">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center">
                            <h2>Daftar Layanan </h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    @foreach ($serviceCategories as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6 h-100">
                            <div class="services-caption text-center mb-30">
                                <div class="service-icon">
                                    <span class="flaticon-businessman"></span>
                                </div>
                                <div class="service-cap">
                                    <h4><a href="{{ route('layanan.show', $item->id) }}">{{ $item->category }}</a></h4>
                                    <p>{{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Services Area End -->
    </main>
@endsection
