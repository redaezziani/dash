<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        page
    </title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap');

*,*::after, *::before{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

@media print {
    .no-print {
        display: none;
    }
}

body{
    direction: rtl;
    font-family: 'Cairo', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: right;
    overflow-x: hidden;
}

.group{
    padding:30px 0;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    direction: rtl;
    text-align: right;
    width: 700px;
    min-height: 880px;
    padding: 20px;

}

.group img.bg{
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.group .text-content{
    font-size: .7rem;
    display: flex;
    width: 100%;
    justify-content: start;
    flex-direction: column;
    align-items: start;
    z-index: 2;
    gap: 10px;
}
.group .text-content p{
    font-size: .6rem;
    font-weight: 900;
    color: #fff;
}

.group .text-content p.red{
    color: #000000;
}

.group .text-content span.text{
    color: #000000;
}
.group .text-content .list{
    z-index: 2;
    padding: 8px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 1rem;
    width: 100%;
}
.group .text-content .title{
    font-size: 1.2rem;
    font-weight: 600;
    text-align: center;
    width: 100%;
    color: rgba(0, 0, 255, 0.714)
}
.group .text-content .list .red{
    color: #ff0000;
}
.group .text-content .list h3{
    font-size: .9rem;
    font-weight: 600;
    color: #ffffff;
    text-align: center;
    width: 100%;
    color: rgba(0, 0, 255, 0.714)
}
.group .text-content .list .group-sign{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    gap: 10px;
}
.group .text-content .list .group-sign img{
    width: 150px;
}

.group .text-content .list .group-sign p.text{
    font-size: .6rem;
    font-weight: 900;
    color: #000000;
    margin-bottom: 1rem;
    width: 100%;
    text-align: center;
}

    </style>
</head>
<body>
    <div class="group">
        <img alt="test" class="bg" src="{{asset('images/header.jpg')}}">
        <div class="text-content">
            <div
            class="title " style="margin-top:160px;"
            >
                <h3>
                    اتفاقية تصميم مواقع الكترونية
                </h3>
            </div>
            <p
            class="red"
            >
                الطرف الاول شركة :خط الاحتراف لتصميم مواقع الشبكة المعلوماتية سجل تجاري رقم / 889765 مقرها : دولة الامارات العربية المتحدة خط الاحتراف :
                <span class="text">اتفق كل من السيد {{$data->nom}} ، على ان تقوم شراكتنا بتقديم خدماتنا و العمل على بدء تشغيلها وفقا للقواعد و الاشتراطات المحلية و الدولية المعمول بها في هذا المجال و رغبة منه فتتكلف شركتنا ادارة المواقع الالكترونية على منصة شوبيفاي و مدتها 30 يوم من تاريخ العقد و يتم ذكر كل التفاصيل في المتفق عليه و لا تتحمل اي تكاليف اضافات في منصة شوبيفاي ذلك على الانترنت له وفق القواعد المعمول بها في هذا الشئن ،</span> و لا تتحمل الشركة اي مسؤولية تجاهرحقوق الغير في اي من المتطلبات ان كان ، فقد اتفقا و هما في كامل اهليتهما القانونية على الالتزام بمواعيد التسليم و جودة العمل من شركتنا و على<span class="text">السيد / اسم العميل  ، </span>تسليم التفاصيل المطلوبة و الدفعة المالية المحددة و يبدء تنفيذ العمل فورا توقيع على العقد حيث غير ممكن الغاء العقد الا بموافقة الطرفين.
            </p>
            <div class="list">


                <p
                class="red"
                >
                    يتم توفير المتفق عليه كالتالي:
                </p>


                <ul>
                    <li>
                        {{$data->daccord}}
                    </li>
                </ul>
            </div>
            <div class="list">
                <h3>
                    التكلفة و مدة التنفيذ و الشروط
                </h3>
                <ul>
                    <li>
                        تكلفة {{$data->full_price}} درهم امراتي
                    </li>
                    @if (!$data->credit)
                    <li>
                        بدون اشتراك شهري او سنوي لدى شركتنا
                    </li>
                    @else
                    <li>
                        مع اشتراك شهري او سنوي لدى شركتنا
                    </li>
                    @endif
                    <li>
                        اي اضافة يكون عليها رسوم على صاحب الموقع بالكامل
                    </li>
                    <li>
                        ملاحظة الدفع : لا مانع من تحويل المبلغ على الحساب / سعود النحاس بصفته الادارية و المبيعات بشركة
                    </li>
                    <li>
                        ملاحظة الدفع: لا مانع من الدفع عبر حساب الشركة عبر رابط قصير
                    </li>
                </ul>
            </div>
            <div class="list">
                <h3>
                    التوقيعات الرسمية
                </h3>
                <div class="group-sign">
                    <span  class="text"> شركة / خط الاحتراف</span>
                   <img src="{{asset('images/sing.jpg')}}" alt="./">
                   <p
                   class="text"
                   >
                        السيد {{$data->nom}} <br>
                            التوقيع : .............................

                   </p>

                   <p
                   class="text"
                   >
                        بتاريخ {{$data->date}}
                        <br>
                        N°: {{$data->num_contrat}}

                   </p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
 window.print();
</script>
