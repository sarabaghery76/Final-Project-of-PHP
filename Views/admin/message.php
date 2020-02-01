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
            border: 1px solid #dddddd;
            text-align: center;
            padding:10px;
	}
	
	tr:nth-child(odd){
            background: #ddd;
	}
	
    </style>

        <table>
          <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>عنوان</th>
            <th>متن پیام</th>
            <th>حذف</th>
            <th>به روز رسانی</th>
          </tr>
            <?php 
		while($message = $allMessages->fetch_assoc()){
            ?>
          <tr>
            <td><?php echo $message["name"]; ?></td>
            <td><?php echo $message["email"]; ?></td>
            <td><?php echo $message["title"]; ?></td>
            <td><?php echo $message["message"]; ?></td>
            <td><a href="<?= BASE_URL ?>messageadmin/delete_message?id=<?php echo $message["id"]; ?>">حذف</a></td>
            <td style="color: greenyellow;"><a href="<?= BASE_URL ?>messageadmin/update_message?id=<?php echo $message["id"]; ?>">به روز رسانی</a></td>
          </tr>
            <?php
		}
            ?>
        </table>

    </body>
</html>
	