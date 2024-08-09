(function ($) {
  'use strict';

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner();

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
    return false;
  });

  // Sidebar Toggler
  $('.sidebar-toggler').click(function () {
    $('.sidebar, .content').toggleClass('open');
    return false;
  });

  // Progress Bar
  $('.pg-bar').waypoint(
    function () {
      $('.progress .progress-bar').each(function () {
        $(this).css('width', $(this).attr('aria-valuenow') + '%');
      });
    },
    { offset: '80%' },
  );

  // Salse & Revenue Chart
  var ctx2 = $('#salse-revenue').get(0).getContext('2d');
    var labels = window.chartLabels;
    var dataMasuk = window.chartDataMasuk;

  var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [
        {
          label: 'Masuk',
          data: dataMasuk,
          backgroundColor: 'rgba(0, 255, 70, .3)',
          fill: true,
        },
        {
          label: 'Keluar',
          data: [
            9900000, 13500000, 17000000, 13000000, 19000000, 18000000, 12000000,
            9900000, 13500000,
          ],
          backgroundColor: 'rgba(0, 70, 255, .5)',
          fill: true,
        },
      ],
    },
    options: {
      responsive: true,
    },
  });
})(jQuery);
