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

<body class=' scrollbar-thin w-full relative h-screen flex items-center flex-col justify-start bg-gray-100'>
    <!-- nav bar  -->
    @include('navBar')
    <!-- end nav bar  -->

    <!-- sidebar  -->
    <div id="sidebar-menu"
        class=" p-3 rtl z-[99] w-72 h-screen bg-white shadow-md fixed top-0  right-0  hidden flex-col justify-start items-center py-5">
        <div class="logo w-full flex justify-between  items-center">
            <h1 class="text-lg font-bold text-gray-700">لوحة التحكم</h1>
            <button id="close-sidebar"
                class="outline-none flex justify-center items-center text-xl focus:outline-none text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="22"
                    height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>

        </div>
        <hr class="w-full my-2">
        <div
            class=' mt-3 flex justify-start w-full items-center hover:text-gray-600 duration-500 transition-all ease-in-out  text-gray-500 '>
            <a href="">
                انشاء عقد جديد
            </a>
        </div>
        <div
            class=' mt-3 flex justify-start w-full items-center hover:text-gray-600 duration-500 transition-all ease-in-out  text-gray-500 '>
            <a href="">
                العقود
            </a>
        </div>
        <div
            class=' mt-3 flex justify-start w-full items-center hover:text-gray-600 duration-500 transition-all ease-in-out  text-gray-500 '>
            <a href="">
                الفواتير
            </a>
        </div>
    </div>

    <!-- end sidebar  -->

    <!-- main  -->

    <div class=" rounded-md bg-white mt-20 md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
        <h1 class="text-gray-700">
            اضافة تفاصيل العقد
        </h1>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col ">
            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="user-name" name='user-name'>
                    اسم العميل
                </label>
                <input id="user-name" type="text" placeholder="اسم العميل"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-80 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="address" name='address'>
                    عنوان المشروع
                </label>
                <input id="address" type="text" placeholder="عنوان المشروع"
                    class="border border-gray-500  text-sm rounded-md p-2 w-80 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="date" name='date'>
                    تاريخ العقد
                </label>
                <input id="date" type="date" placeholder=" تاريخ العقد"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="contract-number" name='contract-number'>
                    رقم العقد
                </label>
                <input id="contract-number" type="text" placeholder=" رقم العقد"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full">
            <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                <label for="project-description" name='project-description'>
                    وصف المشروع
                </label>
                <input id="project-description" type="text" placeholder="وصف المشروع"
                    class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
            <label for='acc' name='acc'>
                المتفق عليه
            </label>
            <input id="acc" type="text" placeholder="المتفق عليه"
                class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
        <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
            <label for='conditions' name='conditions'>
                الشروط والاحكام
            </label>
            <input id="conditions" type="text" placeholder="  الشروط والاحكام"
                class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
    </div>

    </div>

    <div class="w-full py-7 mt-6 flex rtl justify-center items-center gap-5 ">
        <button
            class="bg-slate-400 text-white rounded-md p-2 px-4 hover:bg-slate-400 transition-all ease-in-out duration-500">
            الغاء العقد
        </button>
        <button
            class=" bg-indigo-500 text-white rounded-md p-2 px-4 hover:bg-indigo-600 transition-all ease-in-out duration-500">
            انشاء العقد
        </button>
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
            })

            closeSidebar.addEventListener("click", function() {
                sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu
                    .classList.add("hidden");
            })
        </script>
    </div>

</html>
