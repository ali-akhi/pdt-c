// function fetchUser() {
//     $.ajax({
//         type: "GET",
//         url: "/dashboard/show-users",
//         dataType: "json",
//         success: function (response) {
//             // var len = response.users.length;
//             // for(var i=0; i<len; i++){
//             //     console.log(response.users[i].id);
//             // }
//             $("#user-id").text(response.id);
//             $("#user-name").text(response.name);
//             $("#user-email").text(response.email);
//             $("#user-mobile").text(response.mobile);
//             $("#user-role").text(response.getRolePersian);
//             $("#user-time").text(response.getTimeRegister);
//         }
//     });
// }

function DeleteUser() {
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
                if (isConfirm) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })
                    $.ajax({
                        url: "/dashboard/delete-user/" + id,
                        type: "DELETE",
                        data: {
                            id: id,
                        },
                        success: function (response) {
                            $("#user-" + id).remove();
                            Swal.fire({
                                icon: 'success',
                                title: 'عملیات موفق',
                                text: 'کاربر با موفقیت حذف شد'
                            })
                            $("#user-id").text(response.id);
                            $("#user-name").text(response.name);
                            $("#user-email").text(response.email);
                            $("#user-mobile").text(response.mobile);
                            $("#user-role").text(response.getRolePersian);
                            $("#user-time").text(response.getTimeRegister);

                        }
                    });

                }
            }

        );
    });
}

// insert record
function CreateUser() {
    $('#create-user-form').submit(function (e) {
        e.preventDefault();
        let name = $("#new-name").val();
        let email = $("#new-email").val();
        let mobile = $("#new-mobile").val();
        let password = $("#new-password").val();
        // let _token = csrf_token()
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/dashboard/store-user/",
            type: "POST",
            data: {
                name: name,
                email: email,
                mobile: mobile,
                password: password,
                // _token: _token
            },
            // contentType: false,
            // processData: false,
            success: function (response) {
                console.log(response);
                // console.log(response);
                // $("#tableExport tbody").prepend(' <tr id="user-{{$user->id}}"><td class="center" id="user-id">' + response.id + '</td><td class="center" id="user-name">' + response.name + '</td><td class="center" id="user-email">' + response.email + '</td><td class="center" id="user-mobile">' + response.mobile + '</td><td class="center" id="user-role">' + response.getRolePersian + '</td><td> <button onclick="deleterecord({{ $user->id }})"><i class="menu-icon ti-trash"></i></button> <a href="/dashboard/{{$user->id}}/profile"><i class="menu-icon ti-eye"></a></td></tr>');
                $("#user-id").text(response.id);
                $("#user-name").text(response.name);
                $("#user-email").text(response.email);
                $("#user-mobile").text(response.mobile);
                $("#user-role").text(response.getRolePersian);
                $("#user-time").text(response.getTimeRegister);


                $("#create-user-form")[0].reset();
                $("#createUserModal").modal('hide');

                Swal.fire(
                    'Add!',
                    'user add successfully!',
                    'success'
                )
            },
            error: function (response) {
                $('#name-msg').text(response.responseJSON.errors.name);
                $('#email-msg').text(response.responseJSON.errors.email);
                $('#mobile-msg').text(response.responseJSON.errors.mobile);
                $('#password-msg').text(response.responseJSON.errors.password);
            }
        });
    });
}


//update record
function editrecord(id) {
    $.get('/dashboard/user/' + id, function (user) {

        $("#id").val(user.id);
        $("#name1").val(user.name);
        $("#email1").val(user.email);
        $("#mobile1").val(user.mobile);
        $("#password1").val(user.password);
        $("#role").val(user.role);
        $("#edituserModal").modal('toggle');

    });
}

function update() {
    $("#userformedite").submit(function (e) {

        e.preventDefault();
        let id = $("#id").val();
        let name = $("#name1").val();
        let email = $("#email1").val();
        let password = $("#password1").val();
        let mobile = $("#mobile1").val();
        let role = $("#role").val();

        // let role = $("#role option:selected").val();
        let _token = $('meta[name="csrf-token"]').val();

        $.ajax({

            url: "/dashboard/user",
            type: "PUT",

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            data: {
                id: id,
                name: name,
                email: email,
                mobile: mobile,
                password: password,
                role: role,
                _token: $('meta[name="csrf-token"]').attr('content'),

            },

            success: function (response) {

                $('#user-' + response.id + ' td:nth-child(1)').html(response.id);
                $('#user-' + response.id + ' td:nth-child(2)').html(response.name);
                $('#user-' + response.id + ' td:nth-child(3)').html(response.email);
                $('#user-' + response.id + ' td:nth-child(4)').html(response.mobile);

                $('#user-' + response.id + ' td:nth-child(5)').html(response.role);

                $("#edituserModal").modal('hide');
                $("#userformedite")[0].reset();


                Swal.fire(
                    'Update!',
                    'user update successfully!',
                    'success'
                )
            }
        });
    });

}
