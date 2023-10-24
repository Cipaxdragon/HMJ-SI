<style>
    .kotak_divisi{
        padding: 170px;
        display: flex;
    flex-direction: column;
    align-content: center;
    align-items: center;
    justify-content: flex-start;
    }

    .kotak_divisi .poto{
        width: 400px;
    }
    .kotak_divisi .poto img{
        width: 100%;
    }
    .kabid{
        overflow: hidden;
    border-radius: 40px;
    background-color: #d1d1d1;
        gap: 4rem;
        display: flex;
        flex-direction: row;
    }
    .kotak_kabid{
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
    
</style>
<?php 
  include_once "includes/s_pengurus.php";
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    ?>
    <div class="kotak_divisi">
        <div class="kotak_kabid">
    <?php while ($row = $result->fetch_assoc()) {?>
            <div class="kabid">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5>Adam</h5>
                    <p>Kepala Bidang Kominfo</p>
                </div>
            </div>
            <?php
    }
            ?>
            <div class="kabid">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5><?php echo $row["nama"]?></h5>
                    <p>Wakil Kepala Bidang Kominfo</p>
                </div>
            </div>
        </div>
        <div class="kotak_anggota">
            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="assets\image\Poto.png" alt="">
                </div>
                <div class="penjelasan">
                    <h5><?php echo $row["nama"]?></h5>
                    <p>Anggota Bidang Kominfo</p>
                </div>
            </div>
        </div>
    </div>
<?php 
    }
?>