<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Lists Controller
    |--------------------------------------------------------------------------
    */
    
    
    protected function showUsers()
    {
		$userlist = array(
			1 => array('Ivan','Ivanov','10000'),
			2 => array('Petr','Petrov','20000'),
			3 => array('Smith','Smithson','30000'),
		);
		
		$userlistHtml = "
<!doctype html>
<html lang='ru'>
	<head>
		<meta charset='utf-8'>
		<title>Userlist</title>
	</head>
	<body>
		<div style='width:500px;margin:30px auto;text-align:center;'>
		";
		foreach ($userlist as $id => $user) {
			$userlistHtml .= "
				<span style='font-weight:bold;'>ID:</span> " . $id . ", <span style='font-weight:bold;'>Name:</span> " . $user[0] . ", <span style='font-weight:bold;'>Surname:</span> " . $user[1] . ", <span style='font-weight:bold;'>Salary:</span> " . $user[2] . " <br/><br/>
			";
		}
		$userlistHtml .= "
		</div>
	</body>
</html>";
		return  $userlistHtml;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function showTasks()
    {
		$taskslist = array(
			1 => array('Task 1','01.01.2015','01.02.2015'),
			2 => array('Task 2','01.01.2016','01.02.2016'),
			3 => array('Task 3','01.01.2017','01.02.2017'),
		);
		
		$taskslistHtml = "
<!doctype html>
<html lang='ru'>
	<head>
		<meta charset='utf-8'>
		<title>Taskslist</title>
	</head>
	<body>
		<div style='width:500px;margin:30px auto;text-align:center;'>
		";
		foreach ($taskslist as $id => $task) {
			$taskslistHtml .= "
				<span style='font-weight:bold;'>ID:</span> " . $id . ", <span style='font-weight:bold;'>Name:</span> " . $task[0] . ", <span style='font-weight:bold;'>Start date:</span> " . $task[1] . ", <span style='font-weight:bold;'>End date:</span> " . $task[2] . " <br/><br/>
			";
		}
		$taskslistHtml .= "
		</div>
	</body>
</html>";
		return  $taskslistHtml;
    }
}
