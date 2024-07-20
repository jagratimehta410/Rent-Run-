<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="gown.css">
</head>
<script>
    document, getElementById("myBtton").onclick = function () {
        alert("Button clicked!");
    };
</script>
<style>
    .benefits {
        display: flex;
        /* column-gap:200px; */
       
    }
</style>

<body>
<header>
        <h1 style="font-family: Imprint MT Shadow;font-size:35px;">Gown</h1>
    </header>
<?php
require '_dbconnect.php';
$s="select * from uploads";
$result=mysqli_query($link,$s);
?>

<?php
while($a=mysqli_fetch_array($result))
{ 
    //echo "<pre>";
    //print_r($a);
?>
   
    <br><br>
    <div class="benefits">

        <div class="cards">
            <div class="image">
                <a href="ballpage.html"><img src="<?php echo $a[2]; ?>"></a>
            </div>
            <div class="title">
                <b>
                    <center style="font-family:Imprint MT Shadow">BALL GOWN</center>
                    <center>
                        <div class="price">
                            <del> <span class="old-price">&#8377 10000</span></del>
                            <span class="new-price">&#8377 2000/-</span>
                        </div>
                      </b>
            </div>
        </div>

<?php

}


?>
   
            <div class="cards">
                <div class="image">
                    <a href="alinepage.html"><img src="Image/mermaid.png"></a>
                </div>
                <div class="title">
                    <b>
                        <center style="font-family:Imprint MT Shadow">MERMAID GOWN</center>
                        <center>
                            <div class="price">
                                <del> <span class="old-price">&#8377 2000</span></del>
                                <span class="new-price">&#8377 700/-</span>
                            </div>
                    </b>
                </div>
            </div>
            <div class="cards">
                <div class="image">
                    <a href="alinepage.html"><img src="Image/alinegown.jpg"></a>
                </div>
                <div class="title">
                    <b>
                        <center style="font-family:Imprint MT Shadow">ALINE GOWN</center>
                        <center>
                            <div class="price">
                                <del> <span class="old-price">&#8377 1500</span></del>
                                <span class="new-price">&#8377 800/-</span>
                            </div>
                    </b>
                </div>
            </div>
            <div class="cards">
                <div class="image">
                    <a href="sheathpage.html"><img src="Image/sheath.jpg"></a>
                </div>
                <div class="title">
                    <b>
                        <center style="font-family:Imprint MT Shadow">SHEATH GOWN</center>
                        <center>
                            <div class="price">
                                <del> <span class="old-price">&#8377 1000</span></del>
                                <span class="new-price">&#8377 600/-</span>
                            </div>
                    </b>
            </div>
            </div>
           
            
                
            <footer>

                <button id="myButton"><a href="product.php"><img src="Image/image28.png"
                            style="width: 150px;height: 100px;"></a></button>
</footer>                 
</body>

</html>