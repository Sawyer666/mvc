<h2>Add Category</h2>


<form action="<? echo BASE_URL;?>Admin/insertCategory" method="post">
    <table>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="name" required="1"/></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Save"/></td>
        </tr>
    </table>
</form>
