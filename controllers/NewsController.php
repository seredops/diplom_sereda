<?php
include_once ROOT. '/models/News.php';
class NewsController {
	public function actionIndex()
		{
			echo 'Список новостей';
		    return true;
		}
    public function actionView($category, $id)
    {
	    echo 'Просмотр одной новости';
	    return true;
    }
		
}

