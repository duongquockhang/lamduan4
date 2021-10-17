<h1 style = "text-align: center;">Sửa mới ghi chú</h1>
<div class="col-md-3">
    <?php 
    foreach ($note_type_by_id as $key=>$note_type){
        ?>
<form action="<?php echo BASE_URL?>/?url=note_type/update_note_type/<?php echo $note_type['id']?>" method="POST">
  <div class="form-group">
    <label for="email">  Name </label>
    <input type="text"  value="<?php echo $note_type['name']?>" name="name" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd"> Description</label>
    <input type="text" value="<?php echo $note_type['description']?>"name="description"class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-default">Sửa</button>
</form>
<?php 
}
?>
</div>