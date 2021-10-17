<h1 align="center"> Các Ghi chú</h1>


<div class="col-12 col-md-12 mt-2">
    <div class="card">
       
    
        <div class="card-body">
            <div class="col-12">
            <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form> 
                <a class="btn btn-success mb-2" href="<?php echo BASE_URL?>/?url=note_type/add_note_type">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quản lý</th>
                        
                       
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;

                        foreach ($note_type as $key => $value){
                         $i++;
                     ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $value['name']?></td>
                        <td><?php echo $value['description']?></td>
                        
                        <td><a href="<?php echo BASE_URL ?>/?url=note_type/delete_note_type/<?php echo $value['id']?>"
                               class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                            <a href="<?php echo BASE_URL ?>/?url=note_type/edit_note_type/<?php echo $value['id']?>"
                               class="btn btn-primary btn-sm">Update</a></td>
                     
                               <?php
     } 
    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>