<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>
    </title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('build/assets/app-5eb15360.css')}}">
    <script type="module" scr="{{asset('build/assets/app-588b3994.js')}}"></script>
</head>

<body class=' font-cairo overflow-x-hidden scrollbar-thin w-full relative h-screen flex items-center flex-col justify-start bg-gray-100'>
    <!-- nav bar  -->
    @include('navBar')
    <!-- end nav bar  -->
     <!-- end nav bar  -->
     <!-- sidebar  -->
     @include('side-bar')
    <!-- end sidebar  -->
    @if (session()->has('message'))
    <script>
                Swal.fire(
                    "تم بنجاح",
                    '',
                    'success'
                )
    </script>
   @endif
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
            {{$sumofcontrat}} عقود
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
            {{$sumofprice}} درهم
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
    من خلال هذه الصفحة يمكنك مشاهدة اخر 3 عقود مضافة
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
                <button value="{{$item->id}}" class="bg-green-500 view text-white rounded-md px-3 py-1.5  text-sm">
                    عقد
                </button>


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

    <!-- main  -->
    @include('script')
    @include("modalEdit");
</html>
