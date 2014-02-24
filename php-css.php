<?php  

function lipsum_($limit=240){
	$lipsum = "it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout the point of using lorem ipsum is that it has a more or less normal distribution of letters as opposed to using  content here content here  making it look like readable english many desktop publishing packages and web page editors now use lorem ipsum as their default model text and a search for  lorem ipsum  will uncover many web sites still in their infancy various versions have evolved over the years sometimes by accident sometimes on purpose injected humour and the like";
	$lipsum = explode(" ", $lipsum);
	shuffle($lipsum);
	$lipsum = implode($lipsum," ");
	if($limit){
		$lipsum = substr($lipsum, 0, $limit);
	}
	echo ucfirst($lipsum);
}
function name_($number=2){
	$name = "Samantha Dawna Alanna Garry Tomika Tambra Odell Abel Johanne Deeanna Madaline Lorretta Rolande Rudolph Gustavo Alberta Marietta Natalya Krystina Solomon Sherice Dayna Darcey Precious Rivka Londa Eleonore Ewa Marylynn Chantay Natividad Xenia Altha Coreen Lera Tisa Lenard Dodie Valorie Shellie Mariano Nikole Maxine Rosalinda Tennie Zina Shara Rosaline Ola Ricki";
	$name = explode(" ", $name);
	shuffle($name);

	for ($i=0; $i < $number; $i++) { 
		echo $name[$i] . ' ';
	}

}

function menu_($class='inline', $array=array('Home','About','Showcase','Help','Contact Us')){
	$class = "list-".$class;
	echo "<ul class='$class'>";
	foreach ($array as $item){ 
		echo "<li><a href=''>" . $item . "</a></li>";
	}
	echo "</ul>";
}

function li_($total=10,$listgroup=false,$icon=false){
	$array = "Home,About Us,Contact,How it Work,Showcase,Member,Category,Listing,Our Team,Join Now";
	$li = explode(",", $array);
	shuffle($li);

	$listgroup = ($listgroup)? "class='list-group' " : '';
	$listgroupitem = ($listgroup)? "class='list-group-item' " : '';

	$icon = ($icon)? "<i class='glyphicon glyphicon-$icon'></i>" : '';
	echo "<ul $listgroup>";
	for ($i=0; $i < $total; $i++) { 
		echo "<li $listgroupitem><a href=''>".$li[$i]." $icon</a></li>";
	}
	echo "</ul>";
}

// IMAGE
function img_($i, $class=''){
	echo "<img src='img/$i' $class />";
}
function thumb_($i=1, $class=''){
	if($i=="random") $i = rand(1,10);
	echo "<img src='img/thumbnail/$i.jpg' $class />";
}
function avatar_($i=1, $class=''){
	if($i=="random") $i = rand(1,10);
	echo "<img src='img/profile/$i.jpg' $class />";
}

//  BUTTON 
function btn_($str='Click Here', $class=''){
	echo "<a href='#' class='btn btn-default $class'>$str</a>";
}

function icon_($str='heart'){
	echo "<i class='glyphicon glyphicon-$str'></i>";
}

function href_($str='Click Here', $class=false){
	$class = ($class)? "class='$class'" : '';
	echo "<a href='#' $class>$str</a>";
}

?>

