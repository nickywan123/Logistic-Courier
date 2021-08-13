let FuiyohHub = {
	init: function(){
	    FuiyohHub.faqActive();
	    FuiyohHub.navigator();
		FuiyohHub.setContent();
		FuiyohHub.feather();
		FuiyohHub.puboffcanvas();
		FuiyohHub.hubServices();
		// FuiyohHub.select2();
		FuiyohHub.tableData();
		FuiyohHub.prepaid();
	},

	feather: function () {
		feather.replace()
	},

	puboffcanvas: function (){
		$('.offcanvas-collapse').toggleClass('open')
	},

	//set height wrap area
	setArea: function () {
		let wrapper = $('.wrapper');
		let header = $('header.main-header').height();
		let winHeight = $(window).height();
		let winWidth = $(window).width();
		wrapper.css({
			'min-height': winHeight
		});
	},

	minimize: function (btn) {
		let body = $('body');
		body.toggleClass('sidebar-collapse');
	},

	//set display
	setContent: function() {
		let body = $('body');
		let winsize = $(window).width();
		if (winsize <= 1112 && winsize > 524) {
			body.addClass('sidebar-collapse');
		} else {
			body.removeClass('sidebar-collapse');
		}
		$(window).resize(function() {
			if (winsize <= 1112 && winsize > 524) {
				body.addClass('sidebar-collapse');
			} else {
				body.removeClass('sidebar-collapse');
			}
		});
	},

	select2: function() {
		$(".form-select").select2({
			theme: 'bootstrap-5',
		});
	},

	tableData: function() {
		$('table.refresh').DataTable({
			"pageLength": 25
		});
	},

    prepaid: function (){
	    let prepaidCard = $('#prepaid').find('.card-input-element')
        let preInput = $('#prepaidInput').find('.form-control');
        prepaidCard.on('click', function (){
            let prepaidVal = $(this).val();
            preInput.val(prepaidVal);
        });
    },

    hubServices: function (){
        let maxHeight = -1;
        let containDiv = $('#hubServices .spec-card-body');

	    containDiv.each(function (){
	        maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
        });

        containDiv.each(function() {
            $(this).height(maxHeight);
        });
    },

    navigator: function() {
	    let link = $('.wsmenu-list a.link-nav');
        let header = $('.wsmainfull').outerHeight();
        let currentTopPosition = $('html').scrollTop();
	    link.click(function(e) {
	        e.preventDefault();
	        let target = $($(this).attr('href'));
	        let targetScrollTo = $(target).offset().top - 180;
	        if (currentTopPosition < targetScrollTo) {
	            targetScrollTo = targetScrollTo + 120;
            }
            $('html').animate({
                scrollTop: targetScrollTo
            }, 400);
        });
	},

    faqActive: function () {
	    let navItem = $('#fabTab .nav-item:first-child');
	    let tabContent = $('#myTabContent .tab-pane:first-child');
	    navItem.find('.nav-link').addClass('active');
	    tabContent.addClass('show active');
    }

};

$(document).ready(function() {
	FuiyohHub.init();
});
