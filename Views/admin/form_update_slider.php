    <?php 
        include 'Views/admin/dashboard.php';
    ?>

    <style>
        table{
            width: 50%;
        }
        td{
            text-align: center;
	}
    </style>
    <br/>
    <form method="POST" action="./update_slider" enctype="multipart/form-data">
        <table>
            <?php 
                $slider = $slider->fetch_assoc();
            ?>
            <tr>
                <td hidden><input type="text" value="<?php echo $slider['id']; ?>" name="id" /></td>
                <td><input type="text" placeholder="عنوان" value="<?php echo $slider['title']; ?>" name="title" /></td>
                <td><img height="40" width="35" src="<?= BASE_URL ?>Public/images/<?php echo $slider["address"]; ?>"></td>
                <td><input type="file" name="fileToUpload"></td>
                <td>
                    <input type="submit" value="به روز رسانی"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
