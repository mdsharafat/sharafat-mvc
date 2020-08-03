<?php include "components/header.php"; ?>

<?php
  if(!empty(Session::get('add_member_message'))){
    Session::flash('add_member_message', 'alert alert-success');
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
      <td><a href="#"><button class="btn btn-sm btn-primary">Edit</button></a> <a href="#"><button class="btn btn-sm btn-danger">Delete</button></a></td>
    </tr>
    <?php
        $count++;
        }
    }
    ?>
  </tbody>
</table>

<?php include "components/footer.php"; ?>