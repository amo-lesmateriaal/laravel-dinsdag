<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toevoegen product</title>
</head>
<body>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name:</label>
            <input name="name" type="text">
        </div>
        <div class="form-group">
            <label for="">Price:</label>
            <input name="price" type="number">
        </div>
        <div class="form-group">
            <label for="">Quantity:</label>
            <input name="quantity" type="number">
        </div>
        <div class="form-group">
            <label for="">Description:</label>
            <input name="description" type="text">
        </div>
        <div class="form-group">
            <label for="">Category:</label>
            <select name="category_id">
                <option value="1" selected>TODO: Show categories here</option>
            </select>
        </div>
        <input type="submit" value="Create">
    </form>
</body>
</html>