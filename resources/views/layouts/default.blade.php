<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/assets/css/app.css" />
        <link rel="stylesheet" href="/bower_components/foundation-icon-fonts/foundation-icons.css" />
        <script src="/bower_components/modernizr/modernizr.js"></script>
        <script src="/bower_components/ckeditor/ckeditor.js"></script>
        @yield('refresh')
    </head>
    <body>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <header class="head">
                    <nav class="top-bar" data-topbar>
                        <ul class="title-area">
                            <li class="name">
                                <h1>
                                    <a href="/">{{ $name or 'Vip-Trips.net' }}</a>
                                </h1>
                            </li>
                            <li class="toggle-topbar menu-icon">
                                <a href="#">
                                    <span>Меню</span>
                                </a>
                            </li>
                        </ul>

                        <section class="top-bar-section">
                            <!-- Right Nav Section -->
                            <ul class="right">
                                <li><a href="/">Начало</a></li>
                                <?php if (!empty($user['id'])) { ?>
                                    @if(1)<li><a href="/category">Категории</a></li>@endif
                                    @if(1)<li><a href="/item">Круизи</a></li>@endif
                                    @if(1)<li><a href="/navigation">Навигация</a></li>@endif
                                    @if(1)<li><a href="/page">Страници</a></li>@endif
                                    @if(0)<li><a href="/color">Цветове</a></li>@endif
                                    @if(1)<li><a href="/slider">Слайдер</a></li>@endif
                                    @if(1)<li><a href="/conf">Настройки</a></li>@endif
                                    @if(1)
                                        <li class="has-dropdown">
                                            <a href="/newsletter">Бюлетин</a>
                                            <ul class="dropdown">
                                                <li><a href="/newslettersubscribers" title="">Получатели</a></li>
                                            </ul>
                                        </li>@endif
                                    @if(1)<li><a href="/user">Потребители</a></li>@endif
                                    <li><a href="/auth/logout">Изход</a></li>
                                <?php } else { ?>
                                    
                                <?php } ?>
                            </ul>
                        </section>
                    </nav>
                </header>
            </div>
        </div>
        <script>
        Conf = {
            'token' : "<?php echo isset($token) ? $token : "-na-"; ?>"
        };
        </script>
        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/bower_components/foundation/js/foundation.min.js"></script>
        <script src="/js/app.js"></script>
        
        @yield('content')
        
    </body>
</html>
