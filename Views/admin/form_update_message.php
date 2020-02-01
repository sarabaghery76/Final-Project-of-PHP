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
    <form method="POST" action="./update_message" enctype="multipart/form-data">
        <table>
            <?php 
                $message = $message->fetch_assoc();
            ?>
            <tr>
                <td hidden><input type="text" value="<?php echo $message['id']; ?>" name="id" /></td>
                <td><input type="text" placeholder="نام" value="<?php echo $message['name']; ?>" name="name" /></td>
                <td><input type="text" placeholder="عنوان" value="<?php echo $message['title']; ?>" name="title" /></td>
                <td><input type="text" placeholder="متن پیام" value="<?php echo $message['message']; ?>" name="message" /></td>
                <td>
                    <input type="submit" value="به روز رسانی"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
