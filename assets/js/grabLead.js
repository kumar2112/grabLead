/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery=$;

jQuery(function(){
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
    
    //jQuery('.datepicker').datepicker();
})

