  $( "#nav-cluster1" ).click(function(e) {
      if ($(this).hasClass("active")) {
          return;
      }
      $(this).toggleClass('active').removeClass('active');
      e.preventDefault();
      $( "#c1-show" ).css("display", "block");
      $( "#c2-show" ).css("display", "none");
      $( "#c3-show" ).css("display", "none");
  });


  $( "#nav-cluster2" ).click(function(e) {
      if ($(this).hasClass("active")) {
          return;
      }
      $(this).toggleClass('active').removeClass('active');
      e.preventDefault();
      $( "#c1-show" ).css("display", "none");
      $( "#c2-show" ).css("display", "block");
      $( "#c3-show" ).css("display", "none");
  });

  $( "#nav-cluster3" ).click(function(e) {
      if ($(this).hasClass("active")) {
          return;
      }
      $(this).toggleClass('active').removeClass('active');
      e.preventDefault();
      $( "#c1-show" ).css("display", "none");
      $( "#c2-show" ).css("display", "none");
      $( "#c3-show" ).css("display", "block");
  });