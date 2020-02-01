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
    <form method="POST" action="./insert_slider" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="text" placeholder="عنوان" name="title" /></td>
                <td><input type="file" name="fileToUpload"></td>
                <td>
                    <input type="submit" value="ثبت"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
