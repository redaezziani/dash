<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>
        </title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

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
                    {{ $item->credit }}
                </td>
                <td
                class="py-2"
                >
                    {{ $item->full_price - $item->done_price}}
                </td>
                <td
                class="py-2"
                >
                    {{ $item->credit_price}}
                </td>
                <td
                class="py-2"
                >
                    <a href="">
                    <button
                    class="bg-green-500 text-white rounded-md px-3 py-1.5 text-sm"
                    >
                        عقد
                    </button>
                    </a>
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
                        <a href="">
                        <button
                        class="bg-green-500 text-white rounded-md px-3 py-1.5 text-sm"
                        >
                            تعديل
                        </button>
                        </a>
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

</script>
</div>
</html>
