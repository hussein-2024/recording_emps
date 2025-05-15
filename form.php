<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشروع ادخال بيانات الموظفين</title>    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/emp.css">
    <script src="js/search.js"></script>
</head>

<style>
    body{
        background: lightyellow;
    }

    form{
        display: flex;      
        flex-direction: column;
        margin: 2px;
        width:300px;
        height:500px;
    }
    .container{
        margin-right:20px;
        height:550px;
    }
    .link-button{
        margin-left: 50px;        
    }


</style>

<body>

    <div class="container">
        <div class="mb-3  g-3 row justify-content-right">
            <div class="col-sm-4">
                <form method="POST" action="add.php">

                    <div class=" mt-4  row justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">الاسم</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:5px;" type="text" name="name" required>
                        </div>
                    </div>


                    <div class=" mt-2  row justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label" >العنوان</label>
                        </div>
                        <div class="col-lg-8 col-sm-8 ">
                            <input class="form-control " style="margin-right:0px;"  type="text" name="address" required>
                        </div>
                    </div>


                    <div class=" mt-2  row  justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">رقم الهاتف</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:-11px;" type="number" name="phone" required >
                        </div>
                    </div>

                    <div class=" mt-2  row  justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">تاريخ الميلاد </label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:-14px;" type="date" max="2000-12-31" name="birthday" required>
                        </div>
                    </div>    

                    <div class=" mt-2  row  justify-content-right">
                        <div class="col-auto">
                            <label class="col-form-label"  style="margin-right:20px;" >الجنس</label>
                        </div>
                        <div class="col-lg-4 col-sm-8">
                            <select class="form-select form-select-lg-4 "  style="margin-right:4px;" name="gender">
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
                            <select class="form-select form-select-lg-4 "  style="margin-right:1px;" name="qua">
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
                            <input class="form-control " type="text" style="margin-right:-5px;" name="tkhsos" required>
                        </div>
                    </div>

                    <div class=" mt-2  row  justify-content-center">
                        <div class="col-auto">
                            <label class="col-form-label">ملاحظات</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control " style="margin-right:-5px;" type="text" name="remarks" >
                        </div>
                    </div>

                    <br>
                    <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">إضافه</button>

                            <a class="btn btn-outline-warning j link-button" href="search.php" role="button">بحث</a>
                                
                            <a class="btn btn-outline-success" href="print_pdf.php" role="button">
                                    <span class="glyphicon glyphicon-print"></span> PDF</a>
                    </div>

                </form>                   
            </div>
        </div>
    </div>


</body>

</html>
