@extends('layouting.master')
@section('title',"Pengaturan")


@section('content')
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="container">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="container">
                @include('profile.partials.update-password-form')
            </div>

            <div class="container">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </section>
</div>
@endsection

