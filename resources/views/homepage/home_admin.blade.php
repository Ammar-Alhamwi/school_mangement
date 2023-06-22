<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=Lateef&family=Lobster&family=Montserrat:ital,wght@0,100;0,200;1,100;1,300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css>
    <link rel="stylesheet"
        href="css/line-icons.css">
    <link rel="stylesheet" href="style/home2.css">
    <link rel="stylesheet" href="style/nav.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=Lateef&family=Lobster&family=Montserrat:ital,wght@0,100;0,200;1,100;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style/foteer.css">


    <title> school</title>
</head>
<!--navbar section-->

<header class="header">
    <div class="container">
        <div class="header-main">

            <div class="logo">
                <a href="#">Admin</a>

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
                        <a href="#" data-toggle="sub-menu"> ادارة<i class="plus"></i></a>
                        <ul class="sub-menu">

                             <li class="menu-item">
                                <a href="{{ route('dashboard') }}">  لوحه التحكم</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('behaviour') }}"> مراقبة الصف</a>
                            </li> 
                            


                            @foreach ($studant as $item)
                            @if($item->accept==1)
                                <li class="menu-item">

                                    <form action="{{ route('info') }}"method="POST"enctype="multipart/form-data">
                                        @csrf
                                        <button class="btn btn-primary" type="submit" name='id'
                                            value={{ $item->id }}>{{ $item->name_studant }}</button>


                                    </form>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">انضم الينا<i class="plus"></i></a>
                        <ul class="sub-menu">

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-item" href="{{ route('logout') }}"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
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
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>

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

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end coursel section-->


    <!--about section-->
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/y.jfif" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2> حول مدرستنا </h2>
                        <p>
                            مؤسستنا هي مؤوسسة تربويه تعليمية بأفضل المعايير التربويه العالمية
                            <br>
                            نستخدم الاساليب الححديثة لتعامل مع متطلبات عصر العولمة ضمن تعاليم ديننا الحنيف
                            <br>
                            هدفنا الاساسي:إعداد جيل متفوق واثق من نفسه يتمتع بالأخلاق الحميدة يمتلك جوانب القيادة
                            والإبداع ومهارات الحياة والاعتماد على أسلوب تربوي متطور تحت رعاية مدرسين
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end about section-->

    <!--activites section-->
    <div class="container">
        <div class="text-center m-5">
            <h3> نشاطاتنا وفعالياتنا </h3>
        </div>
        <div class="row">
            <div class="col-sm-4 p-1">
                <div class="card" style="width: 18rem;">
                    <img src="img/chess.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">شطرنج</h5>
                        <p class="card-text">تقوية خلايا المخ وتنشيط الطالب والمشاركة في مسابقات دولية</p>
                        <a href="#" class="btn btn-primary"> سجل الان </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 p-1">
                <div class="card" style="width: 18rem;">
                    <img src="img/sw.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">السباحة</h5>
                        <p class="card-text">
                            من افضل الرياضات لتقوية عضلات الجسم ؛ ويقام تحديات وتدريبات بشكل شهري
                            <br> مع مراقبة الاطفال من قبل
                            مدربين مختصين
                        </p>
                        <a href="#" class="btn btn-primary"> سجل الان </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 p-1">
                <div class="card" style="width: 18rem;">
                    <img src="img/pr.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> البرمجة </h5>
                        <p class="card-text"> ان البرمجة هي لغة العصر السائدة
                            <br> فاهميتها الان مثل اهمية تعلم الكتابة من 100 سنة
                            <br> يتم تعلم لفة سكراتش من قبل مبرمجين ومتابعة مستمرة مع تشجيعات وتحفيزات مستمرة
                        </p>
                        <a href="#" class="btn btn-primary"> سجل الان</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end activites section-->

</body>



<!-- footer section-->
<footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>

    <ul class="social_icon">
        <li> <a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a> </li>
        <li> <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a> </li>
        <li> <a href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a> </li>
        <li> <a href="#">
                <ion-icon name="logo-whatsapp"></ion-icon>
            </a> </li>
    </ul>

    <ul class="menu">
        <li> <a href="#"> الصفحة الرئيسية </a> </li>
        <li> <a href="#"> خدماتنا </a></li>
        <li> <a href="#"> فريق العمل </a> </li>
        <li> <a href="#"> تواصل معنا</a> </li>
    </ul>

    <p>
        المدرسة ليست مكان للتعليم فقط ..
        بل إنها تعتبر البيت الثاني حيث تجد فيها التربية الحسنة والأصدقاء واللعب وممارسة النشاطات فإنها تساعد الطفل ليكبر
        ويصبح شخصا مسؤولا

        أهلا ومرحبا بكم في مدرستنا ..... المكان المناسب لطفلكم
    </p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!--end footer section-->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
</body>

</html>
