// Nomor1
// function countEvenNumbers(start, end) {
//     let evenCount = 0; 
//     let genap = []

//     for (let i = start; i <= end; i++) {
//         if (i % 2 === 0) {
//             evenCount += 1;
//             genap.push(i)
//         }
//     }
//     return (`${evenCount}(${genap})`);
// }

// console.log(countEvenNumbers(1, 10));
// console.log(countEvenNumbers(2, 20));

// Nomor2
// let Harga = prompt("Masuk kan Harga")
// let Barang = prompt("Masukkan Nama Barang")

// function DiskontBarang(Harga, Barang) {
//     let brg = Barang.toLowerCase();
//     let diskon = 0;

//     switch (brg) {
//         case 'makanan':
//             diskon = Harga * 0.95
//             return diskon;
//         case 'elektronik':
//             diskon = Harga * 0.9
//             return diskon;
//         case 'pakaian':
//             diskon = Harga * 0.8
//             return diskon;
    
//         default:
//             return Harga
//     }
// }

// let hargaDis = DiskontBarang(Harga, Barang)
// console.log("Harga Barang Setelah Diskon = " + hargaDis);


// Nomor3
// function CariHari(Hari, HariakanDatang) {
//     const DaftarHari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

//     let currentIndex = DaftarHari.indexOf(Hari);

//     let futureIndex = (currentIndex + (HariakanDatang % 7)) % 7;

//     return DaftarHari[futureIndex];
// }

// let hariSekarang = 'Jumat'; 
// let hariTerlewat = 1000;
// let hariMendatang = CariHari(hariSekarang, hariTerlewat); 

// console.log(`${hariTerlewat} hari setelah ${hariSekarang} adalah ${hariMendatang}`);

// Nomor4
function tebakAngka() {
    const angkaRahasia = Math.floor(Math.random()* 100)+1 ;
    let tebakan = null;
    let jumlahTebakan = 0;

    alert("Selamat datang di permainan tebak angka!\nKomputer telah memilih angka antara 1 dan 100.\nCoba tebak angkanya!");

    while (tebakan !== angkaRahasia) {
        tebakan = parseInt(prompt("Masukkan tebakanmu:"));
        jumlahTebakan++;

        if (tebakan < angkaRahasia) {
            alert("Tebakanmu terlalu rendah!");
        } else if (tebakan > angkaRahasia) {
            alert("Tebakanmu terlalu tinggi!");
        } else {
            alert(`Selamat! Kamu berhasil menebak angka yang benar dalam ${jumlahTebakan} kali tebakan.`);
        }
    }
}

console.log(tebakAngka());
