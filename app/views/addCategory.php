<?
//print_r($_SERVER);
if(isset($msg)){
    echo $msg;
}
?>

<form action="http://mvc/Category/insertCategory" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" required="1"></td>
        </tr>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="name" required="1"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Save"></td>
        </tr>
    </table>
</form>
