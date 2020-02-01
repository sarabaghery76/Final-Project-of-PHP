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
    <form method="POST" action="./insert_news_cat" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="text" placeholder="عنوان" name="title" /></td>
                <td>
                    <input type="submit" value="ثبت"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
