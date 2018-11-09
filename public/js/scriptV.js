$('#burger_button').click(function() {

	if($('.topnav').css('display') == 'flex')
	{
		$('header').css({
        'display': 'flex',
        'flex-direction': 'unset',
    	});

    	$('.burger_item').css({
        'position': 'unset',
        'right': 'unset',
        'top': 'unset',
    	});

		$('.topnav').css({
        'display': 'none',
    	});
	}
	else{
        $('.header__logo img').css({
        'margin-left': 'unset',
        });
        if ($( window ).width() > 300 && $( window ).width() < 381 )
        {
             $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '26.8%',
            });
        }
        else if ($( window ).width() >= 381 && $( window ).width() <= 410 ){
            $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '26.2%',
            });
        }

        else if ($( window ).width() > 410 && $( window ).width() <= 450 ){
            $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '25.8%',
            });
        }

        else if ($( window ).width() > 450 && $( window ).width() <= 500 ){
            $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '25.4%',
            });
        }

        else if ($( window ).width() > 500 && $( window ).width() <= 699 ){
            $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '24.3%',
            });
        }
        else if ($( window ).width() > 700 && $( window ).width() <= 767 ){
            $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '23.7%',
            });
        }
        else if ($( window ).width() > 767 && $( window ).width() <= 891 ){
            $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '23.3%',
            });
        }
        else if ($( window ).width() > 891 && $( window ).width() <= 900 ){
            $('.burger_item').css({
            'position': 'absolute',
            'right': '0.01%',
            'top': '22%',
            });
        }
		
        $('header').css({
        'display': 'flex',
        'flex-direction': 'column',
    	});

		

		 $('.topnav').css({
        'display': 'flex',
        'flex-direction': 'row',
    	});
	}
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


function Text1(){
 document.getElementById('text').innerHTML = 'с 7 до 10 утра! Каждое утро с вами будут Жора, Красотка, Хам и Анита!';
 var element = document.getElementById('control2');
 element.style.opacity = "0.3";
 var element = document.getElementById('control1');
 element.style.opacity = "1";
}
function Text2(){
 document.getElementById('text').innerHTML = 'ЖКХА - радио нашей улицы! #радиокотороебудит';
 var element = document.getElementById('control2');
 element.style.opacity = "1";
 var element = document.getElementById('control1');
 element.style.opacity = "0.3";
}
function HrefButton1(){
    window.location.href = "#radio";
}
function HrefButton2(){
    window.location.href = "http://radio7fm.ru/";
}
window.onload = function(){
	var element = document.getElementById('control1');
 	element.style.opacity = "1";
}

var Streema = Streema || {};
Streema.Widgets = Streema.Widgets || {};

(function() {
    Streema.Widgets.widgetType = 'list';
    Streema.Widgets.listPopupPlayer = function(radioId) {
        var win = null;
        var left = (screen.width/2)-(740/2);
        var top = (screen.height/2)-(240/2);
        var domain = 'streema.com';
        var url = 'http://'+domain+'/widgets/play/' + radioId;
        url += '?ref=' + document.location.href;
        url += '&type='+Streema.Widgets.widgetType;

        win = window.open(url, 'popwinname', 'width=740,height=270,statusbar=no,menubar=0,resizable=no,scrollbars=no,top=' + top + ',left=' + left);
        win.focus();
    };
    Streema.Widgets.popupPlayer = function() {
        var anchorEl = document.getElementById('streema-widget-listen-anchor');
        radioId = anchorEl.name;
        Streema.Widgets.widgetType = 'radio';
        Streema.Widgets.listPopupPlayer(radioId);
    };
})();

var player;
document.getElementById("love").onclick = function(){
        //Love Radio
        document.getElementById('textRadio').innerHTML = 'Love Radio';
        player = new Playerjs({id:"player", file:"http://163.172.160.245:8081/radio/loveradio/icecast.audio"});
}
document.getElementById("radio7").onclick = function(){
        //Radio 7
        document.getElementById('textRadio').innerHTML = 'РАДИО-7';
        player = new Playerjs({id:"player", file:"http://a1.radioheart.ru:8001/RH1978"});
}

document.getElementById("humor").onclick = function(){
        //ЮМОР fm
        document.getElementById('textRadio').innerHTML = 'ЮМОР.FM';
        player = new Playerjs({id:"player", file:"http://ic7.101.ru:8000/v5_1"});
}
document.getElementById("republic").onclick = function(){
        // РЕБЯЧЬЯ РЕСБУПЛИКА
        document.getElementById('textRadio').innerHTML = 'РЕБЯЧЬЯ РЕСПУБЛИКА';
        player = new Playerjs({id:"player", file:"http://live.radio7.su:9000/deti256"});
}
document.getElementById("truth").onclick = function(){
        // Комсомольская правда
        document.getElementById('textRadio').innerHTML = 'КОМСОМОЛЬСКАЯ ПРАВДА';
        player = new Playerjs({id:"player", file:"http://kpradio.hostingradio.ru:8000/128"});
}
document.getElementById("dacha").onclick = function(){  
        // РАДИО ДАЧА
         document.getElementById('textRadio').innerHTML = 'РАДИО ДАЧА';
        player = new Playerjs({id:"player", file:"http://listen23.vdfm.ru:8000/dacha?type=.mp3"});
}