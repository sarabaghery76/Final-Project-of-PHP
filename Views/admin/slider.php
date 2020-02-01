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
            <th>عنوان</th>
            <th>عکس</th>
            <th>حذف</th>
            <th>به روز رسانی</th>
          </tr>
            <?php 
		while($sliders = $allSliders->fetch_assoc()){
            ?>
          <tr>
            <td><?php echo $sliders["title"]; ?></td>
            <td><img height="150" width="250" src="<?= BASE_URL ?>Public/images/<?php echo $sliders["address"]; ?>"></td>
            <td style="color: red;"><a href="<?= BASE_URL ?>slideradmin/delete_slider?id=<?php echo $sliders["id"]; ?>">حذف</a></td>
            <td style="color: greenyellow;"><a href="<?= BASE_URL ?>slideradmin/update_slider?id=<?php echo $sliders["id"]; ?>">به روز رسانی</a></td>
          </tr>
            <?php
		}
            ?>
        </table>

    </body>
</html>
	