$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    console.log([id, url]);
    if(confirm('Bạn có muốn xóa hàng này không? Dữ liệu đã xóa không thế khôi phục?')) {
        $.ajax({
            type: 'DELETE',
            dataType: 'JSON',
            data: { id },
            url: url,
            success: function (result) {
                if (!result.error) {
                    alert(result.msg);
                    location.reload();
                } else {
                    alert('Đã có lỗi xảy ra, vui lòng thử lại');
                }
            }
        })
    }
}
function convertToSlug(text) {
    return text
      .toLowerCase()                     // Convert to lowercase
      .trim()                             // Remove leading/trailing spaces
      .replace(/\s+/g, '-')               // Replace multiple spaces with a single hyphen
      .replace(/[^a-z0-9-]/g, '')         // Remove non-alphanumeric characters (except hyphens)
      .replace(/-+/g, '-')                // Replace multiple hyphens with a single hyphen
      .replace(/^-|-$/g, '');             // Remove leading/trailing hyphens
  }

function uploadImg(imgInput) {
    // console.log(imgInput.files[0].name);
    
    let slug = convertToSlug((document.querySelector("#product_name").value));
    if (slug.length != 0) {
        if (document.querySelector("#edition").value.length != 0) {
            slug = convertToSlug(slug + " " + document.querySelector("#edition").value);
        }
        if (document.querySelector("#color").value.length != 0) {
            slug = convertToSlug(slug + " " + document.querySelector("#color").value.trim());
        }
        console.log(imgInput.files.length);
        for (let i = 0; i < imgInput.files.length; i++) {
            const form = new FormData();
            form.append('file', imgInput.files[i]);
            form.append('slug', slug);
            $.ajax({
                processData: false,
                contentType: false,
                type: "POST",
                dataType: "JSON",
                data: form,
                url: "/admin/upload/services/productImage",
                success: function(result) {
                    if (!result.error) {
                        alert('Tải ảnh lên thành công');
                        $('#images_container').append(`<img src="http://127.0.0.1:8000/${result.msg}" class="h-20">`);
                    } else {
                        alert("Đã xảy ra lỗi, vui lòng thử lại")
                    }
                }
            })
        }
    } else {
        alert("Hãy nhập tên sản phẩm trước");
        imgInput.value = null;
    }
}

function uploadThumbnail(imgInput) {
    // console.log(imgInput.files[0].name);
    let slug = convertToSlug((document.querySelector("#product_name").value).trim());
    if (slug.length != 0) {
        if (document.querySelector("#edition").value.length != 0) {
            slug = convertToSlug(slug + " " + document.querySelector("#edition").value.trim());
        }
        if (document.querySelector("#color").value.length != 0) {
            slug = convertToSlug(slug + " " + document.querySelector("#color").value.trim());
        }
        const form = new FormData();
        form.append('file', imgInput.files[0]);
        form.append('slug', slug);
        form.append('thumbnail', true);
        $.ajax({
            processData: false,
            contentType: false,
            type: "POST",
            dataType: "JSON",
            data: form,
            url: "/admin/upload/services/thumbnail",
            success: function(result) {
                if (!result.error) {
                    alert('Tải ảnh lên thành công');
                    $('#thumbnail-image').attr('src', `http://127.0.0.1:8000/${result.msg}`);
                } else {
                    alert("Đã xảy ra lỗi, vui lòng thử lại")
                }
            }
        })
    } else {
        alert("Hãy nhập tên sản phẩm trước");
        imgInput.value = null;
    }
}

function deleteImgUpload(btn) {
    imgUploadRow = btn.closest('.img-upload-row');
    images = document.querySelector("#images_container").querySelectorAll("img");
    images.forEach(img => {
        if (img.src.includes(imgUploadRow.querySelector("input").files[0].name)) {
            img.remove();
            return;
        }
    });
    imgUploadRow.remove();
}

function changeVendor() {
    const category = document.querySelector("#category");
    console.log(category.value);
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data: {
            category: category.value
        },
        url: "/admin/xem-hang",
        success: function (result) {
            const vendorSelector = document.querySelector("#vendor");
            vendorSelector.innerHTML = "";
            result.vendors.forEach(vendor => {
                vendorSelector.innerHTML += `<option value="${vendor.slug}">${vendor.vendor_name}</option>`;
            });
        }
    })
}

function changeVendorEdit() {
    const category = document.querySelector("#category");
    const product = document.querySelector('#product_id');
    if (product.value != "") {
        const vendorSelector = document.querySelector("#vendor");
        console.log([category.value, product.value]);
        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: {
                category: category.value,
                product: product.value
            },
            url: "/admin/xem-hang",
            success: function (result) {
                console.log(result);
                vendorSelector.innerHTML = result.html;
            }
        })
    } else {
        changeVendor();
    }
}

changeVendorEdit();

function searchProduct(searchBar) {
    const dropdown = document.querySelector("#dropdown");
    if (searchBar.value.trim() !== "") {
        dropdown.classList.remove("hidden");
        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: {
                product_name: searchBar.value
            },
            url: "/tim-kiem-san-pham",
            success: function (result) {
                html = ``;
                result.products.forEach(product => {
                    let colorHtml = product.color ? ` - `+product.color : ``;
                    let color = product.color ? product.color : ``;
                    let edition = product.edition ? product.edition : ``;
                    let editionHtml = product.edition ? ` - `+product.edition : ``;
                    let path = product.thumbnail ? `http://127.0.0.1:8000/`+product.thumbnail : ``;
                    html += `<li class="px-4 py-2 cursor-pointer hover:bg-gray-100">
                    
                    <a href="javascript:selectProdctInSearch(${product.id}, '${product.product_name}', '${path}', '${product.category}', '${edition}', '${color}', '${product.price}')" class="flex flex-row gap-4">
                    <img class="w-14 md:w-20" src="${path}">
                    <div class="flex flex-col">
                        <div>${product.product_name}${editionHtml}${colorHtml}</div>
                        <div class="text-red-500 text-sm font-semibold">${product.price.toLocaleString()}đ</div>
                    </div>
                    </a>
                    
                    </li>`;
                })
                dropdown.querySelector("ul").innerHTML = html;
            }
        })
    } else {
        dropdown.classList.add("hidden");
    }
}

function selectProdctInSearch(id, product_name, path, category, edition, color, price) {
    console.log([id, product_name, path, category, edition, color, price])
    if ($("#product_list") == null) {
        $("#product_id").val(id);
        $("#product_name").val(product_name);
        $("#edition").val(edition);
        $("#color").val(color);
        $("#price").val(price);
        $("#thumbnail").attr('src', path);
        $('#category').val(category);
        document.querySelector("#dropdown").classList.add("hidden");
        changeVendorEdit();
    } else {
        html = 
`<div class="md:w-1/2 flex flex-row justify-between items-center">
    <div class="flex flex-row gap-4">
        <input type="hidden" name="product_id[]" value="${id}">
        <img src="${path}" alt="" class="h-28 md:h-32">
        <div class="flex flex-col">
            <div>${product_name} ${edition} ${color}</div>
            <div class="font-semibold text-red-500">${parseInt(price).toLocaleString()} đ</div>
        </div>
    </div>
    <button type="button" onclick="removeProductInProductList(this)" class="bg-red-300 p-2">x</button>
</div>`;
        document.querySelector('#product_list').innerHTML += html;
        document.querySelector("#dropdown").classList.add("hidden");
    }
}

function removeProductInProductList(removeBtn) {
    removeBtn.parentElement.remove();
}

function changeAgency() {
    const province = document.querySelector("#province");
    console.log("/admin/xem-chi-nhanh/" + province.value);
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data: {
            province: province.value
        },
        url: "/admin/xem-chi-nhanh",
        success: function (result) {
            const agencySelector = document.querySelector("#agency");
            agencySelector.innerHTML = "";
            result.agencies.forEach(agency => {
                agencySelector.innerHTML += `<option value="${agency.id}">${agency.agency_name}</option>`;
            });
        }
    })
}

function changeAgencyEdit(agency_id) {
    const province = document.querySelector("#province");
    console.log(province.value);
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data: {
            province: province.value,
            agency_id: agency_id
        },
        url: "/admin/xem-chi-nhanh/",
        success: function (result) {
            const agencySelector = document.querySelector("#agency");
            agencySelector.innerHTML = result.html;
        }
    })
}

function uploadAvatar(imgInput) {
    console.log(imgInput.files[0].name);
    const form = new FormData();
    form.append('file', imgInput.files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: "POST",
        dataType: "JSON",
        data: form,
        url: "/admin/upload/services/avatar",
        success: function(result) {
            if (!result.error) {
                alert('Tải ảnh lên thành công');
                $('#avatar-image').attr('src', `http://127.0.0.1:8000/${result.msg}`);
            } else {
                alert("Đã xảy ra lỗi, vui lòng thử lại")
            }
        }
    })
}

function uploadMyAccountAvatar(imgInput) {
    console.log(imgInput.files[0].name);
    const form = new FormData();
    form.append('file', imgInput.files[0]);
    $.ajax({
        processData: false,
        contentType: false,
        type: "POST",
        dataType: "JSON",
        data: form,
        url: "/admin/upload/services/avatar",
        success: function(result) {
            if (!result.error) {
                alert('Tải ảnh lên thành công');
                $('#new-avatar-image').attr('src', `http://127.0.0.1:8000/${result.msg}`);
            } else {
                alert("Đã xảy ra lỗi, vui lòng thử lại")
            }
        }
    })
}

function toggleProductList() {
    console.log(true);
    document.querySelector('#product_search').disabled = document.querySelector('#allProduct').checked;
    if (document.querySelector('#allProduct').checked)
        document.querySelector('#product_list').classList.add('hidden');
    else document.querySelector('#product_list').classList.remove('hidden');
}