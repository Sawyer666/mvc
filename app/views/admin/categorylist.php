<h2>Category List</h2>

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
            <td><? echo $i?></td>
            <td><? echo $value['name'] ?></td>
            <td>
                <a href="<? BASE_URL;?>Admin/editCat/<?echo $value['id']?>">Edit</a>||
                <a href="<? BASE_URL;?>Admin/deleteCat/<?echo $value['id']?>">Edit</a>
            </td>
        </tr>
    <? } ?>
</table>
