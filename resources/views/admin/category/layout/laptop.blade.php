<form action="" method="post" class="w-full mb-4">\n
    <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chi tiết</div>\n
    <div class="bg-white rounded-b-lg shadow-lg border-b border-slate-300">\n       <div class="mb-2">
            <div class="border-b mx-2 px-2 border-slate-300 py-2 text-lg font-semibold">Màn hình</div>
            <div class="flex flex-col md:flex-row flex-wrap px-2">

               <div class="w-1/2 py-2">
                    <div>Độ phân giải màn hình</div>
                    <div>
                        <input class="w-24 border border-slate-300" type="number" name="screen_resolution[]" id=""> + 
                        <input class="w-24 border border-slate-300" type="number" name="screen_resolution[]" id="">

                    </div>
                </div>
               <div class="w-1/2 py-2">
                    <div>Kích thước màn hình</div>
                    <div>
                        <input class="w-24 border border-slate-300" type="number" name="screen_size" id="">"

                    </div>
                </div>
               <div class="w-1/2 py-2">
                    <div>Công nghệ màn hình</div>
                    <input class="w-72 border border-slate-300" type="text" name="screen_tech" id="">
                </div>
           </div>
        </div>
        <div class="mb-2 text-right">
            <button class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Thêm sản phẩm</button>
        </div>
    </div>
</form>