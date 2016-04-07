@extends('layouts.master')

@section('styles')
<style>
    .container{
        margin-top: 10em;
    }
</style>
@endsection

@section('content')
<div class="container hide-on-med-and-down">
    <div class="row">
        <div class="col s9">
            <img src="src/fia.png">
        </div>
        <div class="col s3">
            <ul>
                <h2>Portal Pelayanan Mahasiswa FIA</h2>
            </ul>
            <ul>
                <a href="{{action('Controller@loginredirect')}}" class="waves-effect waves-light btn pink darken-4">LOGIN SSO</a>
            </ul>
        </div>
    </div>
</div>
<div class="container hide-on-large-only">
    <div class="row">
        <div class="col s12">
            <ul>
                <h2>Portal Pelayanan Mahasiswa FIA</h2>
            </ul>
            <ul>
                <a href="{{action('Controller@loginredirect')}}" class="waves-effect waves-light btn pink darken-4">LOGIN SSO</a>
            </ul>
        </div>
    </div>
</div>

@endsection