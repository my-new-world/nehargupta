// JavaScript Document
jQuery(document).ready(function(){
	if(jQuery('#toggle-menu-button').length>0){
		jQuery('#toggle-menu-button').click(function(){
			jQuery("#main-menu-toggle").slideToggle(200);
		});
	}
	
	//Grid Blog
	jQuery('.post-grid-container .column3_1').last().addClass('column-last');
	
	for (var j = 1; j <= jQuery('#single_blog.post-grid-container .column3_1').length ;j++){
        if ((j % 3) == 0 ){
            jQuery('#single_blog.post-grid-container .column3_1:nth-child('+j+')').addClass('column-last');
        }
    }
	
	for (var j = 1; j <= jQuery('#tax_content_page.post-grid-container .column3_1').length ;j++){
        if ((j % 3) == 0 ){
            jQuery('#tax_content_page.post-grid-container .column3_1:nth-child('+(j+1)+')').addClass('column-last');
        }
    }
	
	
	//6 logo
	jQuery('.semantic-logo-column.semantic-percent-column6.logo-column-bottom').wrapAll('<div class="wrap-column"></div>').wrapAll('<div class="content-column1 column-last"></div>').wrapAll('<div class="widget-entry"></div>').wrapAll('<div class="column1"></div>').wrapAll('<div class="logo-container"></div>');
	
	
	//icon box
	jQuery('.block.block-views .semantic-column3-1 > .icon-box')
		.filter(function(index){
			var len = jQuery('.block.block-views .semantic-column3-1 > .icon-box').length;
			if(len % 3 == 0){
				if(index == len - 1 || index == (len - 2) || index == (len - 3)) {
					return true;
				}else{
					return false;	
				}
			} else if(len % 3 == 2){
				if(index == len - 1 || index == (len - 2)) {
					return true;
				}else{
					return false;	
				}
			} else {
				if(index == len - 1) {
					return true;
				}else{
					return false;	
				}
			}
			
		})
		.addClass('widget-element-bottom');
		
	//404
	jQuery('#search-block-form--2 > div').addClass('content');
	
	//Comment form
	jQuery('#comment-form #edit-comment-body').removeClass('form-wrapper');
	jQuery('.comment-form .form-actions #edit-preview').remove();
	
	
	//Search form
	jQuery('.small-column.right > .block-search > #search-block-form > div > div').addClass('search-form').removeClass('container-inline');
	jQuery('.form-wrapper').addClass('content');
	
	
	//Pagination
	jQuery('.pager-next a').html('<i class="fa fa-angle-right"></i>');
	jQuery('.pager-previous a').html('<i class="fa fa-angle-left"></i>');
	jQuery('.pager-last.last').remove();
	jQuery('.pager-first.first').remove();
	jQuery('.item-list > .pager').addClass('paginate');
	
	//Relation
	jQuery('.post-relative .column1_3').last().addClass('column-last');
	
	
	jQuery('.post-cell-button.content a').removeClass();
	jQuery('.post-cell-button.content a').addClass('button normal-button');
	
	//Menu
	jQuery('#header-bar .menu').not(':first').addClass('sub-menu');
    jQuery('#header-bar .menu').not(':first').removeClass('menu');

	//==================================
	//Main Menu Toggle
	//==================================
	
		//content
    var n = jQuery('#header-bar .menu > li').length;
    var mnMobile = '';
	
	for (var i =1; i<=n; i++){
        var a = '<div><a href="'+jQuery('#header-bar .menu > li:nth-child('+ i + ') > a').attr("href")+'">'+jQuery('#header-bar .menu > li:nth-child('+ i + ') > a').text()+'</a><ul class="sub-menu">';
		
		var m = jQuery('#header-bar .menu > li:nth-child('+ i + ') > .sub-menu > li').length;
		
		for (var j = 1; j <= m; j++){
			var b = '<li><a href="'+jQuery('#header-bar .menu > li:nth-child('+ i + ') > .sub-menu > li:nth-child('+ j + ') > a').attr("href")+'"> - '+jQuery('#header-bar .menu > li:nth-child('+ i + ') > .sub-menu > li:nth-child('+ j + ') > a').text()+'</a><ul class="sub-menu"></li>';
			var f = jQuery('#header-bar .menu > li:nth-child('+ i + ') > .sub-menu > li:nth-child('+ j + ') > .sub-menu > li').length;
			for(var k = 1; k <= f; k++){
				var c = '<li><a href="'+jQuery('#header-bar .menu > li:nth-child('+ i + ') > .sub-menu > li:nth-child('+ j + ')  > .sub-menu > li:nth-child('+ k + ') > a').attr("href")+'"> -- '+jQuery('#header-bar .menu > li:nth-child('+ i + ') > .sub-menu > li:nth-child('+ j + ')  > .sub-menu > li:nth-child('+ k + ') > a').text()+'</a></li>';
				b = b + c;
			}
			a = a + b + '</ul>';
		}
        
		mnMobile = mnMobile + a + '</ul></div>';
    }
	
   	jQuery('#main-menu-toggle .wrap').html(mnMobile);
		//end content
		//effect
	jQuery('#main-menu-toggle > .wrap > div > ul > li > ul > li').hide();
    jQuery('#main-menu-toggle > .wrap > div > ul > li').hide();
	
    jQuery('#main-menu-toggle > .wrap > div').hover(
    function() {
        jQuery(" > ul > li", this).show();
    }, function() {
        jQuery(" > ul > li", this).hide();
    }

    );
	
	jQuery('#main-menu-toggle > .wrap > div > ul > li').hover(
    function() {
        jQuery(" > ul > li", this).show();
    }, function() {
        jQuery(" > ul > li", this).hide();
    }

    );
		//end effect
	//==================================
	//End Main Menu Toggle
	//==================================	
	//==================================
	//Contact Form
	//==================================
		//======== Page Content
	jQuery('#contact-site-form.contact-form').wrap('<div class="wrap-no-fullwidth cus00"></div>');
	jQuery('.cus00').before('<div class="column1 cus00"><div class="wrap-no-fullwidth"><div class="section-widget-heading"><h2 class="section-widget-title">Send us mail</h2></div></div></div><div class="cleared cus00"></div>');
	jQuery('.cus00').wrapAll('<div class="widget-entry cus01"></div>');
	jQuery('.cus01').wrapAll('<div class="content-column3_2 column-last cus02">');
	jQuery('.content-column3_2.column-last.cus02').after('<div class="cleared cus02"></div>');
	jQuery('.cus02').wrapAll('<div class="wrap-column cus03"></div>');
	jQuery('.cus03').wrap('<div id="content-section2" class="content-section white-bg top-spacing-big bottom-spacing-big title-spacing-big cus04"></div>');

		//========Contact Form Content
	jQuery('.cus00 .form-item-name,.cus00 .form-item-mail,.cus00 .form-item-subject').wrapAll('<div class="column2_1"></div>');
	jQuery('.cus00 .form-item-message,.cus00 .form-item-copy,.cus00 .form-actions').wrapAll('<div class="column2_1"></div>');
	jQuery('.cus00 .form-item-name').addClass('contact-name-field');
	jQuery('.cus00 .form-item-mail').addClass('contact-email-field');
	jQuery('.cus00 .form-item-subject').addClass('contact-subject-field');
	jQuery('.cus00 .form-item-message').addClass('contact-textarea');
	jQuery('.cus00 .form-item-copy').remove();
	jQuery('.cus00 .form-actions').addClass('contact-button contact-button-full').removeClass('form-wrapper');
	jQuery('.cus00 label').remove();
	jQuery('.cus00 .form-item-name').prepend('<div>Name</div>');
	jQuery('.cus00 .form-item-mail').prepend('<div>Email</div>');
	jQuery('.cus00 .form-item-subject').prepend('<div>Subject</div>');
	jQuery('.cus00 .form-item-message').prepend('<div>Message</div>');

	//==================================
	//End Contact Form
	//==================================
	
	
	jQuery('.column-last').after('<div class="cleared"></div>');
	
	//block recent comment 
	jQuery('.recentcomments').wrapAll('<ul id="recentcomments"></ul>');
	

	jQuery('#mod-search-searchword').removeAttr('size');
	
	//user login
	jQuery('#user-login').addClass('content');
	
	//Change password
	jQuery('#user-pass').addClass('content');
	
	
});

