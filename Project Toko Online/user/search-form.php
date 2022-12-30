<?php
include 'conn.php';
$conn = koneksi();

if (isset($_POST['cari'])) {
    $s1 = $_POST['src1'];
    $s2 = $_POST['src2'];
    $sql = mysqli_query($conn,"SELECT * FROM laptop WHERE nama_laptop = '$s1'");
    $sql2 = mysqli_query($conn,"SELECT * FROM laptop WHERE nama_laptop = '$s2'");
    $data = mysqli_fetch_array($sql);
    $data2 = mysqli_fetch_array($sql2);
    if(empty($s1)){
        echo '<script type="text/javascript">';
        echo ' alert("Pastikan kolom pencarian telah terinput")';
        echo '</script>';
    } else if(mysqli_num_rows($sql)==0){
        echo '<script type="text/javascript">';
        echo ' alert("Laptop tidak tersedia di database")';
        echo '</script>';
    } else if(empty($s2)){
        header("Location: ?page=specification&src1=".$data['kode_laptop']."&src2=NULL");
    } else if (mysqli_num_rows($sql2)==0) {
        echo '<script type="text/javascript">';
        echo ' alert("Laptop ke-2 tidak tersedia di database, pastikan data yang di input sesuai dengan data yang tersedia pada kolom")';
        echo '</script>';
        
        
    } else {
        header("Location: index.php?page=specification&src1=".$data['kode_laptop']."&src2=".$data2['kode_laptop']."");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<style>
    body{
        margin-top: 80px;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    input[type=submit] {
         background-color: #00bbff;
          border: none;
          color: white;
          padding: 12px 30px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
        }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
    <div class="main-content">
        <form class="input-form" method="POST" enctype="multipart/form-data">
        <div class="search-box">
            <input type="text" autocomplete="off" placeholder="Search Laptop..." name="src1" />
            <div class="result"></div>
        </div>
        <div class="search-box">
            <input type="text" autocomplete="off" placeholder="Search Laptop..." name="src2" />
            <div class="result"></div>
        </div>
        <input type="submit" name="cari">
    </form>
    </div>
    
</body>
</html>