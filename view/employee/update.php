 
<div class="container">
<div class="card">
    <div class="card-body">
    <?php foreach($data['update_employee'] as $value):?>
    <form method="post" action="">
        <div id="div_login">
            <h1 class='text-center'>Register</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="firstname" placeholder="Firstname"
                value="<?php echo $value['username'];?>" required/>
            </div>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="lastname" placeholder="Lastsname"
                value="<?php echo $value['name'];?>" required/>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="password" placeholder="Password"
                value="<?php echo $value['password'];?>" required/>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="comfirm" placeholder="Comfirm"
                 required/>
            </div>
            <div>
                <button type="submit" value="Submit" name="btn-update"  class="btn-info btn float-right">Submit</button>
                <a href="#" class='btn btn-danger'>Cencel</a>
            
        </div>
    </form>
    <?php
        endforeach;
    ?>
    </div>
</div>
    
</div>
