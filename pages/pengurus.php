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
        border-bottom: 4px solid #ededed;
        border-right: 4px solid #ededed;

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

<?php


function Jabatan($jabatanCode)
{
    if ($jabatanCode == 1)
    {
        return "Kepala Divisi";
    }
    elseif ($jabatanCode == 2)
    {
        return "Wakil Kepala Divisi";
    }
    else
    {
        return "Anggota Divisi";
    }
}

function Divisi($divisiCode)
{
    switch ($divisiCode)
    {
        case 1:
            return "Keilmuan";
        case 2:
            return "Humas";
        case 3:
            return "Kaderisasi";
        case 4:
            return "Kominfo";
        case 5:
            return "Keslog";
        
        default:
            return " ";
    }
}
for ($i = 1; $i <= 5; $i++) {
    echo "Outer Loop: $i<br>";
$sql1 = "SELECT * FROM pengurus 
    WHERE jabatan BETWEEN 1 AND 2 and divisi=$i
    ORDER BY divisi, jabatan;";
$result = $conn->query($sql1);
?>
    <div class="kotak_divisi">
    
    
        <div class="kotak_kabid">
        <?php
        
if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        // Output data dari setiap baris
?>

            <div class="kabid">
                <div class="poto">
                    <img src="<?php echo $row["gambar"] ?>" alt="">
                </div>
                <div class="penjelasan">
                    <h4><?php echo $row["nama"] ?></h4>
                    <p><?php echo Jabatan($row["jabatan"]) ?> <?php echo Divisi($row["divisi"]) ?></p>
                </div>
            </div>
           <?php
    }
} ?>
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
        <?php

$sql2 = "SELECT * FROM pengurus WHERE jabatan=3 and divisi=$i ORDER BY divisi, jabatan;";
$result = $conn->query($sql2);
if ($result->num_rows > 0)
{

    // Output data dari setiap baris
    
?>
            <div class="kotak_anggota">
            <?php while ($row = $result->fetch_assoc())
    { ?>
            <a href="https://www.instagram.com/nurh4lis" target="_blank">
            <div class="kotak_anggota_dalam">
                <div class="poto">
                    <img src="<?php echo $row["gambar"] ?>" alt="">
                </div>
                <div class="penjelasan">
                    <h5><?php echo $row["nama"] ?></h5>
                    <p><?php echo Jabatan($row["jabatan"]) ?> <?php echo Divisi($row["divisi"]) ?></p>
                </div>
            </div>
            </a>
            <?php
    }
} ?>
        </div>
        
        
    </div>
<?php }?>