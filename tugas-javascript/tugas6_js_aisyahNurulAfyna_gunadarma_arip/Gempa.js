let no = 1;
class Gempa{
    constructor(lokasi, skala){
        this.lokasi = lokasi;
        this.skala = skala;
    }

    dampakGempa(){
        // if(this.nilai >= 85 && this.nilai <= 100) this.grade = 'A';
        if(this.skala <= 2) this.dampak = "Tidak ada kerusakan";
        else if(this.skala > 2 && this.skala <= 4) this.dampak = "Bangunan retak";
        else if(this.skala > 4 && this.skala <= 6) this.dampak = "Bangunan roboh";
        else if(this.skala > 6) this.dampak = "Bangunan roboh dan berpotensi tsunami";
        else this.dampak = "Dampak tidak diketahui";

        return this.dampak;
    }

    infoGempa(){
        let dataGempa = document.getElementById('dataGempa');
        dataGempa.innerHTML +=
        `<tr>
            <td>${no++}</td>
            <td>${this.lokasi} </td>
            <td>${this.skala}</td>
            <td>${this.dampakGempa()} </td>
        </tr>`;
    }
}

g1 = new Gempa('Sumatra Barat', 5);
g2 = new Gempa('Jawa Timur', 5);
g3 = new Gempa('Papua', 6);
g4 = new Gempa('Ambon', 7);
g5 = new Gempa('Sulawesi', 4);
g6 = new Gempa('Bali', 4);
g7 = new Gempa('Sukabumi', 3);
g8 = new Gempa('Bukittinggi', 2);
g9 = new Gempa('Sumatra', 8);
g10 = new Gempa('Palu', 3);

g1.infoGempa();
g2.infoGempa();
g3.infoGempa();
g4.infoGempa();
g5.infoGempa();
g6.infoGempa();
g7.infoGempa();
g8.infoGempa();
g9.infoGempa();
g10.infoGempa();