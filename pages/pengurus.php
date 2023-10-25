<style>
    .kotak_divisi{
        
        padding: 170px;
        display: flex;
        flex-direction: column;
        align-content: center;
        align-items: center;
        justify-content: flex-start;
    }
    .div_2{
        padding: 170px;
        display: flex;
        flex-direction: column;
        align-content: center;
        align-items: center;
        justify-content: flex-start;
    }
    .kotak_divisi .poto{
        width: 15rem;
    }
    .kotak_divisi .poto img{
        width: 100%;
    }
    .kabid{
        border-bottom: 4px solid #dedede;
        border-right: 4px solid #dedede;

        width: 100%;
        overflow: hidden;
        border-radius: 40px;
        background-color: white;
        gap: 4rem;
        display: flex;
        flex-direction: row;
    }
    .kotak_kabid{
        margin-bottom: 70px;
        width: 100%;
        gap: 70px;
        flex-direction: column;
        display: flex;
    }
    .kabid .penjelasan{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }
    .kotak_anggota{
        width: 100%;
        display: flex;
        gap: 4rem;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .kotak_anggota .kotak_anggota_dalam{
        border-bottom: 4px solid #dedede;
        border-right: 4px solid #dedede;

        border-radius: 20px;
    /* overflow: hidden; */

    }
    .penjelasan{
        padding: 1.5rem;
    }
</style>
    <div class="kotak_divisi">
        
        <div class="kotak_kabid">
            <div class="kabid">
                <div class="poto">
                    <img src="https://cdn.discordapp.com/attachments/1152085105641279519/1166744171072200794/Adam.png?ex=654b9a2f&is=6539252f&hm=c70c67c1c2439727abbf1b64ab0225eb6051f2e6edd859febc97b0604f263b23&" alt="">
                </div>
                <div class="penjelasan">
                    <h4>Adam</h4>
                    <p>Kepala Bidang Kominfo</p>
                </div>
            </div>
            <div class="kabid">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Nadyah Adawiyah</h5>
                    <p>Wakil Kepala Bidang Kominfo</p>
                </div>
            </div>
        </div>
        <style>
            .poto{
                overflow: hidden;
            }
            .poto img{
                transition: all 0.3s ease;
            }
            .poto:hover img{
                transform: scale(1.9) translateY(30px);
            }
            .kabid{
                transition: all 0.3s ease;

            }
            .kabid:hover{
                transform: scale(1.05);
            }
            .kotak_anggota_dalam{
                transition: all 0.3s ease;
                overflow: hidden;
            }
            .kotak_anggota_dalam:hover{
                transform: scale(1.07);
            }
            a{
                text-decoration: none;
                color: black;
            }
        </style>
        <div class="kotak_anggota">
            <a href="">

            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="https://cdn.discordapp.com/attachments/1152115515649699960/1166718361212829736/Halis.png?ex=654b8225&is=65390d25&hm=a32f2fd9884f2c8f32912cf8e99e33f871b65b6c61b756587914572415f2c65f&" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Ridho</h5>
                    <p>Anggota Bidang Kominfo</p>
                </div>
            </div>
            </a>

            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Ridho</h5>
                    <p>Anggota Bidang Kominfo</p>
                </div>
            </div>
            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Ridho</h5>
                    <p>Anggota Bidang Kominfo</p>
                </div>
            </div>
            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Ridho</h5>
                    <p>Anggota Bidang Kominfo</p>
                </div>
            </div>
            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Ridho</h5>
                    <p>Anggota Bidang Kominfo</p>
                </div>
            </div>
            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Ridho</h5>
                    <p>Anggota Bidang Kominfo</p>
                </div>
            </div>
            
        </div>
        
        
    </div>
