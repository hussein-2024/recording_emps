<?php
	include('conn.php');
	$id=$_GET['id_edit'];
	$query=mysqli_query($conn,"select * from `user_emp` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/emp.css">
    <title>تعديل</title>
    <style>
        body{
            background: lightblue;
        }

    </style>

</head>
<body>
     

<div class="container">
        <div class="mb-3  g-3 row justify-content-center">
            <div class="col-sm-4">
                <form method="POST" action="update.php?id_edit=<?php echo $id;  ?>">

                    <div class=" mt-4  row justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">الاسم</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:5px;" type="text" name="name" value="<?php echo $row ['name']  ?>" required>
                        </div>
                    </div>


                    <div class=" mt-2  row justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label" >العنوان</label>
                        </div>
                        <div class="col-lg-8 col-sm-8 ">
                            <input class="form-control " style="margin-right:0px;"  type="text" name="address" value="<?php echo $row ['address']  ?>" required>
                        </div>
                    </div>


                    <div class=" mt-2  row  justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">رقم الهاتف</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:-11px;" type="number" name="phone" value="<?php echo $row ['phone']  ?>" required >
                        </div>
                    </div>

                    <div class=" mt-2  row  justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">تاريخ الميلاد </label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:-14px;" type="date" max="2000-12-31" name="birthday" value="<?php echo $row ['birthday']  ?>" required>
                        </div>
                    </div>    

                    <div class=" mt-2  row  justify-content-right">
                        <div class="col-auto">
                            <label class="col-form-label"  style="margin-right:22px;" >الجنس</label>
                        </div>
                        <div class="col-lg-4 col-sm-8">
                            <select class="form-select form-select-lg-4 "  style="margin-right:14px;" name="gender" value="<?php echo $row ['gender']  ?>">
                                <option>ذكر</option>
                                <option>إنثى</option>
                            </select>
                        </div>
                     </div>

                     <div class=" mt-2  row  justify-content-right">
                        <div class="col-auto">
                            <label class="col-form-label"  style="margin-right:20px;" >المؤهل</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <select class="form-select form-select-lg-4 "  style="margin-right:10px;" name="qua" value="<?php echo $row ['qua']  ?>">
                                <option>بكالوريوس</option>
                                <option>ماجستير</option>
                                <option>دبلوم</option>
                                <option>ثانوية عامة</option>
                            </select>
                        </div>
                     </div>

                    <div class=" mt-2  row  justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">التخصص</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " type="text" style="margin-right:-5px;" name="tkhsos" value="<?php echo $row ['tkhsos']  ?>" required>
                        </div>
                    </div>

                    <div class=" mt-2  row  justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">ملاحظات</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:-5px;" type="text" name="remarks" value="<?php echo $row ['remarks']  ?>" >
                        </div>
                    </div>
                    
                    <br>
                    <input type="submit" value="تعديل" class=" btn btn-primary">             
                </form>    
                                                
            </div>
        </div>
    </div>



</body>
</html>

 