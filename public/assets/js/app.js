$(function () {
    handleEvent()
})

// $('.remove-cart').unbind().on('click', async function (e) {
//     e.preventDefault()
//     // console.log(typeof $('meta[name=get-info-login]').attr('content'))
//     if ($('meta[name=get-info-login]').attr('content') != '') {
//         // const fd = new FormData();
//         let id = $(this).data('id')
//         // fd.append('cart_id', id)
//         const res = await fetch(`${$('meta[name=base-url]').attr('content')}/carts/${id}/delete`, {
//             method: 'delete',
//             headers: {
//                 "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//                 "X-Requested-With": "XMLHttpRequest",
//                 Accept: "application/json",
//             },
//             // body: fd
//         })
//         const status = await res.status;
//         const data = await res.json();
//         if (status == 200) {
//             // let contentType = await res.response.headers.get(
//             //     "content-type"
//             // );
//             notify("success", data.message);
//             window.location.assign(data.redirect)
    
//             // if (
//             //     contentType &&
//             //     contentType.indexOf("application/json") !== -1
//             // ) {
//             //     // var data = await res.response.json();
//             // } else {
//             //     notify("success", "Success");
//             // }
//         } else {
//             notify("warning", data.message);
//         }
//     } else {
//         window.location.assign(`${$('meta[name=base-url]').attr('content')}/auth`)
//     }
// })

const handleEvent = () => {
    $('a[data-toggle="ajax"]')
        .unbind()
        .on("click", function (e) {
            e.preventDefault();

            $(".navigation")
                .find(`a[href="${$(this).attr("href")}"]`)
                .parent()
                .addClass("active");

            pushState($(this).attr("href"));
        });

    $('button[data-toggle="ajax"]')
        .unbind()
        .on("click", function (e) {
            e.preventDefault();

            $(".navigation")
                .find(`button[data-target="${$(this).attr("href")}"]`)
                .parent()
                .addClass("active");

            pushState($(this).data("target"));
        });

    $('a[data-toggle="logout"]')
        .unbind()
        .on("click", function (e) {
            e.preventDefault();
            swal.fire({
                tilte: "Logout?",
                icon: "question",
                text: "Are you sure?",
                showConfirmButton: true,
                confirmButtonText: "Yes, sure",
                confirmButtonColor: "#29166F",
                showCancelButton: true,
                cancelButtonText: "Cancel",
            }).then((res) => {
                if (res.isConfirmed) {
                    $($(this).data("form")).submit();
                }
            });
        });

    $('button[data-toggle="edit"]')
        .unbind()
        .on("click", function (e) {
            e.preventDefault();
            pushState(`${window.location.href}/${$(this).data("id")}/edit`);
        });

    $('button[data-toggle="delete"]')
        .unbind()
        .on("click", function (e) {
            e.preventDefault();
            deleteConfirmation(this);
        });

    $('div[data-toggle="delete"]')
        .unbind()
        .on("click", function (e) {
            e.preventDefault();
            deleteConfirmation(this);
        });

    $('form[data-request="ajax"]')
        .unbind()
        .on("submit", async function (e) {
            e.preventDefault();
            var oldButtonText = $(this).find('button[type="submit"]').html();
            $(this)
                .find('button[type="submit"]')
                .html("Loading...")
                .attr("disabled", "disabled");
            resetInvalid();

            const res = await fetchFormRequest(this);

            $(this)
                .find('button[type="submit"]')
                .html(oldButtonText)
                .removeAttr("disabled");
            $(".waves-ripple").remove();

            if (res.status == 200) {
                $(".modal").modal("hide");
                $(".modal-backdrop").remove();
                $("body").removeClass("modal-open");

                var contentType = await res.response.headers.get(
                    "content-type"
                );

                if (
                    contentType &&
                    contentType.indexOf("application/json") !== -1
                ) {
                    var data = await res.response.json();
                    notify("success", data.message);
                } else {
                    notify("success", "Success");
                }

                if ($(this).data("redirect")) {
                    // var data = await res.response.json();
                    // console.log(await res.response)
                    window.location.assign($(this).data('success-callback'));
                } else {
                    // var data = await res.response.json();
                    pushState(data.redirect);
                }
            } else {
                if (res.status == 422) {
                    var data = await res.response.json();
                    showInvalid(data.errors);
                } else {
                    if (res.status == 302) {
                        notify("success", "Login Berhasil...");
                        if ($(this).data("redirect"))
                        var data = await res.response.json();
                            window.location.assign(
                                data.redirect
                            );
                    } else if (res.status == 500) {
                        var data = await res.response.json();
                        notify("warning", data.message);
                    } else {
                        notify("success", "Success");
                    }

                    // if ($(this).data("redirect")) {
                    //     window.location.assign(
                    //         $(this).data("success-callback")
                    //     );
                    // } else {
                    //     pushState($(this).data("success-callback"));
                    // }
                }
            }
        });

        $('span[data-toggle="add-to-cart"]').unbind().on('click', function (e) {
            e.preventDefault()
            // console.log(typeof $('meta[name=get-info-login]').attr('content'))
            addToCart(this)
        })

        $('div[data-toggle="payment-modal"]').unbind().on('click', function (e) {
            e.preventDefault()
            $('#payment-modal').modal('show');
        })

        $('input[name="pay"]').unbind().on('click keyup', function (e) {
            e.preventDefault()
            countPay($(this).val())
        })

        $('form[data-toggle="pay"]').unbind().on('submit', async function (e) {
            e.preventDefault()
            var oldButtonText = $(this).find('button[type="submit"]').html();
            $(this)
            .find('button[type="submit"]')
            .html("Loading...")
            .attr("disabled", "disabled");
            resetInvalid();

            const res = await payRequest(this);

            $(this)
                .find('button[type="submit"]')
                .html(oldButtonText)
                .removeAttr("disabled");
            $(".waves-ripple").remove();

            if (res.status == 200) {
                $(".modal").modal("hide");
                $(".modal-backdrop").remove();
                $("body").removeClass("modal-open");

                var data = await res.response.json();
                notify("success", data.message);
                // window.location.assign(data.redirect);
                // var contentType = await res.response.headers.get(
                //     "content-type"
                // );

                // if (
                //     contentType &&
                //     contentType.indexOf("application/json") !== -1
                // ) {
                // } else {
                //     notify("success", "Success");
                // }

                if ($(this).data("redirect")) {
                    window.location.assign($(this).data("success-callback"));
                } else {
                    pushState($(this).data("success-callback"));
                }
            } else {
                if (res.status == 422) {
                    var data = await res.response.json();
                    showInvalid(data.errors);
                } else {
                    if (res.status == 302) {
                        // notify("success", "Login Berhasil...");
                        // if ($(this).data("redirect"))
                        //     window.location.assign(
                        //         $(this).data("success-callback")
                        //     );
                    } else if (res.status == 500) {
                        var data = await res.response.json();
                        notify("warning", data.message);
                    } else {
                        notify("success", "Success");
                    }

                    // if ($(this).data("redirect")) {
                    //     window.location.assign(
                    //         $(this).data("success-callback")
                    //     );
                    // } else {
                    //     pushState($(this).data("success-callback"));
                    // }
                }
            }
        })
};

async function payRequest(form) {
    const formData = new FormData(form);
    const fd = new FormData();
    formData.forEach((val, key) => {
        fd.append(key, val);
    });
    fd.append('customer_id', $('input[name="customer_id"]').val())
    const res = await fetch($(form).attr("action"), {
        method: $(form).attr("method"),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "X-Requested-With": "XMLHttpRequest",
        },
        body: fd,
    });

    if (res.status == 404) {
        return {
            status: await res.status,
        };
    } else {
        return {
            status: await res.status,
            response: res,
        };
    }
}

function countPay(pay) {
    let payTotal = $('input[name="pay_total"]').val()
    if (parseInt(pay) < parseInt(payTotal)) {
        $('.pay-button').attr('disabled', true)
    } else {
        $('.pay-button').attr('disabled', false)
    }
}

const addToCart = async (el) => {
    if ($('meta[name=get-info-login]').attr('content') != '') {
        const fd = new FormData();
        let id = $(el).data('id')
        fd.append('product_id', id)
        const res = await fetch(`${$('meta[name=base-url]').attr('content')}/carts/add-to-cart`, {
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                "X-Requested-With": "XMLHttpRequest",
            },
            body: fd
        })
        const status = await res.status;
        const data = await res.json();
        if (status == 200) {
            // let contentType = await res.response.headers.get(
            //     "content-type"
            // );
            notify("success", data.message);
    
            // if (
            //     contentType &&
            //     contentType.indexOf("application/json") !== -1
            // ) {
            //     // var data = await res.response.json();
            // } else {
            //     notify("success", "Success");
            // }
        } else {
            notify("warning", data.message);
        }
    } else {
        window.location.assign(`${$('meta[name=base-url]').attr('content')}/auth`)
    }
}

const deleteConfirmation = (el) => {
    swal.fire({
        title: "Delete ?",
        icon: "warning",
        text: "Deleted data can't be recovered",
        showConfirmButton: true,
        confirmButtonText: "Yes",
        confirmButtonColor: "#29166F",
        showCancelButton: true,
        cancelButtonText: "Cancel",
    }).then(async (rs) => {
        if (rs.isConfirmed) {
            swal.fire({
                title: "Please Wait",
                html: "Processing...",
                allowOutsideClick: false,
                didOpen: () => {
                    swal.showLoading();
                },
            });

            const res = await fetch(
                `${window.location.href}/${$(el).data("id")}/delete`, {
                    method: "delete",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                        "X-Requested-With": "XMLHttpRequest",
                        Accept: "application/json",
                    },
                }
            );

            swal.close();
            if (res.status == 200) {
                var data = await res.json();
                notify("success", data.message);
                window.location.assign(data.redirect);
                // if (typeof table == "undefined") handleView();
                // table.ajax.reload();
                // window.location.assign(
                //     data.redirect
                // );
            } else {
                if (res.status == 401) {
                    window.location.reload();
                } else {
                    var data = await res.json();
                    notify("warning", data.message);
                }
            }
        }
    });
};

const fetchFormRequest = async (form) => {
    const res = await fetch($(form).attr("action"), {
        method: $(form).attr("method"),
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "X-Requested-With": "XMLHttpRequest",
        },
        body: generateFormBody(new FormData(form)),
    });

    if (res.status == 404) {
        return {
            status: await res.status,
        };
    } else {
        return {
            status: await res.status,
            response: res,
        };
    }
};

const generateFormBody = (formData) => {
    const fd = new FormData();
    formData.forEach((val, key) => {
        fd.append(key, val);
    });

    return fd;
};

const notify = (type, message) => {
    var title;
    if (type == "success") title = "Success";
    else if (type == "danger") title = "Failed";
    else title = "Warning";

    return $.notify({
        title: `<strong><b>${title}</b></strong>`,
        message: `<br>${message}`,
        icon: "fa fa-check-circle",
    }, {
        type: type,
        allow_dismiss: false,
        newest_on_top: true,
        mouse_over: true,
        showProgressbar: false,
        spacing: 10,
        timer: 2000,
        placement: {
            from: "top",
            align: "right",
        },
        offset: {
            x: 30,
            y: 30,
        },
        delay: 1500,
        z_index: 10000,
        animate: {
            enter: "animated fadeIn",
            exit: "animated fadeOut",
        },
        onClose: null,
        onClosed: null,
    });
};

const showInvalid = (errorMessages) => {
    for (errorField in errorMessages) {
        $(
            `<div class="invalid-feedback">${errorMessages[errorField]}</div>`
        ).insertAfter(`.form-control[name="${errorField}"]`);
        $(`.form-control[name="${errorField}"]`).addClass("is-invalid");
    }
};

const resetInvalid = () => {
    for (const el of $(".form-control")) {
        $(el).removeClass("is-invalid");
        $(el).siblings(".invalid-feedback").remove();
        $(".invalid-feedback").remove();
    }
};
// $(function () {
// })