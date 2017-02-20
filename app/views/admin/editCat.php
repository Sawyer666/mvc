<?
foreach ($catById as $key => $value) {
?>
    <form method="post" action="<? echo BASE_URL; ?>Admin/updateCat/<? echo $value['id']?>">
        <table>
            <tr>
                <td>CategoryName</td>
                <td><input type="text" name="name" required="1" value="<? echo $value['name'] ?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"/></td>
            </tr>
        </table>
    </form>
<? } ?>