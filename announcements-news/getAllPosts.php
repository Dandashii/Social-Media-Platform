<?php include "../backend/connection.php";

header("Content-Type: application/json");

$section = '';
$postsPerPage = 6;
$posts = array('totalPages' => 0, 'posts' => array());
//Retrieve on page at a time in which each page contains only 6 pages
//Save the retrieved into an array using sessions
//
if((isset($_POST['section']) && isset($_POST['pageNo'])) && ($_POST['section'] == 'announcements') || $_POST['section'] == 'news') {
	$section = $_POST['section'];

	$pageNo = $_POST['pageNo'];

	$query = 'SELECT * FROM ' . $section. ' ORDER BY id DESC';

	$result = mysqli_query($connection, $query);

	$totalRows = mysqli_num_rows($result);

	$posts['totalPages'] = ceil($totalRows / $postsPerPage);

	//Push sql results into an array
	$rows = [];
	while($row = $result->fetch_assoc()) {
		$rows[] = $row;
	}

	//Split sql result into sub-arrays. Six rows per page
	$pages = array_chunk($rows, 6);

	$numberedPages= [];

	for($i = 1; $i <= $posts['totalPages']; $i++) {
		$numberedPages[$i] = $pages[$i - 1]; //move the split up array into another array where the index starts at 1 because pages start 1
	}

	for($i = 0; $i < count($numberedPages[$pageNo]); $i++) {
		$post["id"] = $numberedPages[$pageNo][$i]["id"];
		$post["title"] = $numberedPages[$pageNo][$i]["title"];
		$post["description"] = $numberedPages[$pageNo][$i]["description"];
		$post["postDate"] = $numberedPages[$pageNo][$i]["postDate"];
		if($section == 'announcements') {
			$post["author"] = $numberedPages[$pageNo][$i]["author"];
		}

		$posts['posts'][] = $post;
	}

	$result->free_result();

	$connection->close();

	$pages = []; $numberedPages = []; $rows = [];

	echo json_encode($posts);
}
