@extends('administracija.layout.master')
@section('title') Dodajte novog uposlenika  @endsection

@section('page-icon') <i class="far fa-images"></i> @endsection
@section('page-header') Galerija fotografija @endsection
@section('page-desc')     {{$estate->adresa ?? ''}}, {{$estate->gradRel->name ?? ''}} - {{$estate->drzavaRel->name ?? ''}} @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.preview-estate', ['id' => $estate->id, 'what' => true])}}"> Pregled nekretnine </a> / <a href="">Galerija</a>@endsection
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
                            <p>{{__('640 x 480')}}</p>
                        </div>
                    </label>
                @endif
                <div id="uploaded-files" @if(isset($preview)) style="width:100%;" @endif>
                    <p>{{__('SPREMLJENE DATOTEKE')}}</p>
                    <div id="all-uploaded-files-at-once">
                        <!-- All uploaded files come here -->

                        @php $counter = 1; @endphp
                        @foreach($images as $image)
                            <div class="single-saved-file">
                                <div class="single-saved-file-image">
                                    <i class="fas fa-images"></i>
                                </div>
                                <div class="single-saved-file-details">
                                    <div class="single-saved-file-details-name">
                                        <a href="{{asset('/images/estates/'.$image->file->file_name)}}" target="_blank">
                                            <p>{{($image->file->real_name != null) ? $image->file->real_name : 'Fotografija-'.$counter++.'.jpg'}}</p>
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
                {!! Form::submit('SPREMITE SADRŽAJ', ['class' => 'save-button', 'model' => 'Models/Estate', 'id' => $estate->id ?? '', 'url' => route('photos.save-to-gallery'), 'goto' => url()->previous()]) !!}
            </div>
        </div>
        </section>
    </div>

{{--    <div class="slider-container">--}}
{{--        <div class="swiper-container estate-slider">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="{{asset('/images/estates/1.jpg')}}"  alt="">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="{{asset('/images/estates/2.jpg')}}"  alt="">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="{{asset('/images/estates/3.jpg')}}"  alt="">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="{{asset('/images/estates/4.jpg')}}"  alt="">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="{{asset('/images/estates/5.jpg')}}"  alt="">--}}
{{--                </div>--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img src="{{asset('/images/estates/6.jpg')}}"  alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="swiper-button-next"></div>--}}
{{--            <div class="swiper-button-prev"></div>--}}

{{--            <!-- Add Pagination -->--}}
{{--            <div class="swiper-pagination swiper-pagination2"></div>--}}
{{--        </div>--}}

{{--        <script>--}}
{{--            var swiper1 = new Swiper('.estate-slider', {--}}
{{--                slidesPerView: 1,--}}
{{--                spaceBetween: 0,--}}
{{--                pagination: {--}}
{{--                    el: '.swiper-pagination2',--}}
{{--                    clickable: true,--}}
{{--                },--}}
{{--                navigation: {--}}
{{--                    nextEl: '.swiper-button-next',--}}
{{--                    prevEl: '.swiper-button-prev',--}}
{{--                }--}}
{{--            });--}}
{{--        </script>--}}
{{--    </div>--}}
    <br><br><br>
@endsection

@section('second_js_scripts')
    <script src="{{asset('/js/administracija/upload.js')}}"></script>
@endsection
