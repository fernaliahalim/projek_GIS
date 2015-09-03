<?PHP
	/**
	* 
	*/
	class Style extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->load->view('style_v');
		}

		public function pdf()
		{

			$this->load->view('Style.pdf');
			/*$this->load->library('tcpdf');
			$this->load->library('parser');
			$pdf = new tcpdf();
			$orientation = 'p';
			$format = 'A4';
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = 'dejavusans';
			$style = '';
			$size = '10'; 
			
			$pdf->SetFont($family, $style, $size);
			
			
			$html = $this->parser->parse('<?PHP echo base_url();?>assets/pdf/Style.pdf',array());
			$pdf->WriteHTML($html);
			$pdf->output();*/
			
		}
	}
?>