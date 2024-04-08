//Alert Function
function csAlert(title, message, type) {
    Swal.fire({
        title: title,
        text: message,
        icon: type
    });
}

//Confirm Alert Function
function csConfirm(title, message, type, callback, cancelCallback = false) {
    Swal.fire({
        title: title,
        text: message,
        icon: type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            callback();
        } else {
            cancelCallback();
        }
    });
}

$(document).ready(function () {
    var DataStore = [];
    //Calender Function
    var calendarEl = document.getElementById('calendar');

    if (calendarEl) {
    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        events: 'xhr.php?uri=getInterviews',
        editable: true,
        selectable: true
    });

    calendar.render();
    }
    //Apply Job
    function applyJob(data) {
        $.ajax({
            url: 'xhr.php?uri=applyJob',
            type: 'POST',
            data: data,
            success: function (response) {
                var res = JSON.parse(response);
                if (res.status == 'success') {
                    csAlert('Applied!', res.message, res.status);
                } else {
                    csAlert('Update Profile!', res.message, res.status);
                }
            }
        });
    }
    $('.applyJob').click(function () {
        let jobId = $(this).attr('id');
        let data = {
            jobId: jobId
        };
        csConfirm('Apply Job', 'Are you sure you want to apply for this job?', 'warning', function () {
            applyJob(data);
        });
    });

    //Applicant Status
    function changeStatus(data) {
        $.ajax({
            url: 'xhr.php?uri=applications',
            type: 'POST',
            data: data,
            success: function (response) {
                var res = JSON.parse(response);
                if (res.status == 'success') {
                    csAlert('Updated!', res.message, res.status);
                } else {
                    csAlert('Error!', res.message, res.status);
                }
            }
        });
    }
    $('.appStatus').change(function () {
        let status = $(this).val();
        let appId = $(this).attr('id');
        let seekerId = $(this).attr('data-seeker');
        let data = {
            appId: appId,
            status: status,
            seekerId: seekerId
        };
        csConfirm('Notify Seeker', 'Are you sure you want to update status?', 'warning', function () {
            changeStatus(data);
        }, function () {
            location.reload();
        });
    });

    //Edit and Remove Users Function
    //Edit User
    function csUpdateUser(data) {
        $.ajax({
            url: 'xhr.php?uri=manageUsers',
            type: 'POST',
            data: data,
            success: function (response) {
                var res = JSON.parse(response);
                if (res.status == 'success') {
                    csConfirm('Updated!', res.message, res.status, function () {
                        location.reload();
                    }, function () {
                        location.reload();
                    });
                } else {
                    csAlert('Error!', res.message, res.status);
                }
            }
        });
    }
    $('.editCsUser').click(function () { //Edit User
        let tr = $(this).closest('tr');
        let userId = $(tr).attr('id');
        let name = tr.find('.name').text();
        let username = tr.find('.username').text();
        let email = tr.find('.email').text();
        let role = tr.find('.role').attr('id');
        $('#csMName').val(name);
        $('#csMUsername').val(username);
        $('#csMEmail').val(email);
        $('#csMRole').val(role);
        $('#csMUpdate').val(userId);
        $('.csEditorCore').removeClass('d-none');
        DataStore = [userId, name, username, email, role, 'edit'];
    });
    $('#csMUpdate').click(function (e) { //Update User
        e.preventDefault();
        csConfirm('Edit User', 'Are you sure you want to edit this user?', 'warning', function () {
            let data = {
                userId: DataStore[0],
                name: $('#csMName').val(),
                username: $('#csMUsername').val(),
                email: $('#csMEmail').val(),
                role: $('#csMRole').val(),
                action: DataStore[5]
            };
            csUpdateUser(data);
            DataStore = [];
        });
    });
    $('.removeCsUser').click(function (e) { //Delete User
        e.preventDefault();
        let tr = $(this).closest('tr');
        let userId = $(tr).attr('id');
        csConfirm('Delete User', 'Are you sure you want to delete this user?', 'warning', function () {
            let data = {
                userId: userId,
                action: 'delete'
            };
            csUpdateUser(data);
        });
    });
    $('#closeFrm').click(function (e) { //Close Editor
        e.preventDefault();
        DataStore = [];
        $('.csEditorCore').addClass('d-none');
    });
    $('#sheduleInterBtn').click(function (e) { //Shedule Interview
        e.preventDefault();
        csConfirm('Notify Seeker', 'Are you sure you want to shedule an interview?', 'warning', function () {
            $('#sheduleInterFrm').submit();
        });
    });
});