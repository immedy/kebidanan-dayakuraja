$("#Tanggal").flatpickr({
    enableTime: false,
    dateFormat: "Y-m-d",
});

$("#tanggaljam").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minuteIncrement: 1,
    maxDate: "today",
    defaultDate: new Date()
});


// Simpan referensi ke elemen dropdown
var selectElement = $("#TahunSc");

// Tambahkan opsi "0000" dengan nilai 0 dan properti display: none
$("<option>")
    .val(0)
    .text("0000")
    .css("display", "none")
    .appendTo(selectElement);

var date = new Date();
var currentYear = date.getFullYear();

// Tambahkan opsi tahun dari 1970 hingga tahun saat ini
for (var i = 1970; i <= currentYear; i++) {
    $("<option>")
        .val(i)
        .text(i)
        .prop("selected", i === currentYear)
        .appendTo(selectElement);
}

// Inisialisasi plugin Select2
selectElement.select2({
    placeholder: "Pilih...",
    allowClear: true, // Jika ingin memungkinkan pengguna menghapus pilihan
    theme: "bootstrap" // Sesuaikan tema dengan kebutuhan Anda
});



$("#HPHT").flatpickr({
    enableTime: false,
    dateFormat: "Y-m-d",
});

