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
            ->setCellValue('B1','室内尘土1')
            ->setCellValue('C1','室内尘土2')
            ->setCellValue('D1','夏秋花粉Ⅰ1')
            ->setCellValue('E1','夏秋花粉Ⅰ2')
            ->setCellValue('F1','多价真菌Ⅰ1')
            ->setCellValue('G1','多价真菌Ⅰ2')
            ->setCellValue('H1','大籽嵩花粉1')
            ->setCellValue('I1','大籽嵩花粉2')
            ->setCellValue('J1','春季花粉Ⅰ1')
            ->setCellValue('K1','春季花粉Ⅰ2')
            ->setCellValue('L1','豚草花粉1')
            ->setCellValue('M1','豚草花粉2')
            ->setCellValue('N1','春季花粉Ⅱ1')
            ->setCellValue('O1','春季花粉Ⅱ2')
            ->setCellValue('P1','粉尘螨1')
            ->setCellValue('Q1','粉尘螨2')
            ->setCellValue('R1','多价真菌Ⅱ1')
            ->setCellValue('S1','多价真菌Ⅱ2')
            ->setCellValue('T1','户尘螨1')
            ->setCellValue('U1','户尘螨2')
            ->setCellValue('V1','棉絮1')
            ->setCellValue('W1','棉絮2')
            ->setCellValue('X1','桑蚕丝1')
            ->setCellValue('Y1','桑蚕丝2')
            ->setCellValue('Z1','荞麦壳1')
            ->setCellValue('AA1','荞麦壳2')
            ->setCellValue('AB1','多价真菌Ⅲ1')
            ->setCellValue('AC1','多价真菌Ⅲ2')
            ->setCellValue('AD1','蟑螂1')
            ->setCellValue('AE1','蟑螂2')
            ->setCellValue('AF1','麻1')
            ->setCellValue('AG1','麻2')
            ->setCellValue('AH1','狗皮1')
            ->setCellValue('AI1','狗皮2')
            ->setCellValue('AJ1','枝状枝孢1')
            ->setCellValue('AK1','枝状枝孢2')
            ->setCellValue('AL1','互隔铰链孢1')
            ->setCellValue('AM1','互隔铰链孢2')
            ->setCellValue('AN1','黄花嵩花粉1')
            ->setCellValue('AO1','黄花嵩花粉2')
            ->setCellValue('AP1','柏树花粉1')
            ->setCellValue('AQ1','柏树花粉2')
            ->setCellValue('AR1','油菜花粉1')
            ->setCellValue('AS1','油菜花粉2')
            ->setCellValue('AT1','春季花粉Ⅲ1')
            ->setCellValue('AU1','春季花粉Ⅲ2')
            ->setCellValue('AV1','猫毛1')
            ->setCellValue('AW1','猫毛2')
            ->setCellValue('AX1','白蜡花粉Ⅰ1')
            ->setCellValue('AY1','白蜡花粉Ⅰ2')
            ->setCellValue('AZ1','地肤花粉1')
            ->setCellValue('BA1','地肤花粉2')
            ->setCellValue('BB1','黎花粉1')
            ->setCellValue('BC1','黎花粉2')
            ->setCellValue('BD1','梧桐花粉1')
            ->setCellValue('BE1','梧桐花粉2')
            ->setCellValue('BF1','葎草花粉1')
            ->setCellValue('BG1','葎草花粉2')
            ->setCellValue('BH1','夏秋花粉Ⅱ1')
            ->setCellValue('BI1','夏秋花粉Ⅱ2')
            ->setCellValue('BJ1','总IgE')
            ->setCellValue('BK1','总IgEb')
            ->setCellValue('BL1','过敏e×1皮毛')
            ->setCellValue('BM1','过敏e×1皮毛b')
            ->setCellValue('BN1','过敏f×1坚果')
            ->setCellValue('BO1','过敏f×1坚果b')
            ->setCellValue('BP1','过敏f×5蛋白')
            ->setCellValue('BQ1','过敏f×5蛋白b')
            ->setCellValue('BR1','过敏h×2尘螨')
            ->setCellValue('BS1','过敏h×2尘螨b')
            ->setCellValue('BT1','过敏m×2真菌')
            ->setCellValue('BU1','过敏m×2真菌b')
            ->setCellValue('BV1','过敏t×5树粉')
            ->setCellValue('BW1','过敏t×5树粉b')
            ->setCellValue('BX1','过敏w×5草粉')
            ->setCellValue('BY1','过敏w×5草粉b')
            ->setCellValue('BZ1','脱敏种类')
            ;
           

$ret=$db->query('select * from doctorb');
// $ret->fetch_array();
$i=2;   
while ( $v=$ret->fetch_array()) {
   $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i,$v['id'])
            ->setCellValue('B'.$i,$v['aa'])
            ->setCellValue('C'.$i,$v['ab'])
            ->setCellValue('D'.$i,$v['ba'])
            ->setCellValue('E'.$i,$v['bb'])
            ->setCellValue('F'.$i,$v['ca'])
            ->setCellValue('G'.$i,$v['cb'])
            ->setCellValue('H'.$i,$v['da'])
            ->setCellValue('I'.$i,$v['db'])
            ->setCellValue('J'.$i,$v['ea'])
            ->setCellValue('K'.$i,$v['eb'])
            ->setCellValue('L'.$i,$v['fa'])
            ->setCellValue('M'.$i,$v['fb'])
            ->setCellValue('N'.$i,$v['ga'])
            ->setCellValue('O'.$i,$v['gb'])
            ->setCellValue('P'.$i,$v['ha'])
            ->setCellValue('Q'.$i,$v['hb'])
            ->setCellValue('R'.$i,$v['ia'])
            ->setCellValue('S'.$i,$v['ib'])
            ->setCellValue('T'.$i,$v['ja'])
            ->setCellValue('U'.$i,$v['jb'])
            ->setCellValue('V'.$i,$v['ka'])
            ->setCellValue('W'.$i,$v['kb'])
            ->setCellValue('X'.$i,$v['la'])
            ->setCellValue('Y'.$i,$v['lb'])
            ->setCellValue('Z'.$i,$v['ma'])
            ->setCellValue('AA'.$i,$v['mb'])
            ->setCellValue('AB'.$i,$v['na'])
            ->setCellValue('AC'.$i,$v['nb'])
            ->setCellValue('AD'.$i,$v['oa'])
            ->setCellValue('AE'.$i,$v['ob'])
            ->setCellValue('AF'.$i,$v['pa'])
            ->setCellValue('AG'.$i,$v['pb'])
            ->setCellValue('AH'.$i,$v['qa'])
            ->setCellValue('AI'.$i,$v['qb'])
            ->setCellValue('AJ'.$i,$v['ra'])
            ->setCellValue('AK'.$i,$v['rb'])
            ->setCellValue('AL'.$i,$v['sa'])
            ->setCellValue('AM'.$i,$v['sb'])
            ->setCellValue('AN'.$i,$v['ta'])
            ->setCellValue('AO'.$i,$v['tb'])
            ->setCellValue('AP'.$i,$v['ua'])
            ->setCellValue('AQ'.$i,$v['ub'])
            ->setCellValue('AR'.$i,$v['va'])
            ->setCellValue('AS'.$i,$v['vb'])
            ->setCellValue('AT'.$i,$v['wa'])
            ->setCellValue('AU'.$i,$v['wb'])
            ->setCellValue('AV'.$i,$v['xa'])
            ->setCellValue('AW'.$i,$v['xb'])
            ->setCellValue('AX'.$i,$v['ya'])
            ->setCellValue('AY'.$i,$v['yb'])
            ->setCellValue('AZ'.$i,$v['za'])
            ->setCellValue('BA'.$i,$v['zb'])
            ->setCellValue('BB'.$i,$v['lia'])
            ->setCellValue('BC'.$i,$v['lib'])
            ->setCellValue('BD'.$i,$v['wua'])
            ->setCellValue('BE'.$i,$v['wub'])
            ->setCellValue('BF'.$i,$v['lva'])
            ->setCellValue('BG'.$i,$v['lvb'])
            ->setCellValue('BH'.$i,$v['xiaa'])
            ->setCellValue('BI'.$i,$v['xiab'])

            ->setCellValue('BJ'.$i,$v['IgE'])
            ->setCellValue('BK'.$i,$v['IgEb'])
            ->setCellValue('BL'.$i,$v['pimao'])
            ->setCellValue('BM'.$i,$v['pimaob'])
            ->setCellValue('BN'.$i,$v['jianguo'])
            ->setCellValue('BO'.$i,$v['jianguob'])
            ->setCellValue('BP'.$i,$v['danbai'])
            ->setCellValue('BQ'.$i,$v['danbaib'])
            ->setCellValue('BR'.$i,$v['cengman'])
            ->setCellValue('BS'.$i,$v['cengmanb'])
            ->setCellValue('BT'.$i,$v['zhenjun'])
            ->setCellValue('BU'.$i,$v['zhenjunb'])
            ->setCellValue('BV'.$i,$v['shufen'])
            ->setCellValue('BW'.$i,$v['shufenb'])
            ->setCellValue('BX'.$i,$v['caofen'])
            ->setCellValue('BY'.$i,$v['caofenb'])
            ->setCellValue('BZ'.$i,$v['tuominzhonglei'])

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
