    <?php 
        include 'Views/admin/dashboard.php';
    ?>

    <style>
        *{
            padding: 0;
            margin: 0;
            text-align: justify;
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
	}
        th{
            text-align: center;
        }
	
	tr:nth-child(odd){
            background: #ddd;
	}
        
	
    </style>

        <table>
          <tr>
            <th style="width:1%;">عنوان</th>
            <th style="width:20%;">گزیده</th>
            <th style="width:50%;">محتوا</th>
            <th style="width:1%;">عکس</th>
            <th style="width:8%;">تعداد بازدید</th>
            <th style="width:8%;">دسته بندی</th>
            <th style="width:1%;">حذف</th>
            <th style="width:10%;">به روز رسانی</th>
          </tr>
            <?php 
		while($news = $allNews->fetch_assoc()){
            ?>
          <tr>
            <td><?php echo $news["title"]; ?></td>
            <td><?php echo $news["excerpt"]; ?></td>
            <td><?php echo $news["content"]; ?></td>
            <td><img height="40" width="35" src="<?= BASE_URL ?>Public/images/<?php echo $news["pic"]; ?>"></td>
            <td><?php echo $news["visit_count"]; ?></td>
            <td><?php echo $news["cat_id"]; ?></td>
            <td style="color: red;"><a href="<?= BASE_URL ?>newadmin/delete_new?id=<?php echo $news["id"]; ?>">حذف</a></td>
            <td style="color: greenyellow;"><a href="<?= BASE_URL ?>newadmin/update_new?id=<?php echo $news["id"]; ?>">به روز رسانی</a></td>
          </tr>
            <?php
		}
            ?>
        </table>

    </body>
</html>
	