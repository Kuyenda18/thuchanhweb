<!DOCTYPE html>
<html>
<head>
<title>Rating</title>
<meta charset="utf-8">
<link href="template/css.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="container">
<header>
<h1><a href="index.php">COMPUTER ABC</a></h1>
</header>
<div id="main-wrapper">
<div id="product-info">
<?php echo $html ?>
</div>
<div id="rating">
<form action="" method="POST">
<h3>Đánh giá</h3>
<input type="radio" name="rate" value="5" checked> 5
<input type="radio" name="rate" value="4"> 4
<input type="radio" name="rate" value="3"> 3
<input type="radio" name="rate" value="2"> 2
<input type="radio" name="rate" value="1"> 1<br />
<input type="submit" name="rate_submit" value="Rate"
id="submit-button">
</form>
</div>
</div>
<footer>
</footer>
</div>
</body>
function getRatingInfo($id){
global $conn;
$query = "SELECT * FROM rating_info WHERE product_id=".$id;
$result = mysqli_query($conn, $query);
$return = 'Đánh giá<br /><ul id="rating-info">';
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_array($result);
$return .= "<li><strong>5</strong>: ".$row['rate_5']."</li>";
$return .= "<li><strong>4</strong>: ".$row['rate_4']."</li>";
$return .= "<li><strong>3</strong>: ".$row['rate_3']."</li>";
$return .= "<li><strong>2</strong>: ".$row['rate_2']."</li>";
$return .= "<li><strong>1</strong>: ".$row['rate_1']."</li>";
}else{
for($i = 1; $i < 6; $i++){
$return .= "<li>".$i.": 0%</li>";
}
}
$return .= "</ul>";
return $return;
}
function getProduct($id){
global $conn;
$query = "SELECT * FROM products WHERE id=".$id;
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$rating_info = getRatingInfo($id);
$return = '<div id="product-img">
<img src="'.$row['img_url'].'" alt="" title="" />
</div>'.$rating_info.'
<div class="clear-fx"></div>
<h2>'.$row['title'].'</h2>';
return $return;
}

function listProduct(){
global $conn;
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$return = "";
while($row = mysqli_fetch_array($result)){
$rating_info = getRatingInfo($row['id']);
$return .= '<div class="product-info">
<div id="product-img">
<img src="'.$row['img_url'].'" alt="" title="" />
</div>'.$rating_info.'
<div class="clear-fx"></div>
<h2><a
href="index.php?id='.$row['id'].'">'.$row['title'].'</a></h2></div>';
}
return $return;
}