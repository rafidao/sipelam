@extends('layouts.master')

@extends('elements.element')

@section('content')
 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
       <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>

  <!-- <div class = "container">
  <p></p>
  <div class = "panel panel-default">
    <div class="panel-heading">
  Form Pengajuan Izin Mahasiswa </div>
  <div class = "panel-body">
    {!! Form::open(['url' => '/createpengajuan']) !!}
  Id:
  {!! Form::text('id', '', ['placeholder' => 'id','class' => 'form-control']) !!}
  NamaKegiatan:
  {!! Form::text('namakegiatan', '', ['placeholder' => 'NamaKegiatan','class' => 'form-control']) !!}
  Penyelenggara:
  {!! Form::text('penyelenggara', '', ['placeholder' => 'Penyelenggara', 'class' => 'form-control']) !!}
  TglMulai:
  {!! Form::text('tglMulai', '', ['placeholder' => 'TglMulai', 'class' => 'form-control']) !!}
  TglSelesai:
  {!! Form::text('tglSelesai', '', ['placeholder' => 'TglSelesai', 'class' => 'form-control']) !!}
  DeskripsiKegiatan:
  {!! Form::text('DeskripsiKegiatan', '', ['placeholder' => 'DeskripsiKegiatan', 'class' => 'form-control']) !!}
  Email:
  {!! Form::text('Email', '', ['placeholder' => 'Email', 'class' => 'form-control']) !!}
  NoTelp:
  {!! Form::text('NoTelp', '', ['placeholder' => 'Email', 'NoTelp' => 'form-control']) !!}
  <p></p>

  {!! Form::submit('Submit', ['class' => 'btn btn-danger']) !!}
  @stop
  </div></div></div> -->

@endsection
