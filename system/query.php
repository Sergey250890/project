<?

require "../includes/libs/redbean/rb-mysql.php";
require "../includes/config.php";

class query{

	function getLastest($limit = 6){
		return R::findAll("articles', 'ORDERED BY ID DESC LIMIT = ?", [$limit];
	}
	function getArticles($limit = 6, $offset = 0){
		return R::findAll("articles', 'ORDERED BY ID DESC LIMIT = ? OFFSET = ?", [$limit, $offset];
	}
	function search($limit, $offset, $r, $type){
		return R::findAll("articles', 'area = ? AND type = ? ORDERED BY ID DESC LIMIT = ? OFFSET = ?", [$r,$type,$limit, $offset];
	}
	function getPost($id){
		$articles = R::findOne("articles', 'id = ? ", [$id]);
		$articles_more = R::findOne("articles_more', 'id = ? ", [$id]);
		$articles_connect = R::findOne("articles_connect', 'id = ? ", [$id]);
		return [$articles, $articles_more, $articles_connect];
	}
}