<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="style/marks.css">



</head>

<body>
    @csrf

    <section>
        <!--for demo wrap-->
        <h1>علامات طلاب الشعبة الاولى</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        @foreach ($sesone1 as $item)

                            <th>{{$item->name_sub}}</th>


                        @endforeach
                        <th>اسم الطالب</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                    @foreach ($sesone1 as $item)

                        <td>{{$item->value}}</td>
                        <td>{{$item->studant->name_studant}}</td>

                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <script src="style/marks.js"></script>
</body>

</html>
