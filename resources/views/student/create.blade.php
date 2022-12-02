<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register anew student</title>
    <link rel="stylesheet" href="new stu.css">
</head>
<body>
    <div class="main-container">
        <div class="right-part">
            <i class="fa fa-graduation-cap" style="font-size: 72px;"></i>
            <h1 > التسجيل في مدرستنا</h1>
            <p>
                
                بل إنها تعتبر البيت الثاني حيث تجد فيها التربية الحسنة والأصدقاء واللعب وممارسة النشاطات فإنها تساعد الطفل ليكبر ويصبح شخصا مسؤولا
            </p>
            <div class="btn-group">
                <a class="btn-item">الصفحة الرئيسية</a>
                <a class="btn-item">تسجيل حساب جديد</a>

            </div>
        </div>
        <form action="{{ route('studentstore')}}"method="POST"enctype="multipart/form-data">
            @csrf
            <div class="title">
                <i class="fa fa-pencil"></i>
                <div >
                    <h2 >التسجيل هنا </h2>
                </div>
                
            
            </div>
            <div class="info" style="direction: rtl;">
                <input type="text" class="fname" name="name_studant" placeholder="الاسم الكامل"/>
                 <input type="text" class="fname" name="Address" placeholder="العنوان"/>
                 <input type="text" class="fname" name="phone" placeholder="رقم الهاتف"/>
                 <label> المواليد</label>
                 <input type="date" name="age">

                  <select name="gender">
                    <option value=" course-type"  name="gender"selected > الجنس</option>
                    <option  name ="gender" value="{{0}}"  > ذكر</option>
                    <option name="gender" value="{{1}}"  > انثى</option>
                 </select> 
                 <label> ادخل صورة الشهادة</label>
                 <input type="file" name="certificate">
                 <label> ادخل صورة الطالب </label>
                 <input type="file" name="photo">
            </div>
            <button type="submit"> تاكيد </button>
        </form>
    </div>
</body>
</html>