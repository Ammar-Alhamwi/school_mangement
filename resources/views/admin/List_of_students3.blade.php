<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>crud dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->

    <link rel="stylesheet" href="css/custom.css">



    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>

<body>



    <div class="wrapper">

        <div class="body-overlay"></div>
        <div id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/logo.png" class="img-fluid" /><span>مدرسة التفوق</span></h3>
            </div>
            <ul class="list-unstyled component m-0">
                <li class="active">
                    <a href={{ route('dashboard') }} class="dashboard"><i class="material-icons">لوحة التحكم</i>
                    </a>
                </li>



                <li class="dropdown">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">الطلاب</i>
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                        <li><a href={{ route('List_of_students1') }}>الصف الاول</a></li>
                        <li><a href={{ route('List_of_students2') }}> الصف الثاني</a></li>
                        <li><a href={{ route('List_of_students3') }}> الصف الثالث</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">المناهج</i>
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                        <li><a href="#">منهج الصف الاول</a></li>
                        <li><a href="#"> منهج الصف الثاني</a></li>
                        <li><a href="#"> منهج الصف الثالث</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">النشاطات</i>
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu4">
                        <li><a href="#">السباحة </a></li>
                        <li><a href="#">القراءة</a></li>
                        <li><a href="#"> العاب ترفيهية</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">المعلمين</i>
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu5">
                        <li><a href="#">الاداريين </a></li>
                        <li><a href="#">اساتذه المواد</a></li>
                        <li><a href="#"> مشرفو النشاطات</a></li>
                    </ul>

                </li>





            </ul>
        </div>

        <!-------sidebar--design- close----------->




        <!-------page-content start----------->

        <div id="content">

            <!------top-navbar-start----------->

            <div class="top-navbar">
                <div class="xd-topbar">
                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">

                        </div>

                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchbar">

                            </div>
                        </div>


                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        <li class="dropdown nav-item active">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <span class="material-icons">الاشعارات</span>
                                                <span class="notification">4</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">لديك 4 رسائل</a></li>
                                                <li><a href="#">لديك 4 رسائل</a></li>
                                                <li><a href="#">لديك 4 رسائل</a></li>
                                                <li><a href="#">لديك اربع رسائل</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <span class="material-icons">هدى الحلاق</span>
                                            </a>
                                        </li>

                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img src="img/user.jpg" style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            <ul class="dropdown-menu small-menu">
                                                <li><a href="#">

                                                        <span class="material-icons">logout</span>
                                                        تسجيل الخروج
                                                    </a></li>

                                            </ul>
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                    <div class="xp-breadcrumbbar text-center">
                        <h4 class="page-title">قوائم الطلاب </h4>

                    </div>


                </div>
            </div>
            <!------top-navbar-end----------->


            <!------main-content-start----------->

            <div class="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrapper">

                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">

                                    </div>
                                    <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                            <i class="material-icons">&#xf303;</i>
                                            <span> الصف الاول </span>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><span class="custom-checkbox">

                                        </th>
                                        <th>ادخال علامة</th>
                                        <th>السلوك الكلي</th>
                                        <th>معدل العلامات</th>
                                        <th>الشعبة</th>

                                        <th>اسم الطالب</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($student_info as $iteam)
                                        @php
                                            $i = 0;
                                            
                                        @endphp
                                        @if ($iteam->student->accept == 1 and $iteam->student->age == 3)
                                            <tr>


                                                <th><span class="custom-checkbox">

                                                </th>
                                                <th>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <i class="material-icons" data-toggle="tooltip"
                                                            title="قبول">&#10003;</i>
                                                    </a>

                                                </th>
                                                <th>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <i class="material-icons" data-toggle="tooltip"
                                                            title="قبول">87%</i>
                                                    </a>

                                                </th>

                                                <th>90%</th>
                                                <th>3</th>
                                                <th>{{ $iteam->student->name_studant }}</th>
                                            </tr>
                                        @endif
                                    @endforeach


                                </tbody>

                            </table>




                        </div>
                    </div>

                    <!------main-content-start----------->















                </div>
            </div>
            <!----accept-modal start--------->




            <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">ادخال علامه طالب</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="form-group">

                                <input type="text" class="fname" name="name" placeholder="  اسم المادة" />
                                <br><br>
                                <label> ادخل علامة الطالب</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="text" class="fname" name="name" placeholder="  اسم المادة" />
                                <br><br>
                                <label> ادخل علامة الطالب</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="text" class="fname" name="name" placeholder="  اسم المادة" />
                                <br><br>
                                <label> ادخل علامة الطالب</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="text" class="fname" name="name" placeholder="  اسم المادة" />
                                <br><br>
                                <label> ادخل علامة الطالب</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="text" class="fname" name="name" placeholder="  اسم المادة" />
                                <br><br>
                                <label> ادخل علامة الطالب</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="text" class="fname" name="name" placeholder="  اسم المادة" />
                                <br><br>
                                <label> ادخل علامة الطالب</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="modal-body">
                                <p> هل انت متاكد من العلامة </p>
                                <p class="text-warning"><small> لايمكن التراجع اذا اكدت هذا الفعل</small></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
                            <button type="button" class="btn btn-success">حفظ </button>
                        </div>
                    </div>
                </div>
            </div>



            <!----accept-modal end--------->






            <!----add-modal start---------
  <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
   <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">  ادخال علامة طالب</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <div class="form-group">
     <label>الاسم الكامل</label>
     <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
     <label> الشعبة</label>
     <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
     <label>الرياضيات</label>
     <input type="emil" class="form-control" required>
    </div>
    <div class="form-group">
     <label>اللغة العربية</label>
     <textarea class="form-control" required></textarea>
    </div>
    <div class="form-group">
     <label>اللغة الانكليزية</label>
     <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
     <label>اللغة الفرنسيه</label>
     <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
     <label>الفيزياء </label>
     <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
     <label>علوم الاحياء</label>
     <input type="text" class="form-control" required>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
    <button type="button" class="btn btn-success">اضافة</button>
    </div>
   </div>
   </div>
  </div>
  --->


            <!----footer-design------------->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="footer-in">

                    </div>
                </div>
            </footer>




        </div>

    </div>



    <!-------complete html----------->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".xp-menubar").on('click', function() {
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('active');
            });

            $('.xp-menubar,.body-overlay').on('click', function() {
                $("#sidebar,.body-overlay").toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>
