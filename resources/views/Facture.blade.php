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

<body class=' font-cairo overflow-x-hidden scrollbar-thin w-full relative h-screen flex items-center flex-col justify-start bg-gray-100'>

     <!-- Show Done Alert -->
     @if (session()->has('message'))
     <script>
                 Swal.fire(
                     'تمت الاضافة بنجاح',
                     '',
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
    <form action="{{ route('Store-Facture') }} " class=" rounded-md bg-white mt-20 md:w-[90%] p-6 flex flex-col justify-start items-start rtl" method="POST">
        @csrf
    <div class=" rounded-md bg-white mt-20 md:w-[90%] p-6 flex flex-col justify-start items-start rtl">
        <h1 class="text-gray-700">
            اضافة فاتورة
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
                    عنوان العميل
                </label>
                <input required id="address" type="text" name='adress' placeholder="عنوان العميل"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="date">
                    تاريخ الفاتورة
                </label>
                <input required name='date' id="date" type="date" placeholder=" تاريخ العقد"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="contract-number">
                    رقم الهاتف
                </label>
                <input required value="" name="phone" id="contract-number" type="text" placeholder=" رقم الهاتف"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
            <div class="group-input w-1/2 sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="date">
                  رقم الهوية
                </label>
                <input  required id="fullprice" name="ident" type="number" placeholder="رقم الهاتف"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-1/2 flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="contract-number" name=''>
                  وصف الفاتورة
                </label>
                <input  required id="contract-number" name="desc" type="text" placeholder="وصف الفاتورة"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>
        <div class=" flex rtl mt-2   gap-1 w-full md:flex-row flex-col">
            <div class="group-input w-[25%] sm:w-full  flex flex-col gap-2 justify-start items-start rtl">
                <label for="date">
                  المبلغ الاجمالي
                </label>
                <input  required id="fullprice" name="full_price" type="number" placeholder="المبلغ الاجمالي"
                    class="border border-gray-500  text-sm  rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-[25%] flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="contract-number" name=''>
                  المبلغ المدفوع
                </label>
                <input  required id="contract-number" name="done_price" type="number" placeholder="المبلغ المدفوع"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            <div class="group-input w-[25%] flex sm:w-full flex-col gap-2 justify-start items-start rtl">
                <label for="contract-number" name=''>
                  المبلغ المتبقي
                </label>
                <input  required id="contract-number" name="credit_price" type="number" placeholder="المبلغ المتبقي"
                    class="border border-gray-500  text-sm rounded-md p-2 w-72 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
        </div>

        @for($i = 1; $i <= 9; $i++)
        <div class=" flex rtl mt-2   gap-2 w-full md:flex-row flex-col">
        <div class="group-input md:w-[25%] w-full  flex flex-col gap-2 justify-start items-start rtl">
            <label for="desc_facture_{{ $i }}"> الوصف {{ $i }}</label>
            <input  id="desc_facture_{{ $i }}" name="desc_facture_{{ $i }}" type="text" placeholder="الوصف" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
        <div class="group-input md:w-[25%] flex w-full flex-col gap-2 justify-start items-start rtl">
            <label for="qte_{{ $i }}"> الكمية {{ $i }}</label>
            <input  id="qte_{{ $i }}" name="qte_{{ $i }}" type="number" placeholder="الكمية" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
        <div class="group-input md:w-[25%] flex w-full flex-col gap-2 justify-start items-start rtl">
            <label for="price_qte_{{ $i }}"> سعر الوحدة {{ $i }}</label>
            <input  id="price_qte_{{ $i }}" name="price_qte_{{ $i }}" type="number" placeholder="سعر الوحدة" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
        <div class="group-input md:w-[25%] flex w-full flex-col gap-2 justify-start items-start rtl">
            <label for="total_qte_{{ $i }}">  السعر الكلي {{ $i }} </label>
            <input readonly id="total_qte_{{ $i }}" name="total_qte_{{ $i }}" type="number" placeholder="السعر الكلي" class="border border-gray-500 text-sm rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
    </div>
    @endfor

    </div>

    </div>

    <div class="w-full py-7 mt-6 flex rtl justify-center items-center gap-5 ">
        <button type="submit"
            class=" bg-indigo-500 text-white rounded-md p-2 px-4 hover:bg-indigo-600 transition-all ease-in-out duration-500">
            انشاء الفاتورة
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
            .classList.add("hidden ");

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
