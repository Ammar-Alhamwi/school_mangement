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
            <h1 >  ادخال علامة طالب </h1>
            <p>
                
                بل إنها تعتبر البيت الثاني حيث تجد فيها التربية الحسنة والأصدقاء واللعب وممارسة النشاطات فإنها تساعد الطفل ليكبر ويصبح شخصا مسؤولا
            </p>
            <div class="btn-group">
                <a  class="btn-item" href= {{ route('homeadmin') }} >الصفحة الأساسية </a>
                <a class="btn-item" href= {{ route('dashboard') }}>  لوحة التحكم</a>

            </div>
        </div>
        <form>
            <div class="title">
                <i class="fa fa-pencil"></i>
                <div >
                    <h2 >السلوك </h2>
                </div>
                
            
            </div>
            <div class="info" style="direction: rtl;">
                
                 
                 
                
            <button type="submit">  حضور الطالب</button>
            <button type="submit">  نسبة انتباه الطالب </button>
            <button type="submit"> مشاركة الطالب  </button>
            <button type="submit"> نوم  الطالب  </button>
            


        </form>
    </div>
</body>
</html>