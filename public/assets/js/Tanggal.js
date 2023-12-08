$("#Tanggal").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});

$("#tanggaljam").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minuteIncrement: 1,
    defaultDate: new Date()
});

var select = $("<select>").addClass("form-select form-select-solid form-select-lg fw-bold").attr("id", "TahunSc");
var date = new Date();
var currentYear = date.getFullYear();
for (var i = 1970; i <= currentYear; i++) {
  $("<option>")
    .val(i)
    .text(i)
    .prop("selected", i === currentYear)
    .appendTo(select);
}
$("#TahunSc").replaceWith(select);


