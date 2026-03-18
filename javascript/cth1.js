//coba soal
//1. prompt untuk mengetahui saldo akhir dari yang di inputkan user

let saldoAwal=prompt('masukkan saldo awal')
let saldoTambahan=prompt('masukkan saldo tambahan')
let hutang=prompt('masukkan hutang')
let saldoAkhir=saldoAwal + saldoTambahan - hutang

alert(`total saldo anda adalah Rp.${saldoAkhir}`)

//2.menentukan hari dari tanggal yang ada saat ini di device

let hari =new Date().getDay()//melihat tanggal sesuai device kalian
let hariIni

if (hari == 1){ //kondisi untuk mengetahui nama hari
    hariIni=('senin')
} else if (hari == 2){
    hariIni=('selasa')
} else if (hari == 3){
    hariIni=('rabu')
} else if (hari == 4){
    hariIni=('kamis')
} else if (hari == 5){
    hariIni=('jumat')
} else if (hari == 6){
    hariIni=('sabtu')
} else if (hari == 7){
    hariIni=('minggu')
}

alert(`hari ini adalah hari ${hariIni}`)
