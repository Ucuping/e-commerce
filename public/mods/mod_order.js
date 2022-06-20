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
        name: 'customer',
        data: 'customer',
    },
    {
        name: 'product',
        data: 'product',
    },
    {
        name: 'order.name',
        data: 'order.name',
    },
    {
        name: 'payment_method',
        data: 'payment_method',
    },
    {
        name: 'delivery_method',
        data: 'delivery_method',
    },
    {
        name: 'order_date',
        data: 'order_date',
    },
    {
        name: 'pay',
        data: 'pay',
        mRender: (data, type, row) => {
            return `Rp. ${data}`;
        }
    },
    {
        name: 'id',
        data: 'id',
        width: 150,
        sortable: false,
        mRender: function (data, type, row) {
            var render = ``

            if (userPermissions.includes('read-orders')) {
                render += `<a href="${$('meta[name=base-url]').attr('content')}/seller/orders/${data}/detail" class="btn btn-outline-primary btn-sm"><i class="feather icon-eye"></i></a> `
            }

            // if (userPermissions.includes('delete-products')) {
            //     render += `<button class="btn btn-outline-danger btn-sm" data-toggle="delete" data-id="${data}"><i class="feather icon-trash-2"></i></button> `
            // }

            return render
        }
    }
])

function formatNum(number) {
    return Intl.NumberFormat().format(number)
}