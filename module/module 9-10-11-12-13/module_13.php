<style>
	.type-26 .fa,
.type-26 .fas {
  text-align: center;
  font-weight: 900;
}
.type-26 #top-up {
  background: #404040;
  position: fixed;
  font-size: 18px;
  padding: 8px;
  border-radius: 5px;
  color: #999999;
  bottom: 80px;
  right: 15px;
  opacity: 0.6;
}
.type-26 .fixed {
  position: fixed;
  z-index: 1000;
  top: 0;
}
.type-26 #top-up:hover {
  opacity: 0.8;
  color: #fff;
}

</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <div class="type-26">
<div title="Về đầu trang"  id="top-up">
		<i class="fa fa-angle-up" aria-hidden="true" ><br>	<span style="font-size: 18px;">TOP</span>	</i>
	</div>
   
</div>
		
        
    <!-- Js -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <script>
		// kéo xuống khoảng cách 200px thì xuất hiện nút Top-up
		var offset = 00;
		// thời gian di trượt 0.75s ( 1000 = 1s )
		var duration = 750;
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > offset)
					$('#top-up').fadeIn(duration); else
					$('#top-up').fadeOut(duration);
			});
			$('#top-up').click(function () {
				$('body,html').animate({ scrollTop: 0 }, duration);
			});
		});

	</script>

</body>
</html>