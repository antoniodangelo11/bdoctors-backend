@extends('layouts.app')

@section('content')
    <section class="container bg-light py-4">

        {{-- Content --}}
        <div class="row">

            {{-- Main Column --}}
            <div class="col-12 col-md-7 col-lg-9 mb-3">
                <div class="card profile-card bg-white pb-3">

                    {{-- Profile Banner --}}
                    <div class="profile-card-banner">
                    </div>

                    {{-- Profile Photo --}}
                    <img src="{{ asset('img/profile-placeholder.png') }}" alt="Profile Photo" class="profile-card-photo">

                    {{-- Card Body --}}
                    <div class="profile-card-body px-3 mb-3">
                        <h2>{{ $doctor->name }}</h2>
                        <p>{{ $doctor->profile->address }}</p>
                        <p>{{ $doctor->profile->description }}</p>

                    </div>

                    {{-- Card Actions --}}
                    <div class="px-3">
                        <a href="#" class="btn btn-outline-primary">Edita Profilo</a>
                    </div>

                </div>
            </div>

            {{-- Details Column --}}
            <div class="col-12 col-md-5 col-lg-3">
                <div class="card bg-white p-2">
                    <h4>Specializzazioni</h4>
                    <ul>
                        @foreach ($doctor->profile->typologies as $typology)
                            <li>{{ $typology->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
