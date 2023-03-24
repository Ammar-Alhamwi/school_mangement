    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=Lateef&family=Lobster&family=Montserrat:ital,wght@0,100;0,200;1,100;1,300&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css>
        <link rel="stylesheet" href="css/line-icons.css">
        <link rel="stylesheet" href="style/home.css">
        <link rel="stylesheet" href="style/nav.css">
        <link rel="stylesheet" href="style/book page.css">
        <link rel="stylesheet" href="style/foteer.css">
        <title> books page </title>
    </head>
    <!--navbar section-->
    @csrf
    <header class="header">
    <div class="container">
        <div class="header-main">

            <div class="logo">
                <a href="#">Logo</a>

            </div>
            <div class="dir" style="direction: rtl;">
            <div class="ringBell">
                <span class="-count">3</span>
                </div>
            </div>


            <div class=" open-nav-menu">
                <span></span>
            </div>

            <div class="menu-overlay"></div>
                <!--navigation menu start-->
                <nav class="nav-menu">
                    <div class="close-nav-menu">
                        <img src="img/cross.jpg" alt="">

                    </div>

                    <ul class="menu">
                        <li class="menu-item">
                            <a href="#"> الصفحة الرئيسية</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">المناهج الدراسية</a>
                        </li>


                        <li class="menu-item menu-item-has-children">
                            <a href="#" data-toggle="sub-menu">انضم الينا<i class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">تسجيل الدخول </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">انشاء حساب </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
        </div>
    </div>
    </header>



    <!--end navbar section-->
    <body>

    <!--coursel section-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>

    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="img/R4.jfif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>انضم الينا في بيتك الثاني</h5>
        </div>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
        <img src="img/4.jfif" class="d-block w-100" alt="...">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- end coursel section-->


    <!--books-->
    <div class="container">
            <div class="about-textt" >
            <h2> كتبنا </h2>
        </div>
        </div>
    @foreach ($sub as $item)


    <div class="container">
    <div class="row">
        <div class="col-lg-4 gy-5 my-10">
        <div class="card" >
            <img src="img/arabic.jfif" class="img-size" alt="...">
            <div class="card-body">
            <h5 class="card-title"> {{$item->sub}}</h5>
            </div>
            <div class="card-body">
            <a href="#" class="card-link"> للتحميل من هنا </a>
            </div>
        </div>
    </div>





    </div>
    </div>
    @endforeach




    </body>


    <!-- footer section-->
    <footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>

        <u1 class="social_icon">
            <li> <a href="#"><ion-icon name="logo-facebook"></ion-icon> </a> </li>
            <li> <a href="#"><ion-icon name="logo-instagram"></ion-icon> </a> </li>
            <li> <a href="#"><ion-icon name="logo-linkedin"></ion-icon> </a> </li>
            <li> <a href="#"><ion-icon name="logo-whatsapp"></ion-icon> </a> </li>
        </u1>

        <u1 class="menu">
            <li> <a href="#"> الصفحة الرئيسية </a> </li>
            <li> <a href="#"> خدماتنا </a></li>
            <li> <a href="#"> فريق العمل </a> </li>
            <li> <a href="#">  تواصل معنا</a> </li>
        </u1>

        <p>
            المدرسة ليست مكان للتعليم فقط ..
            بل إنها تعتبر البيت الثاني حيث تجد فيها التربية الحسنة والأصدقاء واللعب وممارسة النشاطات فإنها تساعد الطفل ليكبر ويصبح شخصا مسؤولا

            أهلا ومرحبا بكم في مدرستنا ..... المكان المناسب لطفلكم
        </p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--end footer section-->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
    </body>
    </html>
