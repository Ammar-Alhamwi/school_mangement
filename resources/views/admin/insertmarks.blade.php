<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add anew mark</title>
    <link rel="stylesheet" href="new_mark.css">
</head>

<body>
    <div class="main-container">
        <div class="right-part">
            <i class="fa fa-graduation-cap" style="font-size: 72px;"></i>
            <h1> ادخال علامة طالب </h1>
            <p>

                بل إنها تعتبر البيت الثاني حيث تجد فيها التربية الحسنة والأصدقاء واللعب وممارسة النشاطات فإنها تساعد
                الطفل ليكبر ويصبح شخصا مسؤولا
            </p>
            <div class="btn-group">
                <a class="btn-item">قوائم الطلاب </a>
                <a class="btn-item"> لوحة التحكم</a>

            </div>
        </div>
        <form action="{{ route('/student/sesone1') }}"method="POST"enctype="multipart/form-data">
            @csrf
            <div class="title">
                <i class="fa fa-pencil"></i>
                <div>
                    <h2>الادخال هنا </h2>
                </div>


            </div>
            <div class="info" style="direction: rtl;">
                {{-- ادخال علامات الطالب  --}}
                <input type="text" class="fname" name="name_sub1" placeholder=" اسم الماده " />
                <input type="text" class="fname" name="value1" placeholder="علامة المادة" />
                <input type="text" class="fname" name="name_sub2" placeholder="اسم الماده  " />
                <input type="text" class="fname" name="value2" placeholder="علامة الماده  " />
                <input type="text" class="fname" name="name_sub3" placeholder=" اسم الماده " />
                <input type="text" class="fname" name="value3" placeholder="علامة المادة" />
                <input type="text" class="fname" name="name_sub4" placeholder="اسم الماده  " />
                <input type="text" class="fname" name="value4" placeholder="علامة الماده  " />




                <button type="submit" name='id' value={{ $id }}> تاكيد </button>
        </form>
    </div>
</body>

</html>
