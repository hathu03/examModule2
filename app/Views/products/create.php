<h1 style="text-align: center">Thêm Mặt Hàng</h1>
<br>
<form method="post" style="padding-left: 580px">
    <table>
        <tr>
            <td><label for="product-name">Tên hàng:</label></td>
            <td><input type="text" id="product-name" name="name" style="width: 300px"></td>
        </tr>
        <tr>
            <td><label for="product-category">Loại hàng:</label></td>
            <td><select style="width: 300px" id="product-category" name="category">
                    <option>Chọn loại hàng...</option>
                    <option>Điện thoại</option>
                    <option>Điều hòa</option>
                    <option>Tủ lạnh</option
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="product-price">Giá</label></td>
            <td><input style="width: 300px" type="text" id="product-price" name="price"></td>
        </tr>
        <tr>
            <td><label for="product-quantity">Số lượng</label></td>
            <td><input style="width: 300px" type="text" id="product-quantity" name="quantity"></td>
        </tr>
        <tr>
            <td><label for="product-description">Mô tả</label></td>
            <td><textarea style="width: 300px" id="product-description" name="description" cols="21"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right">
                <button type="submit" class="btn btn-success">Nhập mặt hàng</button>
                <a href="index.php" type="button" class="btn btn-success">Thoát</a></td>
        </tr>
    </table>
</form>

