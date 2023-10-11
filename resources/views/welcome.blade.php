<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>
    </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.min.js" integrity="sha512-3PL7jW3xI1EjF2Hfqwv5u6nKG/BnUbWytnJDhsY/q5CbIB5XzoHNhJvgmFeVD7xgC9DbKDm+gPP9uDAAfLAZUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/css/app.css')
</head>

<body class=' font-cairo overflow-x-hidden scrollbar-thin w-full relative h-screen flex items-center flex-col justify-start bg-gray-100'>
    <!-- nav bar  -->
    @include('navBar')
    <!-- end nav bar  -->
     <!-- end nav bar  -->
     <!-- sidebar  -->
     @include('side-bar')
    <!-- end sidebar  -->
    <div class="w-full md:w-[90%] px-4 md:p-0 rtl flex mt-24 justify-start items-center ">
    <div class="group flex ">
        <a href="/">
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
            <p
            class="text-violet-500 text-sm"
            >
                الاحصائيات
            </p>
    </div>
</div>
    <div
    class="w-full md:w-[90%] rtl flex mt-24  justify-start flex-col gap-3 items-center "
    >
    <main
    class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 place-items-start gap-3 "
    >
    <div class="card relative rtl min-h-[10rem] border-[1.5px] border-slate-300 bg-white overflow-hidden w-full col-span-1 max-w-[20rem] flex-col rounded-md flex p-2 justify-start items-start">
        <div class="w-40 h-40 rounded-full  -top-6 filter blur-3xl bg-cyan-500/50 absolute"></div>
        <h1
        class="text-cyan-700 "
        >
        عدد العقود الكلي
        </h1>
       <div class="w-full flex justify-center items-center">
       <p
        class="text-gray-500 text-2xl mt-5 "
        >
            100 عقد
        </p>
       </div>
    </div>
    <div class="card rtl min-h-[10rem] border-[1.5px] border-slate-300 bg-white overflow-hidden relative w-full col-span-1 max-w-[20rem] flex-col rounded-md flex p-2 justify-start items-start">
    <div class="w-40 h-40 rounded-full  -top-6 filter blur-3xl bg-violet-500/50 absolute"></div>

        <h1
        class="text-violet-700 "
        >
        عدد العملاء الكلي
        </h1>
       <div class="w-full flex justify-center items-center">
       <p
        class="text-gray-500 text-2xl mt-5 "
        >
            100 عميل
        </p>
       </div>
    </div>
    <div class="card rtl min-h-[10rem] border-[1.5px] border-slate-300 bg-white overflow-hidden relative w-full col-span-1 max-w-[20rem] flex-col rounded-md flex p-2 justify-start items-start">
    <div class="w-40 h-40 rounded-full z-0  -top-6 filter blur-3xl bg-red-500/50 absolute"></div>

        <h1
        class="text-emerald-700 "
        >
        المبلغ الكلي للعقود
        </h1>
       <div class="w-full flex justify-center items-center">
       <p
        class="text-gray-500 text-2xl mt-5 "
        >
            100000 ريال
        </p>
       </div>
    </div>
    </main>
    <div class="w-full flex justify-start items-start flex-col">
    <h1
    class="text-gray-500 text-lg mt-5"
    >
        اخر العقود المضافة
    </h1>
    <p
    class=" text-slate-300  text-sm mt-2"
    >
    من خلال هذه الصفحة يمكنك مشاهدة اخر العقود المضافة
    </p>
    </div>
    <!--table-->
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
           
        </tbody>
    </table>
    </div>

    
    <!-- main  -->
</html>
<script>
    const dropMenu = document.getElementById('drop-menu');
    const userBar = document.getElementById('user-bar');

    userBar.addEventListener('click', function() {
        dropMenu.classList.toggle('active');
    })


    var sidebar = document.getElementById("sidebar");
    var closeSidebar = document.getElementById("close-sidebar");
    var sidebarMenu = document.getElementById("sidebar-menu");

    sidebar.addEventListener("click", function() {
        sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu
            .classList.add("hidden");
        // lets add animate-slide-right

        if (sidebarMenu.classList.contains("animate-slide-right")) {
            sidebarMenu.classList.remove("animate-slide-right");
        } else {
            sidebarMenu.classList.add("animate-slide-right");
        }
    })

    closeSidebar.addEventListener("click", function() {
        sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu
            .classList.add("hidden");
        // lets add animate-slide-right
       
       if (sidebarMenu.classList.contains("animate-slide-right")) {
           sidebarMenu.classList.remove("animate-slide-right");
       } else {
           sidebarMenu.classList.add("animate-slide-right");
       }
    })

    document.getElementById('yesno').addEventListener('change', function() {
    var selectedValue = this.value;
    var label = document.getElementById('label');
    var input = document.getElementById('credit_price');

    if (selectedValue === 'نعم') {
        input.style.display = 'block';
        label.style.display = 'block';
    } else {
        label.style.display = 'none';
        input.style.display = 'none';
    }
});

</script>
