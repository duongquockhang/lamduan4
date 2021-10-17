<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h1 align="center">Thêm mới ghi chú</h1>
<form action="<?php echo BASE_URL?>/?url=note/insert_note" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Tittle</label>
    <input type="text" class="form-control" name="tittle" aria-describedby="emailHelp">
    <!-- <small id="emailHelp" class="form-text text-muted">Điền dầy đủ nội dung</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <input type="text" name="content" class="form-control">
  </div>
  <!-- <small id="emailHelp" class="form-text text-muted">Điền dầy đủ nội dung</small> -->
  <div class="form-group">
    <label for="pwd">Type_id</label>
   <select class="form-control" name="type_id">
    <?php foreach ($note_type as $key=>$value){ ?>
   <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
     <?php } ?> 
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>