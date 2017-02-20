<h2>Category List</h2>
<?
if (!empty($_GET['msg'])) {
    $msg=unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key=>$value) {
        echo $value;
    }
}

?>
<table>
    <tr>
        <th>Serial</th>
        <th>CategoryName</th>
        <th>Action</th>
    </tr>
    <?
    $i = 0;
    foreach ($cat as $key => $value) {
        $i++; ?>
        <tr>
            <td><? echo $i ?></td>
            <td><? echo $value['name'] ?></td>
            <td>
                <a href="<? echo BASE_URL; ?>Admin/editCategory/<? echo $value['id'] ?>">Edit</a>||
                <a href="<? echo BASE_URL; ?>Admin/deleteCat/<? echo $value['id'] ?>">Delete</a>
            </td>
        </tr>
    <? } ?>
</table>
