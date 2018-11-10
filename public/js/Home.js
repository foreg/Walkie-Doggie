var dataUs = new Vue({
    el:'#dataUs',
    props:['showed'],
    methods:{
        changeData:function(){
            dataUser.showDataUser=true;
            dataUser.showPet=false;
            dataUser.addPet=false;

        },
        editPets:function () {
            dataUser.showDataUser=false;
            dataUser.showPet=true;
            dataUser.addPet=false;

        },
        addPets:function () {
            dataUser.showDataUser=false;
            dataUser.showPet=false;
            dataUser.addPet=true;

        },
        goWalk:function () {
            dataUser.showDataUser=false;
            dataUser.showPet=false;
            dataUser.addPet=false;

        }

    },
    data:{
        showDataUser:true,
        showPet:false,
        addPet:false,
    }
});
var dataUser=new Vue({
    el:'#dataUser',
    props:["showed"],
    methods:{
        // changeData:function(){
        //     this.showDataUser=dataUs.showDataUser
        //
        //
        // }
    },
    data:{
        showDataUser: this.dataUs.showDataUser,
        showPet:this.dataUs.showPet,
        addPet:this.dataUs.addPet,
    }
});
