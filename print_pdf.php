<?php
	function generateRow(){
		$contents = '';
		include_once('conn.php');
		$sql = "SELECT * FROM user_emp";

		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['address']."</td>
        <td>".$row['phone']."</td>
				<td>".$row['birthday']."</td>
        <td>".$row['gender']."</td>
				<td>".$row['qua']."</td>				
				<td>".$row['tkhsos']."</td>
				<td>".$row['remarks']."</td>

			</tr>
			";
		}  	
    
		return $contents;
	}

	require_once('tcpdf/tcpdf.php');
   
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $lg = Array();
    $lg['a_meta_charset'] = 'UTF-8';
    $lg['a_meta_dir'] = 'rtl';
    $lg['a_meta_language'] = 'ar';
   $pdf->setLanguageArray($lg);
    $pdf->setRTL(true);
    $pdf->SetFont('aealarabiya', '', 11);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle("معلومات الموظفين");
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont('aealarabiya');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetMargins(PDF_MARGIN_LEFT, '11', PDF_MARGIN_RIGHT);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, 11);

    $pdf->AddPage();
    $content = '';
    $content .= '
      	<h2 align="center">معلومات الموظفين</h2>      	
      	<table border="1" cellspacing="0" cellpadding="3" align="center" >
           <tr>
            <th width="5%">الرقم</th>
            <th width="20%">الاسم </th>
            <th width="10%"> العنوان</th>
            <th width="10%">رقم الهاتف</th>
            <th width="10%">تاريخ الميلاد</th>
            <th width="7%">الجنس</th>
            <th width="15%">المؤهل</th>
            <th width="15%">التخصص</th>
            <th width="15%">ملاحظات</th>
              
           </tr>';
			 
    $content .= generateRow();
    $content .= '</table>';
    $pdf->writeHTML($content);
    $pdf->Output('emps.pdf', 'I');


?>
