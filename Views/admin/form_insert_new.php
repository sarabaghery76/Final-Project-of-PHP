    <?php 
        include 'Views/admin/dashboard.php';
    ?>

    <style>
        table{
            width: 90%;
        }
	td{
            text-align: center;
	}
        
    </style>
    <br/>
    <form method="POST" action="./insert_new" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="text" placeholder="عنوان" name="title" /></td>
                <td><input type="text" placeholder="گزیده" name="excerpt" /></td>
                <td><input type="text" placeholder="محتوا" name="content" /></td>
                <td><input type="file" name="fileToUpload"></td>
                <td>
                    <select id="cat_id" name="cat_id">
                    <?php while($news_cat = $allNews_cat->fetch_assoc()) {?>
                        <option value="<?php echo $news_cat["id"]; ?>" ><?php echo $news_cat["title"]; ?></option>
                    <?php } ?>
                    </select>
                </td>
                <td>
                    <input type="submit" value="ثبت"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
