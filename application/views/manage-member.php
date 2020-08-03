<?php include "components/header.php"; ?>

<?php
  if(!empty(Session::get('add_member_message'))){
    Session::flash('add_member_message', 'alert alert-success');
  }
  if(!empty(Session::get('update_member_message'))){
    Session::flash('update_member_message', 'alert alert-success');
  }
  if(!empty(Session::get('delete_member_message'))){
    if(Session::get('delete_member_message') === 'Member Deleted successfully.'){
      Session::flash('delete_member_message', 'alert alert-success');
    }else{
      Session::flash('delete_member_message', 'alert alert-danger');
    }
  }
?>
<h1 class="text-center text-success">Manage Member</h1>

<table class="table table-striped">
  <thead>
    <tr>
       <th scope="col">SN</th>
       <th scope="col">Id</th>
       <th scope="col">Name</th>
       <th scope="col">Email</th>
       <th scope="col">Age</th>
       <th scope="col">City</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $count = 1;
        if(!empty($data)){
            foreach ($data as $row) {
    ?>
    <tr>
        <th scope="row"><?php echo $count; ?></th>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->age; ?></td>
        <td><?php echo $row->city; ?></td>
        <td>
            <a href="<?php echo BASE_URL;?>/MemberController/edit/<?php echo $row->id;?>"><button class="btn btn-sm btn-primary">Edit</button></a>
            <form style="display: inline-block;" action="<?php echo BASE_URL; ?>/MemberController/destroy" method="POST">
              <input type="hidden" name="delete_id" value="<?php echo $row->id; ?>">
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
            </form>
        </td>
    </tr>
    <?php
        $count++;
        }
    }
    ?>
  </tbody>
</table>

<?php include "components/footer.php"; ?>