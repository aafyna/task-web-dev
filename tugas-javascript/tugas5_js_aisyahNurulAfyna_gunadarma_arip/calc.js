function perhitungan(tombol){
    var frm = document.getElementById('formKalkulator');
    var angkaPertama = parseFloat(frm.angkaPertama.value);
    var angkaKedua = parseFloat(frm.angkaKedua.value); 

    if(isNaN(angkaPertama) || isNaN(angkaKedua)){
        alert("Masukin Angka Saja Ya!");
    }else{
        switch (tombol) {
            case 'tambah':
                    var total = (angkaPertama + angkaKedua);
                break;
            case 'kurang':
                    var total = (angkaPertama - angkaKedua);
                break;
            case 'kali':
                    var total = (angkaPertama * angkaKedua);
                break;
            case 'bagi':
                    var total = (angkaPertama / angkaKedua);
                break;
            case 'pangkat':
                    var total = Math.pow(angkaPertama,angkaKedua);
                break;
            default:
                alert("Kalkulator tidak berjalan..");
        }
        frm.hasil.value = total;
    }
    
}