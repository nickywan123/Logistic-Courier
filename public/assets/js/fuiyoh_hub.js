let FuiyohHub = {
	init: function(){
		FuiyohHub.setContent();
		FuiyohHub.feather();
		FuiyohHub.puboffcanvas();
		// FuiyohHub.select2();
		FuiyohHub.tableData();
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

};

$(document).ready(function() {
	FuiyohHub.init();
});
