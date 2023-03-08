<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
    <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800;"> Add product Here</p>
            <div class="input-group">
                <input type="text" placeholder="Name of the product" name="product_name"   required>
            </div>
            <div class="input-group">
                <input type="number" placeholder="Quantity" name="quantity"   required>
            </div>
            <div class="input-group">
                <input type="number" placeholder="Price" name="price"    required>
            </div>
            <div class="input-group">
                <input type="file"   name="image"    required>
            </div>
             
               <button name="submit" class="btn">Register</button>
            </div>
             
        </form>
</div>
</body>
</html>