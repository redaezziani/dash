<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>
        </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        @vite('resources/css/app.css')
    </head>
    <body
class=' font-cairo overflow-x-hidden scrollbar-thin w-full relative h-screen flex items-center flex-col justify-start bg-gray-100'
>
<!-- nav bar  -->
@include('navBar')
<!-- end nav bar  -->

 <!-- end nav bar  -->
 @include('side-bar')
 <!-- sidebar  -->
 @if (session()->has('message'))
 <script>
             Swal.fire(
                 "تم الحدف بنجاح",
                 '',
                 'success'
             )
 </script>
@endif
<!-- main  -->
<div class="w-full md:w-[90%] rtl flex mt-24 justify-start items-center ">
    <div class="group flex ">
        <a href="">
            <p
            class="text-gray-500 text-sm"
            >
                الرئيسية
            </p>
        </a>
        <p
        class="text-gray-500 text-sm"
        >
            /

        </p>
        <a href="">
            <p
            class="text-violet-500 text-sm"
            >
                العقود
            </p>
        </a>
    </div>
</div>
<div class=" rounded-md bg-white mt-20 md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
    <div class=" w-full flex justify-end items-center">
        <a href="/Add-Contrat">
        <button
        class=" bg-violet-600 flex justify-center gap-2 items-center text-white rounded-md px-3 py-1.5 text-sm"
        >
        اضافة عقد جديد
        <i
        class='bx bx-plus text-white text-xl ml-2'
        >

        </i>
        </button>
        </a>
    </div>

    <div class=" w-full rtl flex flex-col md:flex-row  gap-3 mt-6 items-center">
        <div class="text-group flex justify-start items-center gap-2">
            <p
            class="text-gray-500 text-sm"
            >
                البحث حسب الاسم العميل او رقم العقد
            </p>
            <p
            class="text-gray-300 text-sm"
            >
            اجمالي العقود : 20
            </p>
            <p
            class="text-gray-300 text-sm"
            >
            المكتملة : 10
            </p>
        </div>
        <div class="search-group flex justify-start w-[90%]  sm:w-[60%] py-1.5 px-2 items-center gap-2 border border-slate-400 rounded-full">
            <i
            class='bx bx-search text-gray-500 text-xl'
            >

            </i>
            <input
            type="text"
            class="outline-none bg-transparent text-gray-500 text-sm"
            placeholder="ابحث هنا"
            />
        </div>
    </div>
    <table
    class="w-full mt-6 text-center text-gray-500 text-sm"
    >
        <thead
        class="bg-slate-100 rounded-sm text-gray-500 text-sm"
        >
            <tr>
                <th
                class="py-2"
                >
                    اسم العميل
                </th>
                <th
                class="py-2"
                >
                    رقم العقد
                </th>
                <th
                class="py-2"
                >
                    تاريخ التعاقد
                </th>
                <th
                class="py-2"
                >
                     المبلغ الاجمالي
                </th>
                <th
                class="py-2"
                >
                     المبلغ المدفوع
                </th>
                <th
                class="py-2"
                >
                    المبلغ المتبقي
                </th>
                <th
                class="py-2"
                >
                      مع أقساط
                </th>
                <th
                class="py-2"
                >
                      اقساط كل شهر
                </th>
                <th
                class="py-2"
                >
                     عقد
                </th>
                <th
                class="py-2"
                >
                     فاتورة
                </th>
                <th
                class="py-2"
                >
                    الخيارات
                </th>
            </tr>
        </thead>
        <tbody
        class="bg-white max-h-[5rem] overflow-hidden text-gray-500 text-sm"
        >
        @foreach($contrats as $item)
            <tr
            class="border-b border-slate-100"
            >
                <td
                class="py-2 truncate"
                >
                    {{ $item->nom }}
                </td>
                <td
                class="py-2 truncate"
                >
                    {{ $item->num_contrat }}
                </td>
                <td
                class="py-2 truncate"
                >
                    {{ $item->date }}
                </td>
                <td
                class="py-2"
                >
                    {{ $item->full_price }}
                </td>
                <td
                class="py-2"
                >
                    {{ $item->done_price }}
                </td>
                <td
                class="py-2"
                >
                {{ $item->full_price - $item->done_price}}
                </td>
                <td
                class="py-2"
                >
                {{ $item->credit }}
                </td>
                <td
                class="py-2"
                >
                    {{ $item->credit_price}}
                </td>
                <td
                class="py-2"
                >
                <button  class="bg-green-500 text-white rounded-md px-3 py-1.5  text-sm">
                    عقد
                </button>


                </td>
                <td
                class="py-2"
                >
                    <a href="">
                    <button
                    class="bg-green-500 text-white rounded-md px-3 py-1.5 text-sm"
                    >
                        فاتورة
                    </button>
                    </a>
                </td>
                <td
                class="py-2"
                >
                    <div class="flex justify-center items-center gap-2">
                        <button  value="{{$item->id}}"
                        class="bg-green-500 edit text-white rounded-md px-3 py-1.5 text-sm"
                        >
                            تعديل
                        </button>
                        <a href="/Delete/{{$item->id}}">
                        <button
                        class="bg-red-500 text-white rounded-md px-3 py-1.5 text-sm"
                        >
                            حذف
                        </button>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

<div class="w-full flex justify-center items-center mt-4">
<div class="pagination flex justify-center mt-8">
        <a href="#" class="px-3 py-1 bg-gray-200 rounded-md mx-1 hover:bg-gray-300">السابق</a>
        <a href="#" class="px-3 py-1 bg-gray-200 rounded-md mx-1 hover:bg-gray-300">1</a>
        <a href="#" class="px-3 py-1 bg-gray-200 rounded-md mx-1 hover:bg-gray-300">2</a>
        <a href="#" class="px-3 py-1 bg-gray-200 rounded-md mx-1 hover:bg-gray-300">3</a>
        <a href="#" class="px-3 py-1 bg-gray-200 rounded-md mx-1 hover:bg-gray-300">4</a>
        <a href="#" class="px-3 py-1 bg-gray-200 rounded-md mx-1 hover:bg-gray-300">5</a>
        <a href="#" class="px-3 py-1 bg-gray-200 rounded-md mx-1 hover:bg-gray-300">التالي</a>
    </div>
</div>

<!-- end main  -->
<script>
    const dropMenu= document.getElementById('drop-menu');
const userBar= document.getElementById('user-bar');

userBar.addEventListener('click', function(){
    dropMenu.classList.toggle('active');
})


var sidebar=document.getElementById("sidebar");
var closeSidebar=document.getElementById("close-sidebar");
var sidebarMenu=document.getElementById("sidebar-menu");

sidebar.addEventListener("click", function(){
    sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu.classList.add("hidden");
    // lets add animate-slide-right

    if (sidebarMenu.classList.contains("animate-slide-right")) {
            sidebarMenu.classList.remove("animate-slide-right");
        } else {
            sidebarMenu.classList.add("animate-slide-right");
        }
})

closeSidebar.addEventListener("click", function(){
    sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu.classList.add("hidden");
    // lets add animate-slide-right

    if (sidebarMenu.classList.contains("animate-slide-right")) {
           sidebarMenu.classList.remove("animate-slide-right");
       } else {
           sidebarMenu.classList.add("animate-slide-right");
       }
}
)
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
$(document).ready(function(){
    $(document).on('click','.edit',function(){
        var contrat_id= $(this).val();
        $('#edditModal').modal('show');
    })
})



</script>
<div class="modal fade" id="edditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">التعديل على العقد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class=" rounded-md bg-white md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
                    <h1 class="text-gray-700">
                        اضافة تفاصيل العقد
                    </h1>
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col ">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="user-name">
                                اسم العميل
                            </label>
                            <input required id="user-name"  name='nom' type="text" placeholder="اسم العميل"
                                class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="address">
                                عنوان المشروع
                            </label>
                            <input required  id="address" type="text" name='adress' placeholder="عنوان المشروع"
                                class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="date">
                                تاريخ العقد
                            </label>
                            <input required name='date' id="date" type="date" placeholder=" تاريخ العقد"
                                class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="contract-number">
                                رقم العقد
                            </label>
                            <input  disabled id="contract-number" type="text" placeholder=" رقم العقد"
                                class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="date">
                              المبلغ الاجمالي
                            </label>
                            <input required id="fullprice" name="full_price" type="number" placeholder="المبلغ الاجمالي"
                                class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="contract-number" name=''>
                              المبلغ المدفوع
                            </label>
                            <input required id="contract-number" name="done_price" type="number" placeholder="المبلغ المدفوع"
                                class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
                        <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                            <label for="contract-number" name=''>
                                مع أقساط
                              </label>
                            <select name="credit" class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" name="yesno" id="yesno">
                                <option value="" disabled selected>اختر نعم أو لا</option>
                                <option value="نعم">نعم</option>
                                <option value="لا">لا</option>
                              </select>
                        </div>
                        <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                            <label style="display: none" for="contract-number" name='label' id='label'>
                              مبلغ الأقساط
                            </label>
                            <input id="credit_price" name="credit_price" type="number" placeholder="مبلغ الأقساط"
                                style="display: none" class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class=" flex rtl mt-2   gap-1 w-full">
                        <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                            <label for="project-description" >
                                وصف المشروع
                            </label>
                            <input required id="project-description" name='desc' type="text" placeholder="وصف المشروع"
                                class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                    </div>
                    <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                        <label for='acc'>
                            المتفق عليه
                        </label>
                        <input required id="acc" name='daccord' type="text" placeholder="المتفق عليه"
                            class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                    </div>
                    <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                        <label for='conditions' >
                            الشروط والاحكام
                        </label>
                        <input required id="conditions" name='condition' type="text" placeholder="  الشروط والاحكام"
                            class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-primary">حفظ</button>
            </div>
        </div>
    </div>
</div>


</html>
