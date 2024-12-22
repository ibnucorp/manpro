$(document).ready(function () {
    $("#recent").DataTable({
        pageLength: 5,
        lengthChange: false,
        searching: false,
    });
    $("#now").DataTable({
        pageLength: 5,
        lengthChange: false,
        searching: false,
    });
    $("#done").DataTable({
        pageLength: 5,
        lengthChange: false,
        searching: false,
    });
});
