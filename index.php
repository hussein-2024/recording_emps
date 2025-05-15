

<div id="formcontainer">
    <?php
    include "form.php";
    ?>
    
</div>
<style>
    body{
        display: flex;
        direction: rtl;
    }
    footer{
        direction:ltr;
    }

    .container2{
        width: 70%;
        height: 100%;
        padding: 20px;
        margin-right:20px;
        /* border: 1px solid grey; */
    }

     th, td{
        padding: 10px;
        text-align:center;
    }  

    .table-scroll tbody {
        position: absolute;
        overflow-y: scroll;
        overflow-x: hidden;
        height: 230px;
    }

</style>

    <div class="container2">
    <h3> بيانات المتقدمين للتوظيف</h3>
        <div class="row">
            <div class="col-md-8 col-lg-12">
                <table class="table table-hover table-responsive   table-primary">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الاسم</th>
                            <th scope="col"> العنوان</th>
                            <th scope="col">رقم الهاتف</th>
                            <th scope="col">تاريخ الميلاد</th>
                            <th scope="col">الجنس</th>
                            <th scope="col">المؤهل</th>
                            <th scope="col">التخصص</th>
                            <th scope="col">ملاحظات</th>
                            <th scope="col">تعديل</th>
                            <th scope="col">حذف</th>
                        </tr>
                    </thead>                    
<tbody>
  <?php
    include ('conn.php');

    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];
        } 
    else {
            $page_no = 1;
            }

	$total_records_per_page = 10;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM user_emp ");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; 

    $query=mysqli_query($conn,"select * from `user_emp` LIMIT $offset, $total_records_per_page");
    while($row=mysqli_fetch_array($query)){
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
        <td> <a class="btn btn-success" href="edit.php?id_edit=<?php echo $row ['id']?>"> تعديل</a></td>
        <td> <a class="btn btn-danger" onclick='return confirm ("هل تريد الحذف")' href="delete.php?id_del=<?php echo $row ['id']?>">حذف</a></td>
    </tr>
        
<?php
    }
    
?>
                   </tbody>
                </table>                               
            </div> 
        </div>        
        <footer>
        copyright&copy;by hussein-yaseen-2025
    </footer>
    </div>
   
