<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');
require_once './Classes/PHPExcel.php';

$db=new mysqli();
//准备链接信息
	$myhost = 'localhost';
	$myusername = 'phpmyadmin';
	$mypassword = '';
	$mydatabase = 'test';
//创建连接
	$db = mysqli_connect($myhost,$myusername,$mypassword,$mydatabase);
//设置字符集，防止出现乱码
    mysqli_set_charset($db,'utf8');

$objPHPExcel=new PHPExcel();
$objPHPExcel->getProperties()->setCreator('http://www.jb51.net')
        ->setLastModifiedBy('http://www.jb51.net')
        ->setTitle('Office 2007 XLSX Document')
        ->setSubject('Office 2007 XLSX Document')
        ->setDescription('Document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Result file');
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1','病例号')
            ->setCellValue('B1','抗组胺鼻用')
            ->setCellValue('C1','抗组胺鼻用t')
            ->setCellValue('D1','抗组胺口服')
            ->setCellValue('E1','抗组胺口服t')
            ->setCellValue('F1','抗白三烯鼻用')
            ->setCellValue('G1','抗白三烯鼻用t')
            ->setCellValue('H1','抗白三烯口服')
            ->setCellValue('I1','抗白三烯口服t')
            ->setCellValue('J1','糖皮质鼻用')
            ->setCellValue('K1','糖皮质鼻用t')
            ->setCellValue('L1','糖皮质口服')
            ->setCellValue('M1','糖皮质口服t')
            ->setCellValue('N1','糖皮质吸入')
            ->setCellValue('O1','糖皮质吸入t')
            ->setCellValue('P1','支气管口服')
            ->setCellValue('Q1','支气管口服t')
            ->setCellValue('R1','支气管吸入')
            ->setCellValue('S1','支气管吸入t')
            ;
           

$ret=$db->query('select * from doctorc');
// $ret->fetch_array();
$i=2;   
while ( $v=$ret->fetch_array()) {
   $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i,$v['id'])
            ->setCellValue('B'.$i,$v['kangzuanbi'])
            ->setCellValue('C'.$i,$v['kangzuanbit'])
            ->setCellValue('D'.$i,$v['kangzuankou'])
            ->setCellValue('E'.$i,$v['kangzuankout'])
            ->setCellValue('F'.$i,$v['kangbaisanxibi'])
            ->setCellValue('G'.$i,$v['kangbaisanxibit'])
            ->setCellValue('H'.$i,$v['kangbaisanxikou'])
            ->setCellValue('I'.$i,$v['kangbaisanxikout'])
            ->setCellValue('J'.$i,$v['tangpizhibi'])
            ->setCellValue('K'.$i,$v['tangpizhibit'])
            ->setCellValue('L'.$i,$v['tangpizhikou'])
            ->setCellValue('M'.$i,$v['tangpizhikout'])
            ->setCellValue('N'.$i,$v['tangpizhixi'])
            ->setCellValue('O'.$i,$v['tangpizhixit'])
            ->setCellValue('P'.$i,$v['zhiqiguankou'])
            ->setCellValue('Q'.$i,$v['zhiqiguankout'])
            ->setCellValue('R'.$i,$v['zhiqiguanxi'])
            ->setCellValue('S'.$i,$v['zhiqiguanxit'])

            ;
 $i++;
}
$objPHPExcel->getActiveSheet()->setTitle('用户信息');
$objPHPExcel->setActiveSheetIndex(0);
$filename=urlencode('信息统计表').'_'.date('Y-m-dHis');



//*生成xlsx文件
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
header('Cache-Control: max-age=0');
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');


/*
*生成xls文件
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
*/

$objWriter->save('php://output');
exit;
?>
