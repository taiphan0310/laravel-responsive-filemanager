<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <main class="">
        <header class="flex justify-between border-b border-gray-500 bg-white">
            <div class="h-full m-2 w-1/4">
                <div class="h-full border inline-block hover:bg-green-500 bg-green-600 cursor-pointer p-1.5">
                    <button class=" text-white font-bold px-3 mr-2 text-xs ">
                        <span class="material-icons-outlined relative top-1 mr-0.5">file_upload</span>
                        <span class="-top-1 relative">Upload</span>
                    </button>
                </div>

                <div class="h-full border bg-gray-100 hover:bg-gray-300 inline-block p-1.5 hover:cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">library_add</span>
                    </a>
                </div>
                
                <div class="h-full border bg-gray-100 hover:bg-gray-300 inline-block p-1.5 hover:cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">create_new_folder</span>
                    </a>
                </div>
            </div>
            <div class="h-full m-2 relative">
                <div class="h-full border hover:bg-gray-300 inline-block p-1.5 hover:cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">grid_view</span>
                    </a>
                </div>
                
                <div class="h-full border hover:bg-gray-300 inline-block p-1.5 hover:cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">view_list</span>
                    </a>
                </div>

                <div class="h-full border hover:bg-gray-300 inline-block p-1.5 hover:cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">view_column</span>
                    </a>
                </div>
            </div>
            <div class="h-full m-2 flex w-1/4">
                <div class="h-full ml-2 border bg-gray-100 hover:bg-gray-300 inline-block p-1.5 cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">insert_drive_file</span>
                    </a>
                </div>
                <div class="h-full ml-1 border bg-gray-100 hover:bg-gray-300 inline-block p-1.5 cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">image</span>
                    </a>
                </div>
                <div class="h-full ml-1 border bg-gray-100 hover:bg-gray-300 inline-block p-1.5 cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">snippet_folder</span>
                    </a>
                </div>
                <div class="h-full ml-1 border bg-gray-100 hover:bg-gray-300 inline-block p-1.5 cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">movie</span>
                    </a>
                </div>
                <div class="h-full ml-1 border bg-gray-100 hover:bg-gray-300 inline-block p-1.5 cursor-pointer">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">library_music</span>
                    </a>
                </div>
                <input type="text" class="ml-2 h-11 border w-full px-3" placeholder="Expression">   
                <div class="h-full ml-1 border bg-black hover:bg-gray-800 inline-block p-1.5 cursor-pointer text-white">
                    <a href="#!" class= "font-bold px-1.5">
                        <span class="material-icons-outlined relative top-1">clear_all</span>
                    </a>
                </div>  
            </div>
        </header>
        <div class="h-full p-3">
            <div class="breadcrumb w-full bg-gray-200 shadow p-1.5"> 
                dasd
            </div>
            <div class="file-grid"></div>
        </div>
    </main>
</body>
</html>