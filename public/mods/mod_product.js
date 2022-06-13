if (typeof table == 'undefined') {
    let table
}

table = initTable('#dataTable', [{
        name: 'id',
        data: null,
        width: '1%',
        mRender: function (data, type, row, meta) {
            return meta.row + meta.settings._iDisplayStart + 1;
        }
    },
    {
        name: 'product_category.name',
        data: 'product_category.name',
    },
    {
        name: 'name',
        data: 'name',
        mRender: function (data, type, row) {
            return `
                <div class="row">
                    <div class="col-md-2">
                        <img class="round" src="${(row.image != null) ? $('meta[name="asset-url"]').attr('content') + `assets/images/products/${row.image}` : `https://ui-avatars.com/api/?name=${data}&&background=random`}" alt="avatar" height="40" width="40">
                    </div>
                    <div class="col-md-10">
                        <h6 class="m-0 p-0">${data}</h6>
                    </div>
                </div>
            `
        }
    },
    {
        name: 'price',
        data: 'price',
        mRender: function (data, type, row) {
            return `Rp. ${formatNum(data)}`;
        }
    },
    {
        name: 'stock',
        data: 'stock',
    },
    {
        name: 'description',
        data: 'description',
        mRender: (data, type, row) => {
            return data == null ? '-' : data;
        }
    },
    {
        name: 'id',
        data: 'id',
        width: 150,
        sortable: false,
        mRender: function (data, type, row) {
            var render = ``

            if (userPermissions.includes('update-products')) {
                render += `<button class="btn btn-outline-primary btn-sm" onclick="editAcademicYear('${data}')"><i class="feather icon-edit"></i></button> `
            }

            if (userPermissions.includes('delete-products')) {
                render += `<button class="btn btn-outline-danger btn-sm" data-toggle="delete" data-id="${data}"><i class="feather icon-trash-2"></i></button> `
            }

            return render
        }
    }
])

function formatNum(number) {
    return Intl.NumberFormat().format(number)
}

// console.log($('#semester').click(() => console.log('aaa')))
// $(document).on('click', '#semester', () => {
//     console.log('aa')

// })

// async function updateStatus(hashid) {
//     swal.fire({
//         title: 'Porcessing',
//         html: 'Sedang memperbarui data',
//         allowOutsideClick: false,
//         didOpen: () => {
//             swal.showLoading()
//         }
//     })

//     const res = await fetch(`${window.location.href}/${hashid}/update-status`, {
//         headers: {
//             'X-Requested-With': 'XMLHttpRequest'
//         }
//     })

//     swal.close()
//     if (res.status == 200) {
//         var data = await res.json()

//         notify('success', data.message)

//         if (typeof table != 'undefined') table.ajax.reload()
//         else handleView()
//     } else {
//         if (res.status == 401) {
//             window.location.assign()
//         } else {
//             var data = await res.json()
//             notify('warning', data.message)
//             table.ajax.reload()
//         }
//     }
// }

// $('.datepicker').datepicker({
//     format: 'yyyy',
//     date: new Date()
// });

// $('.add').on('click', function () {
//     resetInvalid();
//     $("#academicYearForm")[0].reset()
//     $('#academicYearModal .modal-title').html('Tambah Tahun Ajaran');
//     $('#academicYearModal form').attr('action', `${window.location.href}/store`);
// });

// function editAcademicYear(id) {
//     $('#academicYearModal form').attr('action', `${window.location.href}/${id}/update`);
//     $("#academicYearForm")[0].reset()
//     fetch(`${window.location.href}/${id}/show`)
//         .then(res => res.json())
//         .then(data => {
//             resetInvalid();
//             $('#academicYearModal .modal-title').html('Edit Tahun Ajaran');
//             $('#year').val(data.data.year);
//             $('#academicYearModal').modal('show');
//         });
// }

// $(document).on('click', '.semester', function () {
//     console.log('oke')
//     let id = $(this).data('id')
//     var url = `${window.location.href}/${id}/update-semester`
//     swal.fire({
//         title: 'Ubah Semester ?',
//         icon: 'question',
//         text: 'Perubahan semester akan mempengaruhi data yang lain',
//         showConfirmButton: true,
//         showCancelButton: true,
//         confirmButtonText: 'Ya',
//         cancelButtonText: 'Tidak'
//     }).then(res => {
//         if (res.isConfirmed) {
//             swal.fire({
//                 title: 'Processing',
//                 html: 'Loading...',
//                 allowEscapekey: false,
//                 allowOutsideClick: false,
//                 didOpen: () => {
//                     swal.showLoading()
//                 }
//             })
//             fetch(url, {
//                     headers: {
//                         'X-Requested-With': 'XMLHttpRequest'
//                     }
//                 })
//                 .then(fetchRes => fetchRes.json().then(data => ({
//                     status: fetchRes.status,
//                     response: data
//                 })))
//                 .then(res => {
//                     swal.close()

//                     if (res.status == 200) {
//                         if (table == null) {
//                             handleView()
//                         } else {
//                             table.ajax.reload()
//                         }
//                     } else {
//                         notify('warning', res.response.message)
//                     }
//                 })
//         }
//     })
// });
