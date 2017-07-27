/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery=$;

jQuery(function(){
    /*
    jQuery('form[name="user_info_form"]').on('submit',function(){
        var $this    =jQuery(this);
        var url      =$this.attr('action');
        var seriaLize=$this.serialize();
        jQuery.ajax({
            url     :url,
            type    :'POST',
            data    :seriaLize,
            success :function(response){
                alert(response);
            }
        });
        return false; 
    });
    */
    var signUpForm= jQuery( 'form[name="user_info_form"]' );
    signUpForm.validate({
        rules: {
            u_firstname: "required",
            u_lastname: "required",
            u_date_of_birth: "required",
            u_description: "required",
            u_email: {
              required: true,
              email: true
            },
            u_password:"required"
        },
        submitHandler: function() { 
            var $this    =signUpForm;
            var url      =$this.attr('action');
            var seriaLize=$this.serialize();
            jQuery.ajax({
                url     :url,
                type    :'POST',
                data    :seriaLize,
                success :function(response){
                    var obj=JSON.parse(response);
                    if(obj.CODE===1){
                        location.href=obj.URL;
                    }else if(obj.CODE==0){
                        alert(obj.MSG);
                    }
                    return flase;
                }
            });
            return false; 
        }
    });
    //jQuery('.datepicker').datepicker();
    
    var loginForm= jQuery( 'form[name="login_form"]' );
    loginForm.validate({
        rules: {
            u_email: {
              required: true,
              email: true
            },
            u_password:"required"
        },
        submitHandler: function() { 
            var $this    =loginForm;
            var url      =$this.attr('action');
            var seriaLize=$this.serialize();
            jQuery.ajax({
                url     :url,
                type    :'POST',
                data    :seriaLize,
                success :function(response){
                    alert(response);return;
                    var obj=JSON.parse(response);
                    if(obj.CODE===1){
                        location.href=obj.URL;
                    }else if(obj.CODE==0){
                        alert(obj.MSG);
                    }
                    return flase;
                }
            });
            return false; 
        }
    });
})

