<h1 align="center">Thêm mới ghi chú</h1>
<form action="<?php echo BASE_URL?>/?url=note_type/insert_note_type" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Tiêu đề</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    <!-- <small id="emailHelp" class="form-text text-muted">Điền dầy đủ nội dung</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nội dung</label>
    <input type="text" name="description" class="form-control">
  </div>
  <!-- <small id="emailHelp" class="form-text text-muted">Điền dầy đủ nội dung</small> -->
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>