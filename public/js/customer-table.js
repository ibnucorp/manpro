const { info } = require("autoprefixer");

$(document).ready(function () {
    $("#recent").DataTable({
        order: [[0, "desc"]],
        pageLength: 5,
        lengthChange: false,
        searching: false,
        paging: false,
        info: false,
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
