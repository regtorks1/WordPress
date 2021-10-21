
<?php
global $wpdb;
$table = 'profile_table';
if(isset($_POST['submit'])){   
    $data=array(
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'age'=>$_POST['age'],
        'address'=>$_POST['address'],
    );
    $format = array('%s','%s','%s','%s');
    $wpdb->insert($table,$data,$format);
   // $my_id = $wpdb->insert_id;
    //wp_redirect(get_admin_url() . 'admin.php?page=register-page');
}
$result = $wpdb->get_results("Select * from $table");
?>
<table style = "border: 1px solid black; margin-left: auto;margin-right:auto">

<tr style = "outline: thin solid">
	<th>Name</th>
	<th>Email</th>
	<th>Age</th>
	<th>Address</th>
</tr>

<?php
foreach($result as $val) { ?>

	<tr>
	<td style = "padding: 8px"><?=$val->name?></td>
	<td style = "padding: 8px"><?=$val->email?></td>
	<td style = "padding: 8px"><?=$val->age?></td>
	<td style = "padding: 8px"><?=$val->address?></td>
</tr>

<?php } ?>
</table>