<nav
class='w-full md:w-[90%] rounded-none md:rounded-md z-50  rtl flex items-center justify-between bg-white shadow-md p-4 sm:px-10  fixed top-0 '
>
<div class="rtl">
    <button
    id="sidebar"
    >
    <i class='bx bx-menu text-gray-600 text-3xl'></i>
    </button>
</div>
<!--
    search bar
-->

<!--userbar -->
<div class="group  ml-10 flex gap-5 justify-center items-center rtl">
         <div class=" cursor-pointer notifecation relative text-xl mt-2 ">
        <i class='bx bxs-envelope text-gray-600 '></i>
        <span class="absolute top-0  right-0 w-2 h-2 bg-red-500 rounded-full text-white text-xs flex justify-center items-center"></span>
         </div>
         <div class=" cursor-pointer notification relative text-xl mt-2">
           <i class='bx bxs-bell text-gray-600 ' ></i>
           <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full text-white text-xs flex justify-center items-center"></span>
         </div>
<div
id="user-bar"
class="user-bar flex relative  justify-center px-3  items-center">
    <div class="w-10 z-10 cursor-pointer bg-gray-400 h-10 rounded-md overflow-hidden ">
        <img
        class="w-full h-full object-cover"
        src="{{asset('images/Avatar=545.png')}}"
        />
    </div>
    <div
    id="drop-menu"
    class="drop-menu  w-36 border-slate-300/50 border  z-0  p-2 absolute top-16 gap-1 bg-white rounded-md hidden flex-col justify-start items-start rtl">
        <a href="#" class="text-gray-500 text-sm hover:text-gray-600 transition-all ease-in-out duration-500">الملف الشخصي</a>
        <hr class="w-full my-1">
        <a href="#" class="text-gray-500 text-sm hover:text-gray-600 transition-all ease-in-out duration-500">الاعدادات</a>
        <hr class="w-full my-1">
        <a href="#" class="text-red-500 hover:text-red-600 transition-all ease-in-out duration-500 text-sm ">تسجيل الخروج</a>
    </div>
</div>
</div>
</nav>