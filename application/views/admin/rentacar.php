<div class="row">
        <div class="col-sm-12">
           <?php 
                foreach($rentacar_data as $data){
                    echo '<div class="panel panel-default">  
                            <div class="panel-heading">
                                <h3 class="panel-title">';
                    echo $data['title'];
                    echo'       </h3>
                           </div>
                        <div class="panel-body">';
                        echo '<a href="/admin/editpage/'.$data['id'].'" style"float:left;">editeaza</a>
                               <a href="/admin/deletepage/'.$data['id'].'" style"float:left;">sterge</a>
                         </div>
                    </div>';
                } 
           
           ?>
</div>
