<a href="#" class="is-hovered-adCard">
    <div class="m-card">
        {{--Card Infos--}}
        <img class="img-fluid l-topCornered m-card-image" alt="تصویر آگهی" src="{{asset('images/home-image.jpg')}}">
        <div class="text-center mt-2 mb-2 m-card-location">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <strong>یوسف آباد جفلای شرقی</strong>
                </div>
                <div class="col-auto">
                    <p class="icon-placeholder--round gradient-text ml-2 mt-1"></p>
                </div>
            </div>
        </div>
        <p class="text-center hi-fontSize-12">متراژ : ۲۳۰ متر</p>
        <p class="text-center hi-fontSize-15 home-cost">قیمت : ۳۵۰ میلیون تومان</p>
        {{--cart azhans name and bishtar bedanid--}}
        <div class="container-fluid">
            <div class="row pt-2 pb-1 align-items-center">
                <div class="col-4 pl-0">
                    @if ($type == "normal")
                        <div data-balloon="آزانس املاک محمود" data-balloon-pos="top" class="balloon m-card-azhansName l-flex-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <span class="icon-home"></span>
                        </div>
                    @endif
                    @if ($type == "confirmed")
                        <div data-balloon="تایید شده" data-balloon-pos="top" class="balloon m-card-azhansName l-flex-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <span class="fa fa-check cyan-text"></span>
                        </div>
                    @endif
                    @if ($type == "dismissed")
                        <div data-balloon="تایید نشده" data-balloon-pos="top" class="balloon m-card-azhansName l-flex-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <span class="fa fa-times red-text"></span>
                        </div>
                    @endif
                    @if ($type == "pending")
                        <div data-balloon="در حال بررسی" data-balloon-pos="top" class="balloon m-card-azhansName l-flex-center" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            <span class="yellow-text text-darken-3 hi-fontSize-17">!</span>
                        </div>
                    @endif
                </div>
                <div class="col-7 text-right pr-0">
                    <span class="m-card-moreInfo p-2 hvr-shutter-out-vertical">اطلاعات بیشتر</span>
                </div>
            </div>
        </div>
    </div>
</a>