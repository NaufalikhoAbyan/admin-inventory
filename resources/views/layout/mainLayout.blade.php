
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    <div class="flex body-bg">
        <div class="main-bg grow-0 text-white p-4 h-screen">
            <div class="text-2xl text-center">ADMIN INVENTORY</div>
            <hr class="my-4">
            
            <div><i class="fa-solid fa-gauge"></i> Dashboard</div>
            <hr class="my-4">
            <div class="text-xs opacity-60 font-bold">TABEL</div>
            <div class="mt-3"><i class="fa-solid fa-table"></i> Kategori</div>
            <div class="mt-3"><i class="fa-solid fa-table"></i> Barang</div>
            <div class="mt-3"><i class="fa-solid fa-table"></i> Barang Masuk</div>
            <div class="mt-3"><i class="fa-solid fa-table"></i> Barang Keluar</div>
        </div>
        <div class="grow">
            <div class="h-fit bg-white p-6 flex shadow-lg">
                <div class="w-full flex">
                    <div class="w-1/3"><input class="body-bg p-2 rounded-l w-full" type="text" placeholder="Search for"></div>
                    <div class="text-white main-bg flex items-center rounded-r"><i class="fa-solid fa-magnifying-glass p-2"></i></div>
                </div>
                <div class="flex items-center ">
                    <div>Login</div>
                    <div class="ml-6">Register</div>
                </div>
            </div>
            
            <div class="p-4">
                @yield('content')
            </div>
        </div>  
    </div>
    
</body>
</html>