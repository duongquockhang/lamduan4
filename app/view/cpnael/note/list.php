


<h3 style="text-align: center;">Các ghi chú</h3>
<div>
  
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
</div>


<div class="col-12 col-md-12 mt-2">
    <div class="card">
       
    
        <div class="card-body">
            <div class="col-12">
            <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form> 
                <a class="btn btn-success mb-2" href="<?php echo BASE_URL?>/?url=note/add_note">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        
                        <th>Phân loại</th>
                        <th>Quản lý</th>
                        
                       
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;

                        foreach ($note as $key => $value){
                         $i++;
                     ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $value['tittle']?></td>
                       
                        <td><?php echo $value['name']?></td>
                        
                        <td><a href="<?php echo BASE_URL ?>/?url=note/delete_note/<?php echo $value['id_note']?>"
                               class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                            <a href="<?php echo BASE_URL ?>/?url=note/edit_note/<?php echo $value['id_note']?>"
                               class="btn btn-primary btn-sm">Update</a>
                               <a href="<?php echo BASE_URL ?>/?url=note/details_note/<?php echo $value['id_note']?>"
                               class="btn btn-success btn-sm">Details</a></td>
                     
                               <?php
     } 
    ?>
                    </tbody>
                    
                </table>
              
               
            </div>
        </div>
      
    </div>
   
</div>
