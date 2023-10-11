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

<body class=' scrollbar-thin w-full relative h-screen flex items-center flex-col justify-start bg-gray-100'>
    <!-- nav bar  -->
    @include('navBar')
    <!-- end nav bar  -->
     <!-- end nav bar  -->
     @include('side-bar')
     <!-- sidebar  -->


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
