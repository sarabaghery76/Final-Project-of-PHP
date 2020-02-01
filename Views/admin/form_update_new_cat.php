    <?php 
        include 'Views/admin/dashboard.php';
    ?>

    <style>
        table{
            width: 30%;
        }
        td{
            text-align: center;
	}
    </style>
    <br/>
    <form method="POST" action="./update_new_cat" enctype="multipart/form-data">
        <table>
            <?php 
                $new_cat = $new_cat->fetch_assoc();
            ?>
            <tr>
                <td hidden><input type="text" value="<?php echo $new_cat['id']; ?>" name="id" /></td>
                <td><input type="text" value="<?php echo $new_cat['title']; ?>" placeholder="عنوان" name="title" /></td>
                <td>
                    <input type="submit" value="به روز رسانی"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
