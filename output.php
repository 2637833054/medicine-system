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
            ->setCellValue('B1','姓名')
            ->setCellValue('C1','性别')
            ->setCellValue('D1','年龄')
            ->setCellValue('E1','出生日期')
            ->setCellValue('F1','民族')
            ->setCellValue('G1','籍贯')
            ->setCellValue('H1','长期居住地')
            ->setCellValue('I1','长期居住地')
            ->setCellValue('J1','职业')
            ->setCellValue('K1','联系电话')
            ->setCellValue('L1','联系人')
            ->setCellValue('M1','联系人电话')
            ->setCellValue('N1','既往病史一')
            ->setCellValue('O1','既往病史二')
            ->setCellValue('P1','过敏史1')
            ->setCellValue('Q1','过敏史2')
            ->setCellValue('R1','过敏史3')
            ->setCellValue('S1','家庭史')
            ->setCellValue('T1','身高')
            ->setCellValue('U1','体重')
            ->setCellValue('V1','第几胎')
            ->setCellValue('W1','喂养方式')
            ->setCellValue('X1','早产')
            ->setCellValue('Y1','初步诊断1')
            ->setCellValue('Z1','初步诊断2')
            ->setCellValue('AA1','初步诊断3')
            ->setCellValue('AB1','发病季节1')
            ->setCellValue('AC1','发病季节2')
            ->setCellValue('AD1','喷嚏')
            ->setCellValue('AE1','流涕')
            ->setCellValue('AF1','鼻痒')
            ->setCellValue('AG1','鼻塞')
            ->setCellValue('AH1','眼痒')
            ->setCellValue('AI1','眼红')
            ->setCellValue('AJ1','流泪')
            ->setCellValue('AK1','哮喘日间评分')
            ->setCellValue('AL1','哮喘夜间评分')
            ->setCellValue('AM1','喷嚏2')
            ->setCellValue('AN1','流涕2')
            ->setCellValue('AO1','鼻痒2')
            ->setCellValue('AP1','鼻塞2')
            ->setCellValue('AQ1','眼痒2')
            ->setCellValue('AR1','眼红2')
            ->setCellValue('AS1','流泪2')
            ->setCellValue('AT1','哮喘日间评分2')
            ->setCellValue('AU1','哮喘夜间评分2')
            ->setCellValue('AV1','NO呼气浓度')
            ->setCellValue('AW1','均值')
            ->setCellValue('AX1','产生速率')
            ->setCellValue('AY1','呼吸总阻抗')
            ->setCellValue('AZ1','气道总阻抗')
            ->setCellValue('BA1','中心气道阻力')
            ->setCellValue('BB1','周围弹性阻力')
            ->setCellValue('BC1','用药前FEV1')
            ->setCellValue('BD1','用药后FEV1')
            ->setCellValue('BE1','用药前FEV1/FVC')
            ->setCellValue('BF1','用药后FEV1/FVC')
            ->setCellValue('BG1','NO呼气浓度b')
            ->setCellValue('BH1','均值b')
            ->setCellValue('BI1','产生速率b')
            ->setCellValue('BJ1','呼吸总阻抗b')
            ->setCellValue('BK1','气道总阻抗b')
            ->setCellValue('BL1','中心气道阻力b')
            ->setCellValue('BM1','周围弹性阻力b')
            ->setCellValue('BN1','用药前FEV1b')
            ->setCellValue('BO1','用药后FEV1b')
            ->setCellValue('BP1','用药前FEV1/FVCb')
            ->setCellValue('BQ1','用药后FEV1/FVCb')
            ->setCellValue('BR1','抗组胺鼻用')
            ->setCellValue('BS1','抗组胺鼻用t')
            ->setCellValue('BT1','抗组胺口服')
            ->setCellValue('BU1','抗组胺口服t')
            ->setCellValue('BV1','抗白三烯鼻用')
            ->setCellValue('BW1','抗白三烯鼻用t')
            ->setCellValue('BX1','抗白三烯口服')
            ->setCellValue('BY1','抗白三烯口服t')
            ->setCellValue('BZ1','糖皮质鼻用')
            ->setCellValue('CA1','糖皮质鼻用t')
            ->setCellValue('CB1','糖皮质口服')
            ->setCellValue('CC1','糖皮质口服t')
            ->setCellValue('CD1','糖皮质吸入')
            ->setCellValue('CE1','糖皮质吸入t')
            ->setCellValue('CF1','支气管口服')
            ->setCellValue('CG1','支气管口服t')
            ->setCellValue('CH1','支气管吸入')
            ->setCellValue('CI1','支气管吸入t')
           
            ;
           

$ret=$db->query('select * from doctor');
// $ret->fetch_array();
$i=2;   
while ( $v=$ret->fetch_array()) {
   $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i,$v['id'])
            ->setCellValue('B'.$i,$v['username'])
            ->setCellValue('C'.$i,$v['sex'])
            ->setCellValue('D'.$i,$v['age'])
            ->setCellValue('E'.$i,$v['birthday'])
            ->setCellValue('F'.$i,$v['national'])
            ->setCellValue('G'.$i,$v['place'])
            ->setCellValue('H'.$i,$v['longplace'])
            ->setCellValue('I'.$i,$v['longplaceb'])
            ->setCellValue('J'.$i,$v['professional'])
            ->setCellValue('K'.$i,$v['tell'])
            ->setCellValue('L'.$i,$v['linkman'])
            ->setCellValue('M'.$i,$v['linkmantell'])
            ->setCellValue('N'.$i,$v['medicalhistory'])
            ->setCellValue('O'.$i,$v['medicalhistoryb'])
            ->setCellValue('P'.$i,$v['allergya'])
            ->setCellValue('Q'.$i,$v['allergyb'])
            ->setCellValue('R'.$i,$v['allergyc'])
            ->setCellValue('S'.$i,$v['familyhistory'])
            ->setCellValue('T'.$i,$v['height'])
            ->setCellValue('U'.$i,$v['weight'])
            ->setCellValue('V'.$i,$v['child'])
            ->setCellValue('W'.$i,$v['feeding'])
            ->setCellValue('X'.$i,$v['zaocan'])
            ->setCellValue('Y'.$i,$v['primarydiagnosisa'])
            ->setCellValue('Z'.$i,$v['primarydiagnosisb'])
            ->setCellValue('AA'.$i,$v['primarydiagnosisc'])
            ->setCellValue('AB'.$i,$v['season'])
            ->setCellValue('AC'.$i,$v['seasonb'])
            ->setCellValue('AD'.$i,$v['sneezing'])
            ->setCellValue('AE'.$i,$v['runnynose'])
            ->setCellValue('AF'.$i,$v['nasalitching'])
            ->setCellValue('AG'.$i,$v['stuffynose'])
            ->setCellValue('AH'.$i,$v['eyeitching'])
            ->setCellValue('AI'.$i,$v['envy'])
            ->setCellValue('AJ'.$i,$v['tears'])
            ->setCellValue('AK'.$i,$v['dayscore'])
            ->setCellValue('AL'.$i,$v['nightscore'])
            ->setCellValue('AM'.$i,$v['sneezingb'])
            ->setCellValue('AN'.$i,$v['runnynoseb'])
            ->setCellValue('AO'.$i,$v['nasalitching'])
            ->setCellValue('AP'.$i,$v['stuffynoseb'])
            ->setCellValue('AQ'.$i,$v['eyeitchingb'])
            ->setCellValue('AR'.$i,$v['envyb'])
            ->setCellValue('AS'.$i,$v['tearsb'])
            ->setCellValue('AT'.$i,$v['dayscoreb'])
            ->setCellValue('AU'.$i,$v['nightscoreb'])
            ->setCellValue('AV'.$i,$v['NO'])
            ->setCellValue('AW'.$i,$v['junzhi'])
            ->setCellValue('AX'.$i,$v['sulv'])
            ->setCellValue('AY'.$i,$v['huxi'])
            ->setCellValue('AZ'.$i,$v['qidao'])
            ->setCellValue('BA'.$i,$v['zhongxin'])
            ->setCellValue('BB'.$i,$v['zhouwei'])
            ->setCellValue('BC'.$i,$v['yaoqianFEV'])
            ->setCellValue('BD'.$i,$v['yaohouFEV'])
            ->setCellValue('BE'.$i,$v['yaoqianFVC'])
            ->setCellValue('BF'.$i,$v['yaohouFVC'])
            ->setCellValue('BG'.$i,$v['NOb'])
            ->setCellValue('BH'.$i,$v['junzhib'])
            ->setCellValue('BI'.$i,$v['sulvb'])
            ->setCellValue('BJ'.$i,$v['huxib'])
            ->setCellValue('BK'.$i,$v['qidaob'])
            ->setCellValue('BL'.$i,$v['zhongxinb'])
            ->setCellValue('BM'.$i,$v['zhouweib'])
            ->setCellValue('BN'.$i,$v['yaoqianFEVb'])
            ->setCellValue('BO'.$i,$v['yaohouFEVb'])
            ->setCellValue('BP'.$i,$v['yaoqianFVCb'])
            ->setCellValue('BQ'.$i,$v['yaohouFVCb'])
            ->setCellValue('BR'.$i,$v['kangzuanbi'])
            ->setCellValue('BS'.$i,$v['kangzuanbit'])
            ->setCellValue('BT'.$i,$v['kangzuankou'])
            ->setCellValue('BU'.$i,$v['kangzuankout'])
            ->setCellValue('BV'.$i,$v['kangbaisanxibi'])
            ->setCellValue('BW'.$i,$v['kangbaisanxibit'])
            ->setCellValue('BX'.$i,$v['kangbaisanxikou'])
            ->setCellValue('BY'.$i,$v['kangbaisanxikout'])
            ->setCellValue('BZ'.$i,$v['tangpizhibi'])
            ->setCellValue('CA'.$i,$v['tangpizhibit'])
            ->setCellValue('CB'.$i,$v['tangpizhikou'])
            ->setCellValue('CC'.$i,$v['tangpizhikout'])
            ->setCellValue('CD'.$i,$v['tangpizhixi'])
            ->setCellValue('CE'.$i,$v['tangpizhixit'])
            ->setCellValue('CF'.$i,$v['zhiqiguankou'])
            ->setCellValue('CG'.$i,$v['zhiqiguankout'])
            ->setCellValue('CH'.$i,$v['zhiqiguanxi'])
            ->setCellValue('CI'.$i,$v['zhiqiguanxit'])

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
