<div id="ModalReg" class="modal">
  <!-- Modal content -->
    <div class="modal-content join-content">
      <span class="close">&times;</span>
    <form id="Join_form" method="post">
     <div class="label"><img class="header-logo" src="img/start-logo.png"><p><?php echo REG_TITLE; ?></p></div><br/>
     <p><?php echo EMAIL; ?><input type="email" name="email" id="email" placeholder="example@mail.com" /></p>
     <p><?php echo FNAME; ?><input type="text" name="fname" id="fname" placeholder="<?php echo FNAME; ?>" /></p>
     <p><?php echo LNAME; ?><input type="text" name="lname" id="lname" placeholder="<?php echo LNAME; ?>" /></p>
     <p><?php echo PASSWORD; ?><input type="password" name="password_1" id="password_1" placeholder="<?php echo PASSWORD; ?>" /></p>
     <p><?php echo CONFIRM_PASS; ?><input type="password" name="password_2" id="password_2" placeholder="<?php echo CONFIRM_PASS; ?>" /></p>
     <p><input type="checkbox" name="agree" id="agree" value="I agree" required="on" /><?php echo AGREE; ?></a></p>
     <input type="submit" class="subbmit_btn" name="createacc" id="createacc" value="<?php echo REG_BUTT; ?>" class="btn btn-info" />
    </form>
    </div>
</div>
<div id="ModalLogin" class="modal">
  <!-- Modal content -->
    <div class="modal-content login-content">
      <span class="close close2">&times;</span> 
    <form id="Login_form" method="post">
     <div class="label"><img class="header-logo" src="img/start-logo.png"><p><?php echo LOG_TITLE; ?></p></div><br/>
     <p><?php echo EMAIL; ?><input type="email" name="email" id="email_Login" placeholder="example@mail.com" /></p>
     <p><?php echo PASSWORD; ?><input type="password" name="password" id="password_Login" placeholder="<?php echo PASSWORD; ?>"/></p>
     <input type="submit" class="subbmit_btn" name="Login" id="Login" value="<?php echo LOG_BUTT; ?>" class="btn btn-info" />
    </form>
    </div>
</div>