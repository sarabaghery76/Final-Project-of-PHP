    <?php 
        include 'Views/admin/dashboard.php';
    ?>

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        table{
            padding: auto;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
	th,td{
            border: 1px solid #ddd;
            padding:10px;
            text-align: center;
	}
	
	tr:nth-child(odd){
            background: #ddd;
	}
        
	
    </style>

        <table>
          <tr>
            <th>عنوان</th>
            <th>حذف</th>
            <th>به روز رسانی</th>
          </tr>
            <?php 
		while($news_cat = $allNews_cat->fetch_assoc()){
            ?>
          <tr>
            <td><?php echo $news_cat["title"]; ?></td>
            <td style="color: red;"><a href="<?= BASE_URL ?>news_catadmin/delete_new_cat?id=<?php echo $news_cat["id"]; ?>">حذف</a></td>
            <td style="color: greenyellow;"><a href="<?= BASE_URL ?>news_catadmin/update_new_cat?id=<?php echo $news_cat["id"]; ?>">به روز رسانی</a></td>
          </tr>
            <?php
		}
            ?>
        </table>

    </body>
</html>
	