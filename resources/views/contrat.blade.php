<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <title>
    </title>
    @vite('resources/css/app.css')
</head>

<body class=' scrollbar-thin w-full relative h-screen flex items-center flex-col justify-start bg-gray-100'>

     <!-- Show Done Alert -->
     @if (session()->has('message'))
     <script>
                 Swal.fire(
                     'تم اضافة الدورة الى السلة بنجاح',
                     '! يمكنك اضافة المزيد . تابع التصفح ',
                     'success'
                 )
     </script>
    @endif


    <!-- nav bar  -->
    @include('navBar')
    <!-- end nav bar  -->
    @include('side-bar')
    <!-- sidebar  -->


    <!-- end sidebar  -->

    <!-- main  -->
    <form action="{{ route('Store') }}" class=" rounded-md bg-white mt-20 md:w-[90%] p-6 flex flex-col justify-start items-start rtl" method="POST">
        @csrf
    <div class=" rounded-md bg-white mt-20 md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
        <h1 class="text-gray-700">
            اضافة تفاصيل العقد
        </h1>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col ">
            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="user-name">
                    اسم العميل
                </label>
                <input  id="user-name"  name='name' type="text" placeholder="اسم العميل"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="address">
                    عنوان المشروع
                </label>
                <input  id="address" type="text" name='adress' placeholder="عنوان المشروع"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="date">
                    تاريخ العقد
                </label>
                <input  name='date' id="date" type="date" placeholder=" تاريخ العقد"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="contract-number">
                    رقم العقد
                </label>
                <input  id="contract-number"  name='num_contrat' type="text" placeholder=" رقم العقد"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="date">
                  المبلغ الاجمالي
                </label>
                <input  id="fullprice" name="full_price" type="number" placeholder="المبلغ الاجمالي"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="contract-number" name=''>
                  المبلغ المدفوع
                </label>
                <input  id="contract-number" name="done_price" type="number" placeholder="المبلغ المدفوع"
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
                <input  id="credit_price" name="credit_price" type="number" placeholder="مبلغ الأقساط"
                    style="display: none" class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full">
            <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
                <label for="project-description" >
                    وصف المشروع
                </label>
                <input  id="project-description" name='desc' type="text" placeholder="وصف المشروع"
                    class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
            <label for='acc'>
                المتفق عليه
            </label>
            <input  id="acc" name='daccord' type="text" placeholder="المتفق عليه"
                class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
        <div class="group-input flex w-full flex-col gap-2 justify-start items-start rtl">
            <label for='conditions' >
                الشروط والاحكام
            </label>
            <input  id="conditions" name='condition' type="text" placeholder="  الشروط والاحكام"
                class="border border-gray-500 text-start  text-sm rounded-md p-2 w-full h-32 focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
    </div>

    </div>

    <div class="w-full py-7 mt-6 flex rtl justify-center items-center gap-5 ">
        <button type="submit"
            class=" bg-indigo-500 text-white rounded-md p-2 px-4 hover:bg-indigo-600 transition-all ease-in-out duration-500">
            انشاء العقد
        </button>
    </div>
</form>
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
    })

    closeSidebar.addEventListener("click", function() {
        sidebarMenu.classList.contains("hidden") ? sidebarMenu.classList.remove("hidden") : sidebarMenu
            .classList.add("hidden");
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
