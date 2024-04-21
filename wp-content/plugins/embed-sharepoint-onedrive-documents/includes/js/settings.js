function redirect_to_sync_users() {
    var url = jQuery('#sync_user_tab').val();    
    window.location.href = url;
}

function redirect_to_document_sync() {
    var url = jQuery('#Documents_tab').val();    
    window.location.href = url;
}

function redirect_to_shortcode_tab(){
    var url = jQuery('#Shortcode_tab').val();    
    window.location.href = url;
}

function copyToClipboard(copyButton, element, copyelement) {    
    var temp = jQuery("<input>");
    jQuery("body").append(temp);
    temp.val(jQuery(element).text()).select();
    document.execCommand("copy");
    temp.remove();
    jQuery(copyelement).text("Copied");

    jQuery(copyButton).mouseout(function() {
        jQuery(copyelement).text("Copy to Clipboard");
    });
}