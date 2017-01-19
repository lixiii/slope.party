var PageComingSoon = function () {
    return {
      //Coming Soon
      initPageComingSoon: function () {
			var newYear = new Date();
			newYear = new Date("March 1, 2017");
			$('#defaultCountdown').countdown({until: newYear})
        }
    };
}();
