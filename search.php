<!DOCTYPE html>
<html dir="rtl">

<head>

    <title>صفحه البحث</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
</head>

<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <form method="post" action="">
                <br />
                <p style="font-size:18px; margin-left:100px;">بحث بالاسم
                    <input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size:18px;" class="textboxclass" />
                    <input type="submit" style="font-size:14px; margin-top:-5px;" class="btn btn-primary" name="submit" value="بحث">
                </p>
            </form>

            <a href="index.php"><input type="submit" style="font-size:16px; margin-top:10px;" class="btn btn-info" name="submit" value="الرجوع للصفحة الرئيسية"></a>
            <br>
            <br>
            <table class="table  table-hover table-responsive  table-primary">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم </th>
                        <th scope="col">العنوان </th>
                        <th scope="col">رقم الهاتف</th>
                        <th scope="col">تاريخ الميلاد</th>
                        <th scope="col">الجنس</th>
                        <th scope="col">المؤهل</th>
                        <th scope="col">التخصص</th>
                        <th scope="col">ملاحظات</th>
                    </tr>


                </thead>
                <tbody>
                    <?php
include ('conn.php');
error_reporting(0);

$search_file = $_POST['search_file'];
if ((!$_POST['submit']) || ($_POST['submit'] && empty($search_file))){

    if ($_POST['submit']) {
        echo '<div class="alert alert-danger text-center " style="width:300px; 
        float:left; margin-top:-122px;">قم بإدخال قيمة في حقل البحث</div>';
    }
    $sql=mysqli_query($conn,"select * from user_emp");
    $i = 1;
    while ($row = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $row ['id'] ;?></td>
                <td><?php echo $row ['name'] ;?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['qua']; ?></td>
                <td><?php echo $row['tkhsos']; ?></td>
                <td><?php echo $row['remarks']; ?></td>

            </tr>
            <?php
    $i++;
    }
}


else if ($_POST['submit']) {
           
            $sql=mysqli_query($conn,"select * from user_emp where name like '%$search_file%'
            or address like '%$search_file%'  or remarks like '%$search_file%'  or tkhsos like '%$search_file%' or gender like '%$search_file%' or id like '%$search_file%' or qua like '%$search_file%' Order by name ASC");

			if (mysqli_num_rows($sql) > 0) 
			{            
			$i = 1;
			while ($row = mysqli_fetch_array($sql)) {
				?>
                    <tr>
                        <td><?php echo $row ['id'] ;?></td>
                        <td><?php echo $row ['name'] ;?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['birthday']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['qua']; ?></td>
                        <td><?php echo $row['tkhsos']; ?></td>
                        <td><?php echo $row['remarks']; ?></td>
                    </tr>
                    <?php
			$i++;
			}
			} 
                        
			else 
			{
			echo '<div class="alert alert-danger text-center" style="width:130px; 
			float:left; margin-top:-122px;">لاتوجد نتائج</div>';
			}
			
			?>
<?php
}

?>



                </tbody>
            </table>

        </div>
    </div>
</div>

</html>
