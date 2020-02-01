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
    <form method="POST" action="./update_new" enctype="multipart/form-data">
        <table>
            <?php 
                $new = $new->fetch_assoc();
            ?>
            <tr>
                <td hidden><input type="text" value="<?php echo $new['id']; ?>" name="id" /></td>
                <td><input type="text" placeholder="عنوان" value="<?php echo $new['title']; ?>" name="title" /></td>
                <td><input type="text" placeholder="گزیده" value="<?php echo $new['excerpt']; ?>" name="excerpt" /></td>
                <td><input type="text" placeholder="محتوا" value="<?php echo $new['content']; ?>" name="content" /></td>
                <td><img height="40" width="35" src="<?= BASE_URL ?>Public/images/<?php echo $new["pic"]; ?>"></td>
                <td><input type="file" name="fileToUpload"></td>
                <td>
                    <select name="cat_id" >
                    <?php while($news_cat = $allNews_cat->fetch_assoc()) {?>
                        <option value="<?php echo $news_cat["id"]; ?>"  <?php if($new['cat_id']==$news_cat['id']) echo 'selected'; ?> ><?php echo $news_cat["title"]; ?></option>
                    <?php } ?>
                    </select>
                </td>
                <td>
                    <input type="submit" value="به روز رسانی"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
