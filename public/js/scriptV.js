// $('#burger_button').click(function() {

// 	if($('.topnav').css('display') == 'flex')
// 	{
// 		$('header').css({
//         'display': 'flex',
//         'flex-direction': 'unset',
//     	});

//     	$('.burger_item').css({
//         'position': 'unset',
//         'right': 'unset',
//         'top': 'unset',
//     	});

// 		$('.topnav').css({
//         'display': 'none',
//     	});
// 	}
// 	else{
//         $('.header__logo img').css({
//         'margin-left': 'unset',
//         });
//         if ($( window ).width() > 300 && $( window ).width() < 381 )
//         {
//              $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '26.8%',
//             });
//         }
//         else if ($( window ).width() >= 381 && $( window ).width() <= 410 ){
//             $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '26.2%',
//             });
//         }

//         else if ($( window ).width() > 410 && $( window ).width() <= 450 ){
//             $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '25.8%',
//             });
//         }

//         else if ($( window ).width() > 450 && $( window ).width() <= 500 ){
//             $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '25.4%',
//             });
//         }

//         else if ($( window ).width() > 500 && $( window ).width() <= 699 ){
//             $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '24.3%',
//             });
//         }
//         else if ($( window ).width() > 700 && $( window ).width() <= 767 ){
//             $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '23.7%',
//             });
//         }
//         else if ($( window ).width() > 767 && $( window ).width() <= 891 ){
//             $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '23.3%',
//             });
//         }
//         else if ($( window ).width() > 891 && $( window ).width() <= 900 ){
//             $('.burger_item').css({
//             'position': 'absolute',
//             'right': '0.01%',
//             'top': '22%',
//             });
//         }
		
//         $('header').css({
//         'display': 'flex',
//         'flex-direction': 'column',
//     	});

		

// 		 $('.topnav').css({
//         'display': 'flex',
//         'flex-direction': 'row',
//     	});
// 	}
// });

function Pseudo(){
    document.getElementById("h3_item").classList.toggle('pseudo');
}

function Pseudo1(){
    document.getElementById("h3_item1").classList.toggle('pseudo');
}

function Pseudo2(){
    document.getElementById("h3_item2").classList.toggle('pseudo');
}

function Pseudo3(){
    document.getElementById("h3_item3").classList.toggle('pseudo');
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
new Vue({
    el:'#demo',
    data:{
        show:false,
    }
});

new Vue({
    el:'#demo1',
    data:{
        show1:false,
    }
});

new Vue({
    el:'#demo2',
    data:{
        show2:false,
    }
});

new Vue({
    el:'#demo3',
    data:{
        show3:false,
    }
});
