<?

require "../includes/libs/redbean/rb-mysql.php";
require "../includes/config.php";

class add{

	public $r;
	
	function create($type,$pet,$ra,$dateLost,$description,$more,$phone,$vk,$tg){

		if (!($this->check($type, $pet, $ra, $dateLost, $description))) {return false;}

		$articles = R::dispense('articles');
		$articles->title = 'find';
		$articles->description = htmlspecialchars($description);
		$articles->type = $type;
		$articles->pet = $pet;
		$articles->area = $ra;
		$articles->dateLost = $dateLost;
		$articles->dateCreate = time();
		$articles->datePub = 0;
		$articles->pubType = false;
		$articles = R::store($articles);

		$articles_more = R::dispense('articles_more');
		$articles_more->text = $more;
		$articles_more = R::store($articles_more);

		$articles_connect = R::dispense('articles_connect');
		$articles_connect->phone = $phone;
		$articles_connect->vk = $vk;
		$articles_connect->tg = $tg;
		$articles_connect = R::store($articles_connect);

	}

	function check($type,$pet,$ra,$dateLost,$description){
		if (!($type == 'lost' or $type == 'find')){return false;}
		if (!($pet == 'cat' or $pet == 'dog')){return false;}
		if (!(in_array($ra, $this->r))){return false;}
		if (!(strlen($description) <=200)){return false;}
	}
}