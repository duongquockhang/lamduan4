<table class="table table-striped " border="1" >
<h1 style = "text-align: center;"> ghi chú</h1>
<div class="col-md-3">
<?php 
    foreach ($note_by_id as $key=>$value){
        ?>
<form action="<?php echo BASE_URL?>/?url=note/update_note/<?php echo $note['id_note']?>" method="POST">
  <div class="form-group">
    <label for="email"> <?php echo $value['tittle']?>  </label>
    <textarea id="w3review" name="w3review" rows="4" cols="50">
    <?php echo $value['content']?></textarea>
  </div>
 
 
  <button type="submit" class="btn btn-default">Sửa</button>
 <a type="button" href="<?php echo BASE_URL ?>/?url=note/delete_note/<?php echo $value['id_note']?>" class="btn btn-secondary"  onclick="return confirm('Bạn chắc chắn muốn xoá?')">Xóa</a>
</form>
<?php 
}
?>

</div>
</table>