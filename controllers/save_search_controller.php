<?php
class save_search_controller extends main_controller
{
	//public $components = array('SimpleImage');
	public function index() 
	{
		// $students = new student_model();
		// $records = $students->getAllRecords();
		//include_once "views/".$this->controller."/".$this->action.".php";
		
		// $this->setProperty('records',$records);

		$this->display();
	} 
	public function country() 
	{

		$provider = $_GET["provider"];
		// if( $provider == "goolge") {

		// }
		if($provider == "goolge") {
			$string = file_get_contents("json/country_google.json");
		}
		if($provider == "youtube") {
			$string = file_get_contents("json/country_youtube.json");
		}
		if($provider == "bing") {
			$string = file_get_contents("json/country_bing.json");
		}
		if($provider == "app_store") {
			$string = file_get_contents("json/country_app_store.json");
		}
		$json_a = json_decode($string, TRUE);
		echo json_encode($json_a);
		exit();
		
	}
	public function language() 
	{
		$provider = $_GET["provider"];
		if($provider == "goolge") {
			$string = file_get_contents("json/language_google.json");
		}
		if($provider == "youtube") {
			$string = file_get_contents("json/language_youtube.json");
		}
		if($provider == "bing") {
			$string = file_get_contents("json/language_bing.json");
		}
		if($provider == "app_store") {
			$string = file_get_contents("json/language_app_store.json");
		}
		$json_a = json_decode($string, TRUE);
		echo json_encode($json_a);
		exit();
		
	}
	public function search($keyword , $provider){
		if($provider == "google"){
			$string = file_get_contents("json/google.json");
		}
		if($provider == "youtube"){
			$string = file_get_contents("json/youtube.json");
		}
		if($provider == "app_store"){
			$string = file_get_contents("json/app_store.json");
		}
		if($provider == "bing"){
			$string = file_get_contents("json/bing.json");
		}
		$json_a = json_decode($string, TRUE);

		$data = array(); 
		$i = 0;

		foreach ($json_a['results'] as $key => $value) {
			if (strpos($value[0]["string"],$keyword) !== false){

				$data[$i] = $value[0];
				$i = $i + 1;
			}
		}
	 	return $data;
	}
	public function add() 
	{
		$savesearch = new save_search_model();
		$record = $savesearch->check($_GET['keyword']);
		if($record){
			//da ton tai trong database
			$arrData = $this->search($_GET['keyword'], $_GET['provider']);
			$this->setProperty('arrData',$arrData);
		}else{
			if(isset($_GET['keyword'])) {
			$arrData = $this->search($_GET['keyword']);
			$savesearchData['keyword'] = $_GET['keyword'];
			$savesearchData['data'] = json_encode($arrData);
			$savesearchData['provider'] = $_GET['provider'];
			$savesearchData['country'] = $_GET['country'];
			$savesearchData['language'] = $_GET['lng'];
			$savesearchData['date'] = date('Y-m-d H:i:s');;
			if(!empty($savesearchData['keyword']))  {
					$savesearch = new save_search_model();
					if($savesearch->addRecord($savesearchData)) {
						$this->setProperty('arrData',$arrData);
					}
				}
			}
		}
		
		$options['act'] = 'index';
		$this->display($options);
	}

	
}
?>
