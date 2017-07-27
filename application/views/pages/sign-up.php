<!-- Modal -->

<!-- start Contact section -->
  <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact_area">
                    <div class="client_title">
                        <hr>
                        <h2>We Would <span>Love To Hear From You</span></h2>
                    </div>
                              
                </div>
            </div>
        
        </div>
    </div>
</section>
<!-- End Contact section -->
   
<div id="SignUpModal" class="modal fade" role="dialog" style="z-index: 99999">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="height: auto;overflow: hidden;">
                 <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact_area">
                     <h2 class="text-center">JOIN US</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="contact_left wow fadeInLeft">
                                <form action="<?php echo base_url()?>index.php/httpAction/registerUser" name="user_info_form" method="post">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control wpcf7-text" placeholder="Your first name" name="u_firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control wpcf7-text" placeholder="Your last  name" name="u_lastname">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control wpcf7-text" placeholder="Your email " name="u_email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control wpcf7-text" placeholder="Password " name="u_password">
                                    </div>
                                    <div class='col-md-6'>
                                        <input type="text" class="form-control wpcf7-text" placeholder="Date of Birth " name="u_date_of_birth">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control wpcf7-text" name="u_account_type"  placeholder="I am intrested in">
                                            <option>I am intrested in :</option>
                                            <option value="BUYER">Buying Leads</option>
                                            <option value="SELLER">Selling Leads</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control wpcf7-text" name="u_country"  placeholder="Your Country">
                                            <option>Your Country:</option>
                                            <option value="In">India</option>
                                            <option  value="Eu">Europe</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control wpcf7-text" name="u_currency"  placeholder="Your Currency">
                                            <option>Your Currency:</option>
                                            <option value="RUPEES">RUPEES</option>
                                            <option value="EURO">EURO</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="u_description" class="form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Submit" class="wpcf7-submit"> 
                                    </div>
                                </form>
                            </div>                  
                        </div>
                    </div>              
                </div>
            </div>
        
        </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
 jQuery(document).ready(function(){
        jQuery("#SignUpModal").modal({
            backdrop: 'static',
            keyboard: false
        }
     );
 })
</script>
