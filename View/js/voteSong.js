
//
// Event vote song
//

var star = $('.vote .fa-star');
var n;

$('.vote .fa-star').hover(function(){

	n = parseInt($(this)[0].children[0].innerHTML);
	
	if (vote < n)
	{
		for (var i=vote+1; i<=n; i++)
		{
			$('.star-'+i).removeClass('far');
			$('.star-'+i).addClass('fas');
		}
	}
	else
	{
		for (var i=n+1; i<=vote; i++)
		{
			$('.star-'+i).removeClass('fas');
			$('.star-'+i).addClass('far');
		}
	}
}, function(){
	if (vote < n)
	{
		for (var i=vote+1; i<=n; i++)
		{
			$('.star-'+i).removeClass('fas');
			$('.star-'+i).addClass('far');
		}
	}
	else
	{
		for (var i=n+1; i<=vote; i++)
		{
			$('.star-'+i).removeClass('far');
			$('.star-'+i).addClass('fas');
		}
	}
});


$('.vote .fa-star').click(function(){
	if ($('#signInModal').length == 0) {
		var xhttp;
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var res = this.responseText;
				alert("_" + res + "_");				
				vote = parseInt($(this)[0].children[0].innerHTML);
			}
		};
		
		url = new URL(window.location.href);

		xhttp.open("GET", "getVote.php?point=" + $(this)[0].children[0].innerHTML + "&user=" + $('#nameUser')[0].innerHTML + "&song=" + url.searchParams.get("v"), true);
		xhttp.send();
	}
	else alert('Bạn cần đăng nhập để sử dụng chức năng bình chọn!!');
});