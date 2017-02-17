<?
if (isset($msg)) {
    echo $msg;
}

?>

<form action="http://mvc/Category/updateCat" method="post">
    <table><? if (isset($catById)) {
            foreach ($catById as $value) {
                ?>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" required="1" value="<? echo $value['id'] ?>"></td>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><input type="text" name="name" required="1" value="<? echo $value['name'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
            <? }
        } ?>
    </table>
</form>