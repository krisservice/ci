<?php echo validation_errors(); ?>

<form method="post" action="<?=base_url()?>user/edit/<?php print($m->id) ?>"> 
Nama : <input type="text" name="nama" value="<?php print($m->nama) ?>" /> <br/>
Username :<input type="text" name="username" value="<?php print($m->username) ?>" /><br/>
Password :  <input  type="text" name="password" value="<?php print($m->password) ?>"/><br/>
<input type="submit" value="Update" name="update"/>
</form>