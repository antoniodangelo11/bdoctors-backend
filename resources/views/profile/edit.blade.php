@extends('layouts.app')
@section('content')
    <div class="container-fluid py-5 py-lg-4">

        <h2 class="fs-4 text-secondary mb-4">
            {{ __('Profile') }}
        </h2>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">

            @include('profile.partials.update-profile-information-form')

        </div>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">


            @include('profile.partials.update-password-form')

        </div>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">


            @include('profile.partials.delete-user-form')

        </div>
    </div>
@endsection

@section('scripts')
    @vite(['resources/js/file-uploader.js'])
@endsection
