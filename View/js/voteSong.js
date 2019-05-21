
//
// Event vote song
//

var star = $('.vote .fa-star');
var vote = $('.vote .fas.fa-star').length;
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

	vote = parseInt($(this)[0].children[0].innerHTML);

	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert(this.responseText);
		}
	};
	xhttp.open("GET", "getVote.php?point="+ $(this)[0].children[0].innerHTML, true);
	xhttp.send();
});