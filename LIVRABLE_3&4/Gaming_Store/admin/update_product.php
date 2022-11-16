<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/add_product.css">
</head>
<body>

    <div class="container add">
        <h2 class="text-center">Update a Product</h2>
        <div style="width: 160px; height:160px; align-self: center;"><img src="/images/computer1.jpg" alt="" style="width: 100%; height:100%;"></div>
        <div>
            <label for="libelle" class="form-text">Name</label>
            <input type="text" name="libelle" class="form-control" value="Pc Gamer 1">
        </div>
        <div>
            <label for="quantite" class="form-text">Quantite</label>
            <input type="text" name="quantite" class="form-control" value="23">
        </div>
        <div>
            <label for="prix" class="form-text">Price</label>
            <input type="text" name="prix" class="form-control" value="1992 $">
        </div>
        <label for="image" class="form-text">Update product image</label>
        <input type="file" name="image" class="form-control">
        </div>
        <div class="btns">
            <button class="btn btn-warning">Cencel</button>
            <button class="btn btn-success">Save</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>