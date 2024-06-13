<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Add Category</title>
</head>

<!-- #8739f9 primary -->
<!-- #37B9F1 secondary -->
<!-- #F2F5F5 third -->

<body>
    <x-side-bar></x-side-bar>
    <div class="ml-64">
        <x-admin-nav router='admin / addcategory' titlepage='Add Category' photo="{{ URL::to('/assets/profiles/' . $authUser['photo'])}}"></x-admin-nav>
        <div class="p-4">
            <!-- form add category -->
            <form method="POST" action="/admin/addcategory" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center">
                    <div class="w-full md:w-1/2 xl:w-1/2 px-3 mb-6">
                        <label for="category_name" class="block mb-2 text-sm font-medium text-gray-700">Nama Kategori</label>
                        <input type="text" id="name" class="block w-full p-2 pl-10 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="category_name" required>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-full md:w-1/2 xl:w-1/2 px-3 mb-6">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="description" class="block w-full p-2 pl-10 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="description" required></textarea>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-full md:w-1/2 xl:w-1/2 px-3 mb-6">
                        <label for="path" class="block mb-2 text-sm font-medium text-gray-700">Foto</label>
                        <input type="file" id="image" class="block w-full p-2 pl-10 text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" name="path" required>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-peachy-brown text-slate-800 py-2 px-4 rounded-lg">Tambah Kategori</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>