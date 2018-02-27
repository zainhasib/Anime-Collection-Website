$("input").change(function (e) {
    var value = e.target.value;
    $("progress").val(value);
});