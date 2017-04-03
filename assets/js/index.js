var PageComingSoon = function () {
    return {
      //Coming Soon
      initPageComingSoon: function () {
			var newYear = new Date();
			newYear = new Date("June 20, 2017");
			$('#defaultCountdown').countdown({until: newYear})
        }
    };
}();
