<?php 
require_once(APP . '..\Vendor' . DS . 'phpexcel' . DS . 'PHPExcel.php');
$objPHPExcel = new PHPExcel();
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');
if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Big PayUp")
							 ->setLastModifiedBy("Big PayUp")
							 ->setTitle("Attendance Sheet")
							 ->setSubject("Big PayUp")
							 ->setDescription("Big PayUp to import data.")
							 ->setKeywords("")
							 ->setCategory("Attendance");

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Employee No.')
            ->setCellValue('B1', 'Employee Name')
            ->setCellValue('C1', 'Father Name')
            ->setCellValue('D1', 'Designation')
			->setCellValue('E1', 'Month')
			->setCellValue('F1', 'Days')
			->setCellValue('G1', 'Overtime (Days)')
			->setCellValue('H1', 'Overtime (Hrs)');
$cnt=2;
//printr($employees);exit;
foreach($employees as $employee)
{
		$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$cnt, $employee->employee_no)
            ->setCellValue('B'.$cnt, $employee->employee_name)
            ->setCellValue('C'.$cnt, $employee->father_name)
            ->setCellValue('D'.$cnt, $employee->designation->name)
			->setCellValue('E'.$cnt, $pmonth)
			->setCellValue('R'.$cnt, '')
			->setCellValue('T'.$cnt, '')
			->setCellValue('H'.$cnt, '');
			$cnt++;
}
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Attendance Sheet');
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Big-PayUp-AttendanceSheet.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

?>