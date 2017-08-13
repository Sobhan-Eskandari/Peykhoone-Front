<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Level Push Menu - Demo 2</title>
    <meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels"/>
    <meta name="keywords"
          content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform"/>
    <meta name="author" content="Codrops"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
</head>
<body>
<div class="container-fluid">
    <!-- Push Wrapper -->
    <div class="mp-pusher" id="mp-pusher">

        <!-- mp-menu -->
        <nav id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <h2 class="icon icon-world">All Categories</h2>
                <ul>
                    <li><a class="icon icon-photo" href="#">Collections</a></li>
                    <li><a class="icon icon-photo" href="#">Collections</a></li>
                    <li><a class="icon icon-photo" href="#">Collections</a></li>
                    <li><a class="icon icon-wallet" href="#">Credits</a></li>
                </ul>
            </div>
        </nav>
        <!-- /mp-menu -->

        <div class="scroller"><!-- this is for emulating position fixed of others nav -->
            <div class="scroller-inner">
                <!-- Top Navigation -->
                <div class="content clearfix">
                    <div class="block block-40 clearfix">
                        <p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
                    </div>
                </div>
            </div><!-- /scroller-inner -->
        </div><!-- /scroller -->

    </div><!-- /pusher -->
</div><!-- /container -->

<script src="{{asset('js/app.js')}}"></script>

<script>
    new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'), {
        type: 'cover'
    });
</script>
<!-- /classie -->
<!--mlpushmenu -->
<!--modernizer -->

</body>
</html>