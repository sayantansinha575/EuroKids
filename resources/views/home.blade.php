@extends('layouts.app')

@section('content')
    @include('components.hero_carosuel')
    @include('components.whats_new')
    {{-- @include('components.about') --}}
    @include('components.class_testimonial')
    @include('components.youtube_video_slider')
    @include('components.video')
  
    {{-- @include('components.call_to_action') --}}
    {{-- @include('components.class') --}}
    {{-- @include('components.appointment') --}}
    @include('components.testimonials')
@endsection
