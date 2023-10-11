<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>
        </title>
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
        <a href="">
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
                      اقسام كل شهر
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
            <tr
            class="border-b border-slate-100"
            >
                <td
                class="py-2 truncate"
                >
                    احمد محمد
                </td>
                <td
                class="py-2 truncate"
                >
                    123456
                </td>
                <td
                class="py-2"
                >
                    12/12/2021
                </td>
                <td
                class="py-2"
                >
                    1000
                </td>
                <td
                class="py-2"
                >
                    1000
                </td>
                <td
                class="py-2"
                >
                    100
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
                        <a href="">
                        <button
                        class="bg-red-500 text-white rounded-md px-3 py-1.5 text-sm"
                        >
                            حذف
                        </button>
                        </a>
                    </div>
                </td>
            </tr>
            <tr
            class="border-b border-slate-100"
            >
                <td
                class="py-2 truncate"
                >
                    محمد علي
                </td>
                <td
                class="py-2 truncate"
                >
                    789012
                </td>
                <td
                class="py-2"
                >
                    01/01/2022
                </td>
                <td
                class="py-2"
                >
                    2000
                </td>
                <td
                class="py-2"
                >
                    1500
                </td>
                <td
                class="py-2"
                >
                    200
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
                        <a href="">
                        <button
                        class="bg-red-500 text-white rounded-md px-3 py-1.5 text-sm"
                        >
                            حذف
                        </button>
                        </a>
                    </div>
                </td>
            </tr>
            <tr
            class="border-b border-slate-100"
            >
                <td
                class="py-2 truncate"
                >
                    علي احمد
                </td>
                <td
                class="py-2 truncate"
                >
                    345678
                </td>
                <td
                class="py-2"
                >
                    05/02/2022
                </td>
                <td
                class="py-2"
                >
                    3000
                </td>
                <td
                class="py-2"
                >
                    2000
                </td>
                <td
                class="py-2"
                >
                    300
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
                        <a href="">
                        <button
                        class="bg-red-500 text-white rounded-md px-3 py-1.5 text-sm"
                        >
                            حذف
                        </button>
                        </a>
                    </div>
                </td>
            </tr>
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
