<div class="row">
        <div class="col-sm-12">
           <?php 
                foreach($projects as $data){
                    echo '<div class="panel panel-default">  
                            <div class="panel-heading">
                                <h3 class="panel-title">';
                    echo $data['title'];
                    echo'       </h3>
                           </div>
                        <div class="panel-body">';
                        echo '<a href="/admin/editProject/'.$data['id'].'" style"float:left;">editeaza</a> 
                              <a href="/admin/deleteProject/'.$data['id'].'" style"float:left; margin-left:50px;">sterge</a>
                         </div>
                    </div>';
                } 
           
           ?>
        </div>
