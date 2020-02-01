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
            <th>گزیده</th>
            <th>محتوا</th>
            <th>عکس</th>
            <th>تعداد بازدید</th>
            <th>دسته بندی</th>
          </tr>
            <?php 
		while($new_search = $allSearchs->fetch_assoc()){
            ?>
          <tr>
            <td><?php echo $new_search["title"]; ?></td>
            <td><?php echo $new_search["excerpt"]; ?></td>
            <td><?php echo $new_search["content"]; ?></td>
            <td><?php echo $new_search["pic"]; ?></td>
            <td><?php echo $new_search["visit_count"]; ?></td>
            <td><?php echo $new_search["cat_id"]; ?></td>
          </tr>
            <?php
		}
            ?>
        </table>