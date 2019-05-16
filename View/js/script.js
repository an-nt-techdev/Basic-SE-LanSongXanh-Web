
// Event vote song
var star = $('.fa-star');
var vote = $('.fas.fa-star').length;
var n;

$('.far').hover(function(){

	n = parseInt($(this)[0].children[0].innerHTML)

	for (var i=1; i<=5; i++)
	{
		if (i <= n)
		{
			$('.star-'+i).removeClass('far');
			$('.star-'+i).addClass('fas');
		}
		else 
		{
			$('.star-'+i).removeClass('fas');
			$('.star-'+i).addClass('far');
		}
	}
}, function(){

	for (var i=vote+1; i<=n; i++)
	{
		if (i <= n)
		{
			$('.star-'+i).removeClass('fas');
			$('.star-'+i).addClass('far');
		}
		else 
		{
			$('.star-'+i).removeClass('far');
			$('.star-'+i).addClass('fas');
		}
	}
});