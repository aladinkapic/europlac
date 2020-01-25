@extends('administracija.layout.master')
@section('title') {{$user->name ?? '/'}}  @endsection

@section('page-icon') <i class="fas fa-user"></i> @endsection
@section('page-header') {{$user->name ?? '/'}} @endsection
@section('page-desc') Pregled vaših osobnih podataka. / <a href="">Uredite vaše podatke</a> @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.users.my-profile')}}"> {{$user->name ?? '/'}} </a> @endsection



@section('content')
    {!! Form::open(array('route' => 'admin.users.update', 'action' => 'UsersController@update')) !!}
    @csrf

    <section>
        <div class="split-two">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('name', __('Ime i prezime').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('name', $user->name ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('email', __('Email adresa').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('email', $user->email ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>



            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('phone_one', __('Broj telefona').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('phone_one', $user->phone_one ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('phone_two', __('Broj mobitela').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('phone_two', $user->phone_two ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('address', __('Adresa').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('address', $user->address ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
        </div>
        <div class="split-two">
            <div class="input-row">
                {!! Form::hidden('photo',  $user->photo ??'', ['class' => 'photo-preview', 'id' => 'photo-input-title']) !!}
                <div class="input-image-w">
                    <img src="/images/users/{{$user->photo ?? ''}}" id="photo-preview" alt="">
                    <form action="">
                        <label for="photo-input">
                            <div class="input-image-shadow">
                                <i class="fas fa-camera"></i>
                            </div>
                        </label>
                        <input type="file" id="photo-input" class="photo-input" source="/images/users/" foto-name="photo-preview" name="photo-input" url="{{route('photos.users.save-user-icon')}}">
                    </form>
                </div>
            </div>
        </div>
        <div class="single-one single-one-with-padding">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('fb', __('Facebook').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('fb', $user->fb ?? '', ['class' => 'form-input', 'autocomplete' => 'off', '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('in', __('Instagram').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('in', $user->in ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('linked', __('LinkedIN').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('linked', $user->linked ?? '', ['class' => 'form-input', 'autocomplete' => 'off', '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('yt', __('YouTube').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('yt', $user->yt ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('tw', __('Twitter').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('tw', $user->tw ?? '', ['class' => 'form-input', 'autocomplete' => 'off', '']) !!}
                </div>
            </div>
        </div>
        <div class="bottom-buttons">
            <div class="bottom-button">
                {!! Form::submit('SPREMITE SADRŽAJ', ['class' => 'save-button']) !!}
            </div>
        </div>
    </section>
    {!! Form::close(); !!}
@endsection


