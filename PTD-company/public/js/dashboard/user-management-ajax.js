$(document).ready(function () {

    fetch_data();
    $('#name_fa_error').text('');

    function fetch_data() {
        $.ajax({
            url: "/dashboard/show/tag",
            dataType: "json",
            success: function (data) {
                var html = '';
                html += '<tr>';
                html += '<td contenteditable id="id"></td>';
                html += '<td contenteditable id="name"></td>';
                html += '<td contenteditable id="slug"></td>';
                html +=
                    '<td class="center"><button type="button" class="btn btn-success btn-xs" id="add"><i class="material-icons">add</i></button></td></tr>';
                for (var count = 0; count < data.length; count++) {
                    html += '<tr>';
                    html +=
                        '<td contenteditable class="column_name center" data-column_name="id" data-id="' +
                        data[count].id + '">' + data[count].id + '</td>';
                    html +=
                        '<td contenteditable class="column_name center" data-column_name="name" data-id="' +
                        data[count].id + '">' + data[count].name + '</td>';
                    html +=
                        '<td contenteditable class="column_name center" data-column_name="slug" data-id="' +
                        data[count].id + '"><label><span>' + data[count].slug +
                        '</span></label></td>';
                    html +=
                        '<td class="center"><button type="button" class="btn btn-danger btn-xs delete" id="' +
                        data[count].id +
                        '"><i class="material-icons">delete</i></button></td></tr>';
                }
                $('tbody').html(html);
            }
        });
    }


    var _token = $('input[name="_token"]').val();

    $(document).on('click', '#add', function () {
        var name = $('#name').text();
        var slug = $('#slug').text();
        if (name != '' && slug != '') {
            // consol.log(data);
            $.ajax({

                url: "/dashboard/new/tag",
                method: "POST",
                data: {
                    name: name,
                    slug: slug,
                    _token: _token,
                },
                success: function (data) {
                    swal({
                        icon: 'success',
                        title: 'عملیات موفق',
                        text: 'کاربر با موفقیت ساخته شد'
                    })

                    fetch_data();
                },
                error: function (reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, val) {
                        $("#message").text(val[0]);
                    })
                }
            });
        } else {
            $('#message').html(
                "<div class='alert alert-danger'>برای ساخت کاربر تمام فیلد‌ها باید پر شوند!</div>"
            );
        }
    });

    $(document).on('blur', '.column_name', function () {
        var column_name = $(this).data("column_name");
        var column_value = $(this).text();
        // console.log(column_value);
        var id = $(this).data("id");
        if (column_value != '') {
            $.ajax({
                url: "/dashboard/update/tag",
                method: "POST",
                data: {
                    column_name: column_name,
                    column_value: column_value,
                    id: id,
                    _token: _token
                },
                success: function (data) {
                    swal({
                        icon: 'success',
                        title: 'عملیات موفق',
                        text: 'کاربر با موفقیت بروز رسانی شد'
                    })
                },
                error: function (reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, val) {
                        $("#message").text(val[0]);
                    })
                }
            })
        } else {
            $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
        }
    });

    $(document).on('click', '.delete', function () {
        var id = $(this).attr("id");
        swal({
                title: 'آیا از حذف کاربر مظمئن هستید؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله، حذف کنید!',
                cancelButtonText: 'حیر، کنسل کنید!',
                cancelButtonColor: '#e17076',
                confirmButtonColor: '#039ee3'
            },
            function (isConfirm) {
                if (!isConfirm) return;
                $.ajax({
                    url: "/dashboard/delete/tag/{id?}",
                    method: "DELETE",
                    data: {
                        id: id,
                        _token: _token
                    }
                });
                fetch_data();
            }
        );

    });


});
