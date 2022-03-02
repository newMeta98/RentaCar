<div id="ModalReg" class="modal">
  <!-- Modal content -->
    <div class="modal-content join-content">
      <span class="close close1">&times;</span>
    <form id="Join_form" method="post">
     <div class="label"><p><?php echo REG_TITLE; ?></p></div><br/>
     
     <div class="wrapHight">
        <p class="pLeft">
            <?php echo EMAIL; ?>
        </p>
        <input class="iRight" type="email" name="email" id="email" placeholder="<?php echo EMAIL2; ?>" />
    </div>
     <div class="wrapHight">
        <p class="pLeft">
            <?php echo FNAME; ?>
        </p>
        <input class="iRight" type="text" name="fname" id="fname" placeholder="" />
    </div>
     <div class="wrapHight">
        <p class="pLeft">
            <?php echo LNAME; ?>
        </p>
        <input class="iRight" type="text" name="lname" id="lname" placeholder="" />
    </div class="wrapHight">
     <div class="wrapHight"><p class="pLeft"><?php echo BRTEL; ?></p>
        <input class="iRight" type="text" name="pnum" id="pnum" placeholder="" /></div>
     <div class="wrapHight"><p class="pLeft"><?php echo RODJDAN; ?></p>
        <input class="iRight" type="text" name="bday" id="bday" placeholder="" /></div>     
     
     <div class="wrapHight">
        <p class="pLeft">
            <?php echo PASSWORD; ?>
        </p>
        <input class="iRight" type="password" name="password_1" id="password_1" placeholder="" />
    </div>    
    <div class="wrapHight">
        <p class="pLeft">
            <?php echo CONFIRM_PASS; ?>
        </p>
        <input class="iRight" type="password" name="password_2" id="password_2" placeholder="" />
    </div>

     <div class="wrapHight"><input type="checkbox" name="agree" id="agree" value="I agree" required="on" /><?php echo AGREE; ?></a></div>
     <input type="submit" class="subbmit_btn" name="createacc" id="createacc" value="<?php echo REG_BUTT; ?>" class="btn btn-info" />
    </form>
    </div>
</div>
<div id="ModalLogin" class="modal">
  <!-- Modal content -->
    <div class="modal-content login-content">
      <span class="close close2">&times;</span> 
    <form id="Login_form" method="post">
     <div class="label"><p><?php echo LOG_TITLE; ?></p></div><br/>
    <div class="wrapHight">
        <p class="pLeft"><?php echo EMAIL; ?></p><input class="iRight" type="email" name="email" id="email_Login" placeholder="<?php echo EMAIL2; ?>" />
    </div>
    <div class="wrapHight">
     <p class="pLeft"><?php echo PASSWORD; ?></p><input class="iRight" type="password" name="password" id="password_Login" placeholder=""/>
    </div>
     <input type="submit" class="subbmit_btn" name="Login" id="Login" value="<?php echo LOG_BUTT; ?>" class="btn btn-info" />
    </form>
    </div>
</div>