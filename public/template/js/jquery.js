$(document).ready(function()
	{
		$(".shop").click(function(e)
        {
			e.preventDefault();
			$(".sidebar").show();
		});
		$(".closeside").click(function(e)
		{
			e.preventDefault();
			$(".sidebar").hide();
		});
		$(".shop").click(function(){	
			var name = $(this).data("name");  
			var harga = $(this).data("harga");
			let gambar = $(this).parent().parent().parent().find("img").attr("src");
			
			var $con = $(".content:first").clone().show();
			$con.find(".picture").attr("src",gambar);
			$con.find(".nama").html(name);
			$con.find(".harga").html(harga);
			$con.find(".del-cart").click(function(){
				$con.hide('slow', function(){
					$(this).remove();
				})
			});
			$(".cart_box").append($con);
			/* $(".content").prepend("<img src='"+gambar+"' class='img-side rounded mx-auto d-block'>"+name+"<br>"+harga+""); */
		});
    });