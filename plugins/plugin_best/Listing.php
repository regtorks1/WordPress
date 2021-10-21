
<?php
global $wpdb;
$table = 'best_teacher_table';
if(isset($_POST['submit'])){   
    $data=array(
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'telephone'=>$_POST['telephone'],
        'address'=>$_POST['address'],
    );
    $format = array('%s','%s','%s','%s');
    $wpdb->insert($table,$data,$format);
   // $my_id = $wpdb->insert_id;
    //wp_redirect(get_admin_url() . 'admin.php?page=register-page');
}
$result = $wpdb->get_results("Select * from $table");
?>
<table class="table">

<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Telephone</th>
	<th>Address</th>
</tr>

<?php
foreach($result as $val) { ?>

	<tr>
	<td><?=$val->name?></td>
	<td><?=$val->email?></td>
	<td><?=$val->telephone?></td>
	<td><?=$val->address?></td>
</tr>

<?php } ?>
</table>

