<h1 style = "text-align: center;">Sửa mới ghi chú</h1>
<div class="col-md-3">
    <?php 
    foreach ($note_by_id as $key=>$note){
        ?>
<form action="<?php echo BASE_URL?>/?url=note/update_note/<?php echo $note['id_note']?>" method="POST">
  <div class="form-group">
    <label for="email">  Tiêu đề </label>
    <input type="text"  value="<?php echo $note['tittle']?>" name="tittle" class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd"> Content</label>
    <input type="text" value="<?php echo $note['content']?>"name="content"class="form-control" >
  </div>
  <div class="form-group">
    <label for="pwd">Phân loại</label>
   <select class="form-control"  value="<?php echo $note['type_id']?>" name="type_id">
    <?php foreach ($note_type as $key=>$value){ ?>
   <option <?php if($value['id']==$note['type_id']) {echo 'selected';} ?> 
   value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
     <?php } ?> 
</select>
  </div>
 
  <button type="submit" class="btn btn-default">Sửa</button>
</form>
<?php 
}
?>
</div>