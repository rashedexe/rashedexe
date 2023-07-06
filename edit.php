<?php $this->xinclude('partials/header'); ?>
<?php if(System\Session::exists('error')): ?>
    <div class="home-error-wrap">
      <div class="alert btn-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo System\Session::flash('error'); ?>
      </div>
    </div>
<?php endif; ?>

<?php if(System\Session::exists('success')): ?>
    <div class="home-error-wrap">
        <div class="alert alert-success view-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <h1><i class="fa fa-check" aria-hidden="true"></i>
          &nbsp; <?php echo System\Session::flash('success'); ?></h1>
        </div>
    </div><br/>
<?php endif; ?>

<div class="edit-links-wrapper">   
    <h1 class="register-title">Edit Links</h1>
    <div class="tab-content home-content">
        <form class="form-horizontal" method="post" action="">
            <div id="pastelinks" class="tab-pane active">
                  <div class="row">
                      <label class="control-label col-sm-2" for="name">Content:</label>
                      <div class="col-md-8">
                        <textarea name="links" placeholder="List of urls"><?php echo $this->content_data; ?></textarea>
                      </div>
                  </div>
            </div>
        <?php if($this->isPassword): ?>
             <div class="home-password">
                 <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                      <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#homePassword">
                        <i class="fa fa-md fa-lock"></i> 
                        Change Encrypt Password
                      </button>
                      </div>
                </div>
 
                    <div class="row">
                        <div id="homePassword" class="collapse col-md-8 col-md-offset-2">
                             <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" placeholder="Enter new key" name="password" class="form-control" id="pwd">
                              </div>
                        </div>
                  </div> 
            </div>
        <?php endif; ?> 
        <?php if($this->isAdmin): ?>
            <div class="row">
                <br/><hr/>
                <div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                      <label for="show_banner">Adsense Ads:</label>
                      <br/><br/>
                      <select class="form-control" name="is_adsense">
                          <option value="1" <?php if($this->isAdsense) echo 'selected'; ?>>Enabled</option>
                          <option value="0" <?php if(!$this->isAdsense) echo 'selected'; ?>>Disabled</option>
                      </select>      
                    </div>
                </div>
                <div class="clearfix"></div>
          </div> 
        <?php endif; ?>
    </div>
</div>
    <div class="home-content-submit row">
      <div class="col-md-3 col-md-offset-5 btn-block">
          <button class="btn btn-primary btn-lg" type="submit">
            <i class="fa fa-md fa-save"></i> 
            Save My Link
          </button>
      </div>
    </form>
</div>
<?php $this->xinclude('partials/footer'); ?>