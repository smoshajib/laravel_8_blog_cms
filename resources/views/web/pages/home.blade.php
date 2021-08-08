@extends('web.layouts.master')


@section('after_nav')
    @include('web.layouts.sections.slider')
@endsection

@section('body-content')
    {{-- app section --}}
    @include('web.layouts.sections.app')
    {{-- app section --}}


    {{-- about section --}}
    @include('web.layouts.sections.about')
    {{-- about section --}}


    {{-- work section --}}
    @include('web.layouts.sections.work')
    {{-- work section --}}

    {{-- testimonial section --}}
    @include('web.layouts.sections.testimonial')
    {{-- testimonial section --}}
    {{-- link section --}}
    @include('web.layouts.sections.link')
    {{-- link section --}}
@endsection


@section('style')
@endsection

@section('script')
@endsection
