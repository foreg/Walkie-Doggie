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
