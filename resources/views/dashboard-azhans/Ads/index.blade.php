@extends('layout.dashboard')

@section('backColor', 'm-navBar-transparent')
@section('marginTop', 'mt-5 pt-1')
@section('header-img')
    @include('includes.header-img')
@endsection

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-12 col-md-6 col-lg-3 my-3">
              @component('components.card')
                  @slot('type')
                      normal
                  @endslot
              @endcomponent
          </div>
          <div class="col-12 col-md-6 col-lg-3 my-3">
              @component('components.card')
                  @slot('type')
                      pending
                  @endslot
              @endcomponent
          </div>
          <div class="col-12 col-md-6 col-lg-3 my-3">
              @component('components.card')
                  @slot('type')
                      dismissed
                  @endslot
              @endcomponent
          </div>
          <div class="col-12 col-md-6 col-lg-3 my-3">
              <a href="#createAdModal">
                  <div class="m-card hi-shadow-1 dashed-border khakestarie-roshan rounded-5 text-center l-fullHeight mouse-pointer">
                      <div class="row l-fullHeight">
                          <div class="col-12 align-self-center">
                              <span class="icon-rounded-plus cyan-text hi-fontSize-35"></span>
                              <p class="cyan-text">ایجاد آگهی جدید</p>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-md-6 col-lg-3 my-3">
              @component('components.card')
                  @slot('type')
                      normal
                  @endslot
              @endcomponent
          </div>
          <div class="col-12 col-md-6 col-lg-3 my-3">
              @component('components.card')
                  @slot('type')
                      pending
                  @endslot
              @endcomponent
          </div>
          <div class="col-12 col-md-6 col-lg-3 my-3">
              @component('components.card')
                  @slot('type')
                      dismissed
                  @endslot
              @endcomponent
          </div>
          <div class="col-12 col-md-6 col-lg-3 my-3">
              @component('components.card')
                  @slot('type')
                      confirmed
                  @endslot
              @endcomponent
          </div>
      </div>
  </div>

  <!-- Signup Modal -->
  <div class="remodal l-modal p-0" data-remodal-id="createAdModal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <!-- Nav tabs -->
      <div class="container ">
          <div class="row align-items-center">
              <div class="col-6 text-center p-5 border-right-gray">
                  <p class="hi-fontSize-14 grey-text mb-4 hi-lineHeight-30">از اینجا میتونید در کمترین زمان یک آگهی با مشخصات اصلی
                      ملک تون بسازید</p>
                  <img class="img-fluid hi-size-9 l-autoMargin my-3" src="{{asset('images/rocket.png')}}">
                  <a href="#"><button class="m-btn rounded-6 cyan mt-4 px-4">آگهی فوری</button></a>
              </div>
              <div class="col-6 text-center p-5 ">
                  <p class="hi-fontSize-14 grey-text mb-4 hi-lineHeight-30">میتونید آگهی خودتون رو با تمامی مشخصات ملک تون  بارگذاری کنید</p>
                  <img class="img-fluid hi-size-9 l-autoMargin my-3" src="{{asset('images/vendor/computer.png')}}">
                  <a href="#"><button class="m-btn rounded-6 cyan mt-4 px-4">آگهی کامل</button></a>
              </div>
          </div>
      </div>

  </div>
@endsection
