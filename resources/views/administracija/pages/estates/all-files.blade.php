@extends('administracija.layout.master')
@section('title') Pregled svih dokumenata  @endsection

@section('page-icon') <i class="fas fa-cloud"></i> @endsection
@section('page-header') Dokumenti / Privici @endsection
@section('page-desc')     {{$estate->adresa ?? ''}}, {{$estate->gradRel->name ?? ''}} - {{$estate->drzavaRel->name ?? ''}} @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.preview-estate', ['id' => $estate->id, 'what' => true])}}"> Pregled nekretnine </a> / <a href="{{route('photos.all-files',     ['id' => $estate->id])}}">Dokumenti</a>@endsection
@section('other_css_links')
    <script src="{{asset('/js/swiper/swiper.min.js')}}"></script>
@endsection

@section('content')

    <div class="gallery-images">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div id="upload-files">
                @if(!isset($preview))
                    <label for="files" style="display:block; ">
                        <div id="upload-files-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>{{__('IZABERITE DATOTEKU')}}</p>
                        </div>
                    </label>
                @endif
                <div id="uploaded-files" @if(isset($preview)) style="width:100%;" @endif>
                    <p>{{__('SPREMLJENE DATOTEKE')}}</p>
                    <div id="all-uploaded-files-at-once">
                        <!-- All uploaded files come here -->

                        @foreach($images as $image)
                            <div class="single-saved-file">
                                <div class="single-saved-file-image">
                                    <i class="fas fa-images"></i>
                                </div>
                                <div class="single-saved-file-details">
                                    <div class="single-saved-file-details-name">
                                        <a href="{{asset('/images/estates/'.$image->file->file_name)}}" target="_blank">
                                            <p>{{$image->file->real_name}}</p>
                                        </a>


                                        <div class="steps-inside-element-delete">
                                            <a href="{{route('photos.remove-file', ['id' => $image->id])}}">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-saved-file-details-progress">
                                        <div class="single-progress-element" style="width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <input name="files" id="files" url="/upload/upload-fajlova" path="/images/estates" type="file" multiple class="form-control d-none"><br/>
            </div>
        </form>
        <section>
            <div class="bottom-buttons">
                <div class="bottom-button">
                    {!! Form::submit('SPREMITE SADRŽAJ', ['class' => 'save-button', 'model' => 'Models/Estate/Files', 'id' => $estate->id ?? '', 'url' => route('photos.save-to-gallery'), 'goto' => url()->previous()]) !!}
                </div>
            </div>
        </section>
    </div>
@endsection

@section('second_js_scripts')
    <script src="{{asset('/js/administracija/upload.js')}}"></script>
@endsection
