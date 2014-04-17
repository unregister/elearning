<div class="col-md-3" id="sidebar">

    <div class="panel panel-primary">
    
        <div class="panel-heading"><h3 class="panel-title">COURSE</h3></div>
        <div class="panel-body">
            <?php
				$arr = get_array_kategori();
				echo tree_kategori($arr);
			?>
        </div>
    
    </div>
    
    <div class="panel panel-primary">
    
        <div class="panel-heading"><h3 class="panel-title">LOGIN</h3></div>
        <div class="panel-body">
        <?php 
		if( isset($_login_msg) ){ echo $_login_msg; } 
		if( !cek_login() )
		{
		?>
        <form class="form-horizontal" role="form" method="post" action="">
          <div class="form-group">

            <div class="col-sm-12">
              <input type="text" class="form-control" id="userid" name="userid" placeholder="User ID">
            </div>
          </div>
          <div class="form-group">
 
            <div class="col-sm-12">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" name="login">Log in</button>
            </div>
          </div>
        </form>
        <?php
		}else{
		?>
        
        <?php
		}
		?>
        </div>
   </div>
    

</div>