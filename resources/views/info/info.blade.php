<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CSS User Profile Card</title>
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/info.css">
    <link rel="stylesheet" href="style/foteer.css">

    <style>
        .glow-on-hover {
            width: 120px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #2269d4;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;

        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-main">


                <div class="logo">
                    <a href="#">Logo</a>

                </div>

                <div class="dir" style="direction: rtl;">
                    <li class="ringBell">
                        <span class="-count">3</span>
                    </li>
                </div>


                <div class="menu-overlay"></div>
                <!--navigation menu start-->
                <nav class="nav-menu">
                    <div class="close-nav-menu">
                        <img src="img/gettyimages-165670943-612x612.jpg" alt="">

                    </div>


                    <ul class="menu">

                        <li class="menu-item">
                            <a href="/home2"> الصفحة الرئيسية</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">المناهج الدراسية</a>
                        </li>

                        <!-- <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">ابنائي<i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">الابن الاول </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">الابن الثاني</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">الابن الثالث</a>
                                </li>
                            </ul>
                        </li> -->

                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">انضم الينا<i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="/login">تسجيل الدخول </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/register">انشاء حساب </a>
                                </li>

                            </ul>

                        </li>

                    </ul>

                </nav>
                <!--navigation menu start-->

            </div>
        </div>

    </header>

    <body>
        @csrf
        <div class="wrapper">
            <div class="left">
                <img src="{{$studentinfo->photo}}" alt="user" width="100">
                <button class="glow-on-hover" type="button" style="font-size: 20px;">سلوك الطالب </button>


            </div>

            <div class="right">
                <div class="info">
                    <h2 style="color:#0c203f; direction: rtl; ">معلومات الطالب</h2>
                    <hr>
                    <div class="row ">
                        <div class="col-md-3">
                            <h2 style="direction: rtl; color:#0c203f;"> الاسم الكامل:</h2>
                        </div>
                        <div class="col-md-9 text-secondary  ">
                            <div style="direction: rtl;font-size: 15px; border: solid 1.5px black; padding:4px;"> {{$studentinfo->name_studant}}</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h2 style="direction: rtl;  color: #0c203f;"> الصف:</h2>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <div style="direction: rtl; font-size: 15px;border: solid 1.5px #0c203f; padding: 4px;">
                                {{$studentinfo->age}}</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h2 style="direction: rtl; color: #0c203f;"> الشعبة:</h2>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <div style="direction: rtl; font-size: 15px;border: solid 1.5px #0c203f;;padding:4px; ">
                                {{$studentinfo->division}}</div>
                        </div>
                    </div>



                </div>



                <div class="dropdown">
                    <button class="dropbtn"> النتائج الدراسية</button>
                    <div class="dropdown-content">
                        <form action="{{ route('sesone1') }}"method="POST"enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-primary" type="submit" name='id'
                                value={{ $studentinfo->id }}>الفصل الاول</button>


                        </form>
                        <form action="{{ route('sesone2') }}"method="POST"enctype="multipart/form-data">
                            @csrf
                            <button class="btn btn-primary" type="submit" name='id'
                                value={{ $studentinfo->id }}>الفصل الثاني</button>


                        </form>
                        

                    </div>
                </div>


            </div>
        </div>
    </body>



    



    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>

</html> 

