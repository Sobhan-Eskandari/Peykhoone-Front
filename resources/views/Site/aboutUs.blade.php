@extends('layout.site')
@section('title')
    درباره پی خونه | پی خونه
@endsection
@section('meta')
    <meta name="description"
     content="پی خونه سامانه ای برای خرید، اجاره خانه و ارائه اطلاعات ملکی در رشت است"/>
    <meta name="Keywords" content="درباره سامانه خرید , فروش و اجاره املاک پی خونه"/>
@endsection
@section('content')
    <div class="row mt-0 header-text-box">
        <img src="{{ asset('images/aboutUs.jpg') }}"
             alt="درباره ی پی خونه" height="450px"
             width="100%" class="header-z-index">
        <h1 class="header-caption-about text-center">درباره پی خونه</h1>
        <a href="#aboutUs-description" class="text-center header-caption-about mt-5 pt-4"><i class="icon-expand-button icon-expand-button-property hi-fontSize-35"></i></a>
    </div>
    <!--breadcrumb-->
    <div class="container l-rtl mt-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-12 px-0">
                <ol class="breadcrumb m-breadcrumb" id="aboutUs-description">
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item m-breadcrumb-item"><a href="#">درباره پی خونه</a></li>
                    <li class="breadcrumb-item m-breadcrumb-item">-</li>
                </ol>
            </div>
        </div>
    </div>
    <!--Description-->
    <div class="container l-ltr px-0">
            <div class="m-profileBox-sublayer">
                <div class="row l-rtl">
                    <div class="m-profileBox-upperLayer mr-4 aboutUs-description-img p-5">
                        <img src="{{ asset('images/comma.png') }}" alt="Norway" width="110px" height="110px" class="topRight">
                        <img src="{{ asset('images/comma2.png') }}" alt="Norway" width="110px" height="110px" class="bottomLeft">
                        <p class="mt-4 main-description-about-us">
                            پی خونه سامانه ای برای خرید، اجاره خانه و ارائه اطلاعات ملکی در رشت است که با هدف افزایش اعتماد در خرید و اجاره ملک در رشت، بستر ارتباطی ایمن متقاضیان ملک و مشاوران املاک قابل اعتماد و حرفه ای در تمامی محله های رشت را توسعه داده است.
                            <br>
                            پی خونه در راستای استراتژی ارائه شفاف اطلاعات به خریداران و مستاجران، همه ابزارهای لازم و اطلاعات ارزشمند راجع به تغییرات قیمت محله و پیشینه مشاورین املاک را ارائه می دهد تا در فرآیند جست و جوی خانه مناسب موفق شوند. همچنین همه مشاورانی که ملک ها و فایل های خود را عرضه می کنند، توسط آژانس های املاک معتبر تایید صلاحیت شده اند.
                            <br>
                            پی خونه برای نخستین بار در ایران در اقدامی خلاقانه و پژوهشی، اطلاعات تمامی محله های رشت شامل تاریخچه، بافت شهری، امکانات و دسترسی ها را منتشر کرده که به راحتی در اپلیکیشن و وبسایت در اختیار کاربر قرار می گیرد.
                            <br>
                            پی خونه از طریق اپلیکیشن های موبایل نوآورانه اش، بینش مناسبی درباره ملک، محله ، مشاور و اجاره خانه ارائه می دهد و کیفیت ارتباط مشاوران معتمد با متقاضیان ملک را بهبود می بخشد. آلونک بیش از 15,000مشاور تایید شده دارد که به متقاضیان ملک خدمات مورد نظرشان را ارائه می کنند.
                            <br>
                            این نرم افزار ، دغدغه جست و جو و اتلاف زمان برای پیدا کردن ملک مناسب شما را برطرف خواهد کرد. از این رو شبکه ارتباطی یکپارچه عظیمی در سه بستر اندروید،IOS   و بستر وب برای متقاضیان ملک، مشاوران و آژانس های املاک به صورت مجزا توسعه داده است.
                        </p>
                        <button class="m-btn-contact-peykhoone ocean px-3 mt-3">تماس با پی خونه</button>
                    </div>
                </div>
            </div>
        </div>
    <br><br><br><br><br>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "item": {
      "@id": "",
      "name": "خانه",
      "image": ""
    }
  },{
    "@type": "ListItem",
    "position": 2,
    "item": {
      "@id": "",
      "name": "درباره پی خونه",
      "image": ""
    }
  }]
}
</script>
@endsection
@section('contact')
    @include('includes.contact-banner')
@endsection
