<?php defined('BASEPATH') OR exit('No direct script access allowed');
// generate pdf
/* function generate_pdf($name, $tpl, $data)
{
    $ci = &get_instance();
    $data['data'] = $data;
    $ci->load->view($tpl, $data);
    // Get output html
    $html = $ci->output->get_output();
// add external css library
    $html .= '<link href="' . base_url() . 'web_files/css/bootstrap.min.css" rel="stylesheet">';
    // Load pdf library
    $ci->load->library('pdf');
    $ci->dompdf->loadHtml($html);
    // setup size
    $ci->dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $ci->dompdf->render();
    // Output  PDF (1 = download and 0 = preview)
    $ci->dompdf->stream($name, array("Attachment" => 0));
}
?>
<?php  */
class Currency
{
    public function __construct(){
		
	} 
	public function getIndianCurrency(float $number)
		{
			$decimal = round($number - ($no = floor($number)), 2) * 100;
			$hundred = null;
			$digits_length = strlen($no);
			$i = 0;
			$str = array();
			$words = array(0 => '', 1 => 'One', 2 => 'Two',
				3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
				7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
				10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
				13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
				16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
				19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
				40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
				70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
			$digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
			while( $i < $digits_length ) {
				$divider = ($i == 2) ? 10 : 100;
				$number = floor($no % $divider);
				$no = floor($no / $divider);
				$i += $divider == 10 ? 1 : 2;
				if ($number) {
					$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
					$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
					$str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
				} else $str[] = null;
			}
			$Rupees = implode('', array_reverse($str));
			$paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
			return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
		}
	}
?>