<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>student marks</title>
    <link rel="stylesheet" href="./style1.css">

</head>
<body>
    @csrf
<!-- partial:index.partial.html -->
<h1>علامات الطالب</h1>
<ol>
    @foreach ($sesone1 as $item)

        <li >
            {{-- hello this test --}}
            <div class="icon"><i class="fa-solid fa-bicycle"></i></div>
            <div class="title">{{$item->name_sub}}</div></div>
            <div class="descr" style="font-size: 30px; color: #86fde8">{{$item->value}}</div>
        </li>
    @endforeach
                        

                    
</ol>

</body>
</html>
