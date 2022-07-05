<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	 
	 function __construct()
	{
		parent::__construct();	 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}
	
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('home');
	}
	

	public function querynav()
	{	
		$this->load->view('header');
		$this->load->view('querynav_view');
	}
	
	
	
	public function cinema()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('cinema');
		$crud->set_subject('cinema');
		$crud->columns('CinemaName', 'CinemaLocation', 'CinemaAddress', 'CinemaManager');
		$crud->fields('CinemaName', 'CinemaLocation', 'CinemaAddress', 'CinemaManager');
		$crud->required_fields('CinemaName', 'CinemaLocation');
		$crud->display_as('CinemaNo', 'Cinema Number');
		$crud->display_as('CinemaName', 'Name');
		$crud->display_as('CinemaLocation', 'Location');
		$crud->display_as('CinemaAddress', 'Address');
		$crud->display_as('CinemaManager', 'Manager');

		$output = $crud->render();
		$this->cinema_output($output);
	}
	
	function cinema_output($output = null)
	{
		$this->load->view('cinema_view.php', $output);
	}
	
	public function screen()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('screen');
		$crud->set_subject('screen');
		$crud->columns('CinemaName', 'ScreenNo', 'Seats', 'SeatPrice');
		$crud->fields('CinemaName', 'ScreenNo', 'Seats', 'SeatPrice');
		$crud->required_fields('CinemaName', 'ScreenNo', 'Seats');
		$crud->display_as('CinemaName', 'Cinema');
		$crud->display_as('ScreenNo', 'Screen Number');
		$crud->display_as('Seats', 'Seats');
		$crud->display_as('SeatPrice', 'Price GBP');

		$output = $crud->render();
		$this->screen_output($output);
	}
	
	function screen_output($output = null)
	{
		$this->load->view('screen_view.php', $output);
	}
	
	public function film()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('film');
		$crud->set_subject('film');
		$crud->columns( 'FilmName', 'FilmDirector', 'ReleaseYear');
		$crud->fields('FilmName', 'FilmDirector', 'ReleaseYear', 'imdbPage');
		$crud->required_fields('FilmNo', 'ReleaseYear', 'FilmName', 'FilmDirector');
		$crud->display_as('FilmNo', 'Film No');
		$crud->display_as('ReleaseYear', 'Released');
		$crud->display_as('FilmName', 'Title');
		$crud->display_as('FilmDirector', 'Director');
		$crud->display_as('imdbPage', 'Link to IMDb page');
		$crud->add_action('ImDb Link', '', 'https://www.imdb.com/title/', '');   

		$output = $crud->render();
		$this->film_output($output);
	} 
	
	function film_output($output = null)
	{
		$this->load->view('film_view.php', $output);
	}
	
	public function performance()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('performance');
		$crud->set_subject('performance');
		$crud->columns('FilmName', 'CinemaName', 'ScreenNo',  'PerformanceDate', 'PerformanceTime', 'RemainingSeats');
		$crud->fields('FilmName', 'CinemaName', 'ScreenNo', 'PerformanceDate', 'PerformanceTime', 'RemainingSeats', 'PerformanceStatus');
		$crud->required_fields('CinemaName', 'FilmName');
		$crud->display_as('FilmName', 'Film Name');
		$crud->display_as('PerformanceNo', 'Performance No');
		$crud->display_as('CinemaName', 'CinemaName');
		$crud->display_as('ScreenNo', 'Screen');
		$crud->display_as('PerformanceDate', 'Date');
		$crud->display_as('PerformanceTime', 'Time');
		$crud->display_as('RemainingSeats', 'Remaining Seats');
		$crud->order_by('PerformanceDate','desc');
		
		#$crud->set_relation('FilmName', 'film', '{filmname}');
		
		#$crud->set_relation('CinemaName', 'Screen','cinemaname');
		#$crud->set_relation('ScreenNo', 'Screen','screenno');
		
		$output = $crud->render();
		$this->performance_output($output);
		
	}
	
	function performance_output($output = null)
	{
		$this->load->view('performance_view.php', $output);
	}
	
	public function member()
	{	
		
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('member');
		$crud->set_subject('member');
		$crud->columns( 'MemberName', 'JoinDate','MemberNo', 'MemberStatus');
		$crud->fields( 'MemberTitle', 'MemberName', 'JoinDate', 'MemberNo', 'MemberStatus');
		$crud->required_fields('MemberNo', 'MemberTitle', 'MemberName', 'JoinDate', 'MemberStatus');
		$crud->display_as('MemberNo', 'Membership No');
		$crud->display_as('MemberTitle', 'Title');
		$crud->display_as('MemberName', 'Name');
		$crud->display_as('JoinDate', 'Joined');
		$crud->display_as('MemberStatus', 'Status');
		
		
		
		$output = $crud->render();
		$this->member_output($output);
	}
	
	function member_output($output = null)
	{
		$this->load->view('member_view.php', $output);
	}
	
	public function booking()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		#$crud->where('MemberStatus','Active');
		$crud->set_theme('datatables');
		$crud->set_table('booking');
		$crud->set_subject('booking');
		$crud->columns( 'MemberNo', 'PerformanceNo','NumSeats');
		$crud->fields( 'MemberNo', 'PerformanceNo',  'NumSeats');
		$crud->required_fields('BookingNo', 'MemberNo', 'PerformanceNo', 'NumSeats');
		$crud->display_as('BookingNo', 'Booking Number');
		$crud->display_as('MemberNo', 'Customer');
		$crud->display_as('PerformanceNo', 'Film (Date and Time)');
		$crud->display_as('NumSeats', 'Number of seats');
		
	
		$crud->set_relation('PerformanceNo','performance','<b>{FilmName} </b> at <b>{CinemaName}</b> on ( {PerformanceDate} {PerformanceTime} )');
		$crud->set_relation('MemberNo','Member','{MemberName}');
		
		$output = $crud->render();
		$this->booking_output($output);
	}
	
	function booking_output($output = null)
	{
		$this->load->view('booking_view.php', $output);
	}	
		public function login()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('login');
		$crud->set_subject('login');
		$crud->fields('username','password');
		$crud->required_fields('username','password');
		$crud->display_as('username', 'username');
		$crud->display_as('password', 'password');
		
		$output = $crud->render();
		$this->login_output($output);
	}
	
	function login_output($output = null)
	{
		$this->load->view('login_view.php', $output);
	}
	public function faq()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('faq');
		$crud->set_subject('faq');
	    $crud->fields('FAQ', 'FAQ2', 'FAQ3');
		$crud->required_fields('FAQ', 'FAQ2', 'FAQ3');
		$crud->display_as('FAQ', 'FAQ');
		$crud->display_as('FAQ2', 'FAQ2');
		$crud->display_as('FAQ3', 'FAQ3');


		
		$output = $crud->render();
		$this->faq_output($output);
	}
	function faq_output($output = null)
	{
		$this->load->view('faq_view.php', $output);
	}
	public function managebookings()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_model('custom_query_model');
		$crud->set_table('managebookings');
		$crud->basic_model->set_query_str("select `orders`.`booking`.`BookingNo` AS `BookingNo`,`orders`.`performance`.`FilmName` AS `FilmName`,`orders`.`member`.`MemberName` AS `MemberName`,`orders`.`performance`.`PerformanceStatus` AS `PerformanceStatus`,`orders`.`screen`.`ScreenStatus` AS `ScreenStatus`,`orders`.`performance`.`PerformanceDate` AS `Date` ,`orders`.`performance`.`cinemaname` AS `CinemaName` from (((`orders`.`performance` join `orders`.`booking` on((`orders`.`performance`.`PerformanceNo` = `orders`.`booking`.`PerformanceNo`))) join `orders`.`screen` on((`orders`.`performance`.`ScreenNo` = `orders`.`screen`.`ScreenNo`))) join `orders`.`member` on((`orders`.`booking`.`MemberNo` = `orders`.`member`.`MemberNo`))) where ((`orders`.`performance`.`PerformanceStatus` = 'Closed') or (`orders`.`screen`.`ScreenStatus` = 'Closed')) group by `orders`.`booking`.`BookingNo`"); //Query text here
		$crud->unset_add();
        $crud->unset_edit();
		$crud->unset_export();
        $crud->unset_delete();
		$crud->unset_read();
		
		
		#$crud->fields('FilmName', 'MemberName', 'PerformanceStatus');
				
		$output = $crud->render();
		$this->managebookings_output($output);
	}
	function managebookings_output($output = null)
	
	
	{
		$this->load->view('managebookings_view.php', $output);
	}
		public function review()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('film-review');
		$crud->set_subject('film-review');
	    $crud->fields('film','imdb');
		$crud->required_fields('film','imdb');
		$crud->display_as('film', 'movie');
		$crud->display_as('imdb', 'imdb');


		
		$output = $crud->render();
		$this->review_output($output);
	}
	function review_output($output = null)
	{
		$this->load->view('film-review.php', $output);
	}

}