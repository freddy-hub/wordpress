<script>
    function loadjQuery(e,t){var n=document.createElement("script");n.setAttribute("src",e);n.onload=t;n.onreadystatechange=function(){if(this.readyState=="complete"||this.readyState=="loaded")t()};document.getElementsByTagName("head")[0].appendChild(n)}function main(){
    var $cr=jQuery.noConflict();var old_src;$cr(document).ready(function(){$cr(".cr_form").submit(function(){$cr(this).find('.clever_form_error').removeClass('clever_form_error');$cr(this).find('.clever_form_note').remove();$cr(this).find(".musthave").find('input, textarea').each(function(){if(jQuery.trim($cr(this).val())==""||($cr(this).is(':checkbox'))||($cr(this).is(':radio'))){if($cr(this).is(':checkbox')||($cr(this).is(':radio'))){if(!$cr(this).parent().find(":checked").is(":checked")){$cr(this).parent().addClass('clever_form_error')}}else{$cr(this).addClass('clever_form_error')}}});if($cr(this).attr("action").search(document.domain)>0&&$cr(".cr_form").attr("action").search("wcs")>0){var cr_email=$cr(this).find('input[name=email]');var unsub=false;if($cr("input['name=cr_subunsubscribe'][value='false']").length){if($cr("input['name=cr_subunsubscribe'][value='false']").is(":checked")){unsub=true}}if(cr_email.val()&&!unsub){$cr.ajax({type:"GET",url:$cr(".cr_form").attr("action").replace("wcs","check_email")+$cr(this).find('input[name=email]').val(),success:function(data){if(data){cr_email.addClass('clever_form_error').before("<div class='clever_form_note cr_font'>"+data+"</div>");return false}},async:false})}var cr_captcha=$cr(this).find('input[name=captcha]');if(cr_captcha.val()){$cr.ajax({type:"GET",url:$cr(".cr_form").attr("action").replace("wcs","check_captcha")+$cr(this).find('input[name=captcha]').val(),success:function(data){if(data){cr_captcha.addClass('clever_form_error').after("<div style='display:block' class='clever_form_note cr_font'>"+data+"</div>");return false}},async:false})}}if($cr(this).find('.clever_form_error').length){return false}return true});$cr('input[class*="cr_number"]').change(function(){if(isNaN($cr(this).val())){$cr(this).val(1)}if($cr(this).attr("min")){if(($cr(this).val()*1)<($cr(this).attr("min")*1)){$cr(this).val($cr(this).attr("min"))}}if($cr(this).attr("max")){if(($cr(this).val()*1)>($cr(this).attr("max")*1)){$cr(this).val($cr(this).attr("max"))}}});old_src=$cr("div[rel='captcha'] img:not(.captcha2_reload)").attr("src");if($cr("div[rel='captcha'] img:not(.captcha2_reload)").length!=0){captcha_reload()}});function captcha_reload(){var timestamp=new Date().getTime();$cr("div[rel='captcha'] img:not(.captcha2_reload)").attr("src","");$cr("div[rel='captcha'] img:not(.captcha2_reload)").attr("src",old_src+"?t="+timestamp);return false}
    
    }
    if(typeof jQuery==="undefined"){loadjQuery("//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js",main)}else{main()}
    
    </script>
    
    
    <style>
    .cr_site{margin:0;padding:75px 0 0 0;text-align:center;background-color:#eeeeee;}
    .cr_font{font-size: 14px;font-family: Raleway, sans-serif;}
    .cr_body h2, .cr_header h2{font-size:22px;line-height:20px;margin:0 0 10px 0;}
    .cr_body h1, .cr_header h2{font-size:28px;margin-bottom:15px;padding:0;margin-top:0;}
    .wrapper, .cr_page{margin:0 auto 10px auto;text-align:left;border-radius:4px;}
    .cr_header{text-align:center;background: transparent !Important;}
    .cr_body label{float:none;clear:both;display:block;width:auto;margin-top:8px;text-align:left;font-weight:bold;position:relative;}
    /* .cr_button{display:inline-block;font-family: Raleway, sans-serif;font-size:15px;font-weight:600;background-color:#1a758d;color:#ffffff;width:auto;white-space:nowrap;margin:5px 5px 0 0;padding:7px 26px;border: 2px solid #1a758d !important;text-decoration:none;text-align:left;font-weight:bold;font-style:normal;font-size:15px;line-height:32px;cursor:pointer;border:0;-moz-border-radius:4px;border-radius:4px;-webkit-border-radius:4px;vertical-align:top;} */
    .cr_button:hover,.cr_button-small:hover, .submit-container:hover{cursor: pointer;}
    .powered{padding:20px 0;width:560px;margin:0 auto;}
    .formbox{line-height:150%;font-family:Helvetica;font-size:12px;color:rgba(40,40,40,0.2);background-color:#ffffff;border-radius: 6px 6px 6px 6px;}
    .cr_ipe_item label{line-height:150%;font-size:14px;}
    .cr_ipe_item textarea {background: none repeat scroll 0 0 #eeeeee;border: 1px solid #aaa;font-family: Helvetica;font-size: 16px;}
    .cr_ipe_item input {background: none repeat scroll 0 0 #eeeeee;border: 1px solid rgba(40,40,40,0.2);padding: 5px;font-family: Helvetica;font-size: 16px;}
    .cr_ipe_item select {background: none repeat scroll 0 0 #eeeeee;border: 1px solid rgba(40,40,40,0.2);display: block;margin: 0;padding: 5px;width: 100%;font-family: Helvetica;font-size: 16px;}
    .cr_ipe_item input.cr_ipe_radio, input.cr_ipe_checkbox {-moz-binding: none;-moz-box-sizing: border-box;background-color: #fff !important;border: 1px inset solid !important;color: -moz-fieldtext !important;cursor: default;height: 18px;padding: 0 !important;width: 18px;margin-top:0;margin-bottom: 0;}
    .cr_ipe_item input.cr_ipe_radio, input.cr_ipe_checkbox:checked {background-color:#1a758d !important;}
    .cr_ipe_item input.cr_ipe_radio{-moz-appearance: radio;border-radius: 100% 100% 100% 100% !important;margin: 3px 3px 0 5px;}
    .submit_container{text-align:left}
    .cr_ipe_item{ padding:5px 10px; margin:1px 10px; }
    .cr_ipe_item.inactive {display:none;}
    .imprint{font-size:0.8em;}
    .cr_captcha{padding-left:130px;}
    .cr_error{font-size:1.1em;padding:10px;}
    .clever_form_error{background-color:#f99; color:#000; border:1px solid #f22 !important}
    .clever_form_note {margin:26px 0 0 3px;position:absolute;display:inline; padding: 2px 4px; font-weight:bold;background-color:#f2ecb5; color:#000; font-size:12px !important;  }
    .cr_site {background-color:#eee;}
    .cr_header {color:#000000;}
    .cr_body {background-color:#ffffff;font-size:12px;color:#000000;}
    .cr_hr {background-color:#ccc;}
    .cr_site a {color:#0084ff;}
    .imprint{color:#000;}
    
    </style>
    
    
    <style id="style">
    .cr_site {background-color:#eee;}
    .cr_header {color:#000000;}
    .cr_body {background-color:#ffffff;font-size:12px;color:#000000;}
    .cr_hr {background-color:#ccc;}
    .cr_site a {color:#0084ff;}
    .imprint {color:#000;}
    .cr_page {width:450px;}
    
    .dsgvo{
        font-size: 12px;
    }
    
    #checkbx{
        margin-top:20px;
    }
    </style>
    
    
    
    <form class="layout_form cr_form cr_font" action="" method="post" target="_blank">
        <div class="cr_body cr_page cr_font formbox">
            <div class="non_sortable" style="text-align:left;">
                
            </div>
            
            <div class="editable_content" style="text-align:left;">
            <div id="4786856" rel="text" class="cr_ipe_item ui-sortable" style=" margin-bottom:0px;">
    <!--label for="text4786856" class="itemname">Name</label--> <input id="text4786856" placeholder="Name *" name="1019454" type="text" value="" style="width:100%;" />
    </div><div id="4786858" rel="email" class="cr_ipe_item ui-sortable musthave">
    <!--label for="text4786858" class="itemname">E-Mail*</label--> <input id="text4786858" placeholder="E-Mail *" name="email" value="" type="text" style="width:100%;" />
    </div><div id="4786860" rel="recaptcha" class="cr_ipe_item ui-sortable musthave">
        
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <br/>
        <div id="recaptcha_v2_widget" class="g-recaptcha" data-theme="light" data-size="normal" data-sitekey="6Lfhcd0SAAAAAOBEHmAVEHJeRnrH8T7wPvvNzEPD" ></div>
        
        
    </div><div id="4786861" rel="checkbox" class="cr_ipe_item ui-sortable" style=" margin-bottom:0px;">
    <!--label class="itemname">DSGVO</label>
    <div style="overflow:auto;"-->
     <div id="checkbx" style="overflow:auto;"></div>
    <input id="4786861" class="cr_ipe_checkbox" name="1012925[]" value=" Ja, ich bin mit der Datenverarbeitung einverstanden und habe die Datenschutzerklärung gelesen, verstanden und akzeptiere sie. *" type="checkbox"  /><span class="dsgvo"> Ja, ich bin mit der Datenverarbeitung einverstanden und habe die Datenschutzerklärung gelesen, verstanden und akzeptiere sie. *</span>
    
    </div>
    <span style="clear:left;"></span>
    </div><div id="4786862" rel="mce_text" class="cr_ipe_item ui-sortable">
    <!--div class="mce_text"><p>Hier können Sie die <a href="/datenschutz" mce_href="/datenschutz" title="Datenschutz" target="_blank">Datenschutzerklärung</a> einsehen.</p></div-->
    </div><div id="4786863" rel="checkbox" class="cr_ipe_item ui-sortable musthave" style=" margin-bottom:0px;">
    <!--label class="itemname">Kontaktaufnahme*</label-->
    <div style="overflow:auto;">
    
    <input id=" Ich bin mit einer Kontaktaufnahme per Telefon und/oder per E-Mail bezüglich meiner Anfrage und der Speicherung meiner Daten einverstanden.4786863" class="cr_ipe_checkbox" name="1012928[]" value=" Ich bin mit einer Kontaktaufnahme per Telefon und/oder per E-Mail bezüglich meiner Anfrage und der Speicherung meiner Daten einverstanden." type="checkbox"  /><span class="dsgvo"> Ich bin mit einer Kontaktaufnahme per Telefon und/oder per E-Mail bezüglich meiner Anfrage und der Speicherung meiner Daten einverstanden.</span>
    <br><span class="dsgvo" style="display:block;text-align: right !important;">* Pflichtfelder</span>
    
    </div>
    <span style="clear:left;"></span>
    </div><div id="4786864" rel="button" class="cr_ipe_item ui-sortable submit_container" style="text-align:left;">
    <button type="submit" class="cr_button button-style-2">Absenden</button>
    </div>
        </div>
        
        
    
    
    </form>