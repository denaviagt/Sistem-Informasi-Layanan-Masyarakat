@extends('front.layout.app')

@section('content')
    <main>
        <div class="container section-padding mt-3">
            <div class="section-tittle text-center mb-5">
                <h3>Layanan {{ $service_category->category }}</h3>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#syarat" aria-expanded="true" aria-controls="syarat">
                                Syarat Layanan
                            </button>
                        </h2>
                    </div>

                    <div id="syarat" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ol>
                                @foreach ($service_category->requirement as $req)
                                    <li>{{ $req->terms }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="prosedur">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Prosedur Layanan
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="prosedur" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="unordered-list">
                                @foreach ($service_category->procedure as $procedure)
                                    <li>{{ $procedure->procedure }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-3">
                <a href="{{ route('layanan.create', $id) }}" class="btn btn-primary">Ajukan Permohonan</a>
            </div>
        </div>


    </main>
@endsection
