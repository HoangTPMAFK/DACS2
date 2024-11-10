function changeAgency() {
    const province = document.querySelector("#province");
    $.ajax({
        type: "POST",
        dataType: "JSON",
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        data: {
            province: province.value
        },
        url: "/xem-chi-nhanh",
        success: function (result) {
            const agencySelector = document.querySelector("#agency");
            agencySelector.innerHTML = "";
            result.agencies.forEach(agency => {
                agencySelector.innerHTML += `<option value="${agency.id}">${agency.agency_name} - ${agency.address}</option>`;
            });
            getQuantity();
        }
    })
}
function getQuantity() {
    const agency = document.querySelector("#agency");
    const product = document.querySelector('#product_id');
    $.ajax({
        type: "GET",
        dataType: "JSON",
        data: {
            agency_id: agency.value,
            product_id: product.value,
        },
        url: "/xem-so-luong",
        success: function (result) {
            const stockLabel = document.querySelector("#stock");
            console.log(result.quantity === null);
            if (result.quantity !== null) {
                if (result.quantity.quantity != 0) 
                    stockLabel.innerHTML = "Số lượng còn: "+result.quantity.quantity;
                    else if (result.quantity.quantity == 0) {
                        stockLabel.innerHTML = `<div class="text-red-500">Hết hàng</div>`;
                    }
            } else if (result.quantity === null) {
                stockLabel.innerHTML = `<div class="text-red-500">Chưa có hàng</div>`;
            }
        }
    })
}

function addToCart(product_id) {
    const agency = document.querySelector("#agency");
    if (agency.value != "")
        $.ajax({
            type: "POST",
            dataType: "JSON",
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
            data: {
                product_id: product_id,
                agency_id: agency.value,
            },
            url: "/them-vao-gio",
            success: function (result) {
                alert(result.msg);
            }
        })
    else {
        alert('Vui lòng chọn chi nhánh hợp lệ');
    }
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
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        data: form,
        url: "/upload/services/avatar",
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
$("input[type=radio][name=payment]").on('change', function () {
    if ($(this).val() == "cod") {
        $('#checkout-form').attr('action', '/thanh-toan/cod');
        $('#checkout-btn').attr('name', 'redirect');
    }

    if ($(this).val() == "vnpay") {
        $('#checkout-form').attr('action', '/thanh-toan/vnpay');
        $('#checkout-btn').attr('name', 'redirect');
    }
        
    if ($(this).val() == "momo") {
        $('#checkout-form').attr('action', '/thanh-toan/momo');
        $('#checkout-btn').attr('name', 'payUrl');
    }
});

function submitComment(product_id) {
    const title = document.querySelector('input[name="title"]');
    const rating = document.querySelector('input[name="rating"]:checked');
    const content = document.querySelector('textarea[name="content"]');
    console.log([title.value, rating.value, content.value]);
    if (rating == null && rating.value == "") {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
            data: {
                product_id: product_id,
                title: title.value,
                rating: rating.value,
                content: content.value
            },
            url: "/gui-binh-luan/"+product_id,
            success: function (result) {
                console.log(result);
                stars = ``;
                for (i = 0; i < result.recentComment.rating; i++) {
                    stars += `<span class="text-15 font-[500] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>`;
                }
                for (i = 5; i > result.recentComment.rating; i--) {
                    stars += `<span class="text-15 font-[500] text-warning-600 flex"><i class="ph ph-star"></i></span>`;
                }
                html = `<div class="flex items-start gap-24"><img src="/${result.recentComment.get_user.avatar}"
                                alt="Image"
                                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0">
                            <div class="flex-grow">
                                <div class="flex-between items-start gap-8">
                                    <div class="">
                                        <h6 class="mb-12 text-md">${result.recentComment.get_user.lname} ${result.recentComment.get_user.fname}</h6>
                                        <div class="flex items-center gap-8">${stars}</div>
                                    </div><span class="text-gray-800 text-xs">${new Date(result.recentComment.created_at).toISOString().split('.')[0].replace("T", " ")}</span>
                                </div>
                                <h6 class="mb-14 text-md mt-24">${result.recentComment.title}</h6>
                                <p class="text-gray-700">${result.recentComment.content}</p>
                                <div class="flex items-center gap-20 mt-44"><button
                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"><i
                                            class="ph-bold ph-thumbs-up"></i> Like</button> <a
                                        href="product-details-two.html#comment-form"
                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"><i
                                            class="ph-bold ph-arrow-bend-up-left"></i> Replay</a></div>
                            </div>
                        </div>`;
                const comments_container = document.querySelector('#comments-container');
                comments_container.innerHTML = html + comments_container.innerHTML;
            }
        })
    } else {
        alert('Làm ơn hãy nhập đây đủ thông tin để tạo bình luận');
    }
}