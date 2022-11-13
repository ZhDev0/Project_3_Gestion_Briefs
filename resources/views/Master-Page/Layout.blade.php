<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Normalize And Styles/Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        @yield('style');
    </style>


    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url('{{ asset('img/5570863.jpg') }}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
    <style>
        .marquee {
            height: calc(100vh - 95vh);
            background: black;
            color: white;
        }

        .link-container {
            display: flex;
            justify-content: space-between;
            align-content: center;
        }

        .modal {
            display: none;
        }

        .modal-back {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, .25)
        }

        .modal-container {
            position: fixed;
            top: 50%;
            left: 50%;
            padding: 25px;
            border-radius: 5px;
            /* background-image: url({{ asset('image/wp10021529-red-pill-wallpapers.jpg') }}); */
            background: rgba(0, 0, 0, 0.931);
            background-position: center;
            width: 920px;
            color: white;
            height: 500px;
            transform: translate(-50%, -50%);
        }

        .modal-container>p {
            text-align: center;
            margin-top: 20%;
            font-size: 30px;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgba(148, 0, 211, .7);
            border-radius: 10px;
        }

        @import url('https://fonts.googleapis.com/css?family=Montserrat:600|Open+Sans:600&display=swap');

        .sidebar {
            position: fixed;
            width: 240px;
            top: 0;
            left: -240px;
            height: 100%;
            background: #1e1e1e;
            transition: all .5s ease;
        }

        .sidebar header {
            font-size: 28px;
            color: white;
            line-height: 70px;
            text-align: center;
            background: #1b1b1b;
            user-select: none;
            font-family: 'Montserrat', sans-serif;
        }

        .sidebar a {
            display: block;
            height: 65px;
            width: 100%;
            color: white;
            line-height: 65px;
            padding-left: 30px;
            box-sizing: border-box;
            border-bottom: 1px solid black;
            border-top: 1px solid rgba(255, 255, 255, .1);
            border-left: 5px solid transparent;
            font-family: 'Open Sans', sans-serif;
            transition: all .5s ease;
        }

        a.active,
        a:hover {
            border-bottom: 3px solid #c9c9c9;
            color: #b93632;
        }

        .sidebar a i {
            font-size: 23px;
            margin-right: 16px;
        }

        .sidebar a span {
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        #check {
            display: none;
        }

        label #btn,
        label #cancel {
            position: absolute;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            border: 1px solid #262626;
            margin: 15px 30px;
            font-size: 29px;
            background: #262626;
            height: 45px;
            width: 45px;
            text-align: center;
            line-height: 45px;
            transition: all .5s ease;
        }

        label #cancel {
            opacity: 0;
            visibility: hidden;
        }

        #check:checked~.sidebar {
            left: 0;
        }

        #check:checked~label #btn {
            margin-left: 245px;
            opacity: 0;
            visibility: hidden;
        }

        #check:checked~label #cancel {
            margin-left: 245px;
            opacity: 1;
            visibility: visible;
        }

        @media(max-width : 860px) {
            .sidebar {
                height: auto;
                width: 70px;
                left: 0;
                margin: 100px 0;
            }

            header,
            #btn,
            #cancel {
                display: none;
            }

            span {
                position: absolute;
                margin-left: 23px;
                opacity: 0;
                visibility: hidden;
            }

            .sidebar a {
                height: 60px;
            }

            .sidebar a i {
                margin-left: -10px;
            }

            a:hover {
                width: 200px;
                background: inherit;
            }

            .sidebar a:hover span {
                opacity: 1;
                visibility: visible;
            }
        }
    </style>
</head>

<body>
    <div class="marquee">
        <marquee behavior="scroll" direction="right" class="mx-auto" scrollamount="12">
            <span id="target"></span>
            <span id="cursor"></span>
        </marquee>
        {{-- <marquee behavior="scroll" direction="right" scrollamount="12"></marquee> --}}
    </div>

    {{--  --}}
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>OmarZR Links</header>
        <a href="https://github.com/ZhDev0" target="_blank" class="active">
            <i class="fas fa-qrcode"></i>
            <span>Github</span>
        </a>
        <a href="https://www.linkedin.com/in/omar-zairh-8b7607230/" target="_blank">
            <i class="fas fa-link"></i>
            <span>LinkedIn</span>
        </a>

    </div>






    {{--  --}}
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    @yield('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        /*** Plugin ***/
        (function($) {
            // writes the string
            //
            // @param jQuery $target
            // @param String str
            // @param Numeric cursor
            // @param Numeric delay
            // @param Function cb
            // @return void
            function typeString($target, str, cursor, delay, cb) {
                $target.html(function(_, html) {
                    return html + str[cursor];
                });
                if (cursor < str.length - 1) {
                    setTimeout(function() {
                        typeString($target, str, cursor + 1, delay, cb);
                    }, delay);
                } else {
                    cb();
                }
            }
            // clears the string
            //
            // @param jQuery $target
            // @param Numeric delay
            // @param Function cb
            // @return void
            function deleteString($target, delay, cb) {
                var length;
                $target.html(function(_, html) {
                    length = html.length;
                    return html.substr(0, length - 1);
                });
                if (length > 1) {
                    setTimeout(function() {
                        deleteString($target, delay, cb);
                    }, delay);
                } else {
                    cb();
                }
            }
            // jQuery hook
            $.fn.extend({
                teletype: function(opts) {
                    var settings = $.extend({}, $.teletype.defaults, opts);
                    return $(this).each(function() {
                        (function loop($tar, idx) {
                            // type
                            typeString($tar, settings.text[idx], 0, settings.delay, function() {
                                // delete
                                setTimeout(function() {
                                    deleteString($tar, settings.delay,
                                        function() {
                                            loop($tar, (idx + 1) % settings
                                                .text.length);
                                        });
                                }, settings.pause);
                            });
                        }($(this), 0));
                    });
                }
            });
            // plugin defaults
            $.extend({
                teletype: {
                    defaults: {
                        delay: 100,
                        pause: 5000,
                        text: []
                    }
                }
            });
        }(jQuery));
        /*** init ***/
        $('#target').teletype({
            text: [
                `Presented By OmarZR
                :)`
            ]
        });
        $('#cursor').teletype({
            text: ['|', ' '],
            delay: 0,
            pause: 500
        });
    </script>
    <script>
        document.getElementById('modal').style.display = 'block'
        window.addEventListener('scroll', function(e) {
            setTimeout(() => {
                document.getElementById('modal').style.display = 'block'
            }, 2000)
        });
        let modalAlreadyShowed = false
        window.addEventListener('scroll', function(e) {
            if (!modalAlreadyShowed) {
                setTimeout(() => {
                    document.getElementById('modal').style.display = 'block'
                }, 2000)
                modalAlreadyShowed = true
            }
        });
        document.getElementById('modal-close').addEventListener('click', function(e) {
            document.getElementById('modal').style.display = 'none'
        })
    </script>
    <script src="{{ asset('js/Search.js') }}"></script>
    <script src="{{ asset('js/SearchA.js') }}"></script>

</body>

</html>
