<!-- <?php>
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  include '_dbconnect.php';
  $productName=$_POST['product-name'];
  $productDescription=$_POST['product-description'];
  $txtvalue=$_POST['txtvalue'];
  $productImage=$_POST['product-image'];
  $productPrice=$_POST['product-price'];
  $rentalProductPrice=$_POST['rental-product-price'];
 echo "$productName";
}
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Upload and Sell</title>
    <script>
        function ddlselect ()
                             {
                                 var d=document.getElementById("ddselect");
                                var displaytext = d.options[d.selectedIndex].text;
                                document.getElementById("txtvalue").value=displaytext;
                         }
</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="product.css">
</head>
<body>
	<header>
		<h1>Upload and Rent</h1>
	</header>

	<main>
        <h2>Selected Category</h2>
        <div class="center">
          <select id="ddselect" onchange="ddlselect(); ">
            <option selected disabled>change</option>
            <option>Lehnga</option>
            <option>Saree</option>
            <option>Indowestern</option>
            <option>Gown</option>
            <option>Dress</option>
          </select>
          <input type="text" id="txtvalue" required>
        </div>

            <form  method="POST" enctype="multipart/form-data">

			<label for="product-name">Product Name:</label>
			<input type="text" id="product-name" name="name" required><br>

			<label for="product-description">Product Description:</label>
			<textarea id="product-description" name="detail" rows="5" required></textarea><br>

			<label for="product-image">Product Image:</label>
			<input type="file" id="product-image" name="productimg" accept="image/*" required><br><br>

			<label for="product-price">Product Price &#8377:</label>
			<input type="number" id="product-price" name="price" min="0" step="0.01" required><br><br>


            <label for="product-price">Rental Price &#8377:</label>
			<input type="number" id="product-price" name="rprice" min="0" step="0.01" required><br><br>



			<button type="submit"  name="save">Upload and RENT</button><br>
		</form>
    <?php
if(isset($_POST["save"]))
{
extract($_POST);
require '_dbconnect.php';

$fnm=$_FILES["productimg"]["name"];
$source=$_FILES["productimg"]["tmp_name"];
$destination="uploads/".$fnm;
move_uploaded_file($source,$destination);
$s="insert into uploads values('$name','$detail','$destination',$price,$rprice)";

mysqli_query($link,$s);

$n=mysqli_affected_rows($link);
if($n>0)
{
echo "record saved";
header("location:gown.php");
}

else
echo "try again";


}

    ?>
	</main>

	<footer>
		<p>&copy; 2023 Upload and Rent</p>
	</footer>
</body>
</html>

