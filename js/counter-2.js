
  // Trigger only once
  let counterStarted = false;

  const observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting && !counterStarted) {
        counterStarted = true;

        // Start the counters
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        $('.timer').each(function () {
            var $this = $(this);
            var options = $.extend({}, $this.data('countToOptions') || {});
            $this.countTo(options);
        });

        observer.disconnect(); // stop observing after trigger
      }
    });
  }, { threshold: 0.4 });

  // Observe the section with id="stats"
  const statsSection = document.querySelector('#stats');
  if (statsSection) {
    observer.observe(statsSection);
  }
