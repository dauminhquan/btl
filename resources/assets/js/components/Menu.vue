<template>
  <div class="menu">
      
      <div @click="show_hide_menu()"> <a href="#" id="show-hide-menu"><i class="glyphicon glyphicon-home"></i></a></div>
        <ul class="nav">
            <li v-for="item in items" :key='item.name'>
                <a href="#">
                    <i class="glyphicon glyphicon-home"></i>
                    <span> {{item.name}}</span>
                </a>
            </li>
        </ul>
    </div>
</template>
<script>

export default {
    mounted(){
        this.printH();
    },
  data(){
      return {
          items: [{name : 'Select a subject'},{name: 'Maths'},{name:'English'},{name:'Art and Design'},{name:'Drama'},{name:'Music'}
          ,{name:'Physics'},{name:'Chemistry'},{name:'Biology'},{name:'Mandarin'},{name: 1},
          {name: 2},
          {name: 3},
          {name: 4},
          {name: 5},
          {name: 6},
          {name: 7},
          {name: 8},
          {name: 9},
          {name: 10},
          {name: 11},
          {name: 12},
          {name: 13}],
          show_menu: true
      }
  },
  methods : {
      printH(){ console.log($( window ).height) },
      show_hide_menu(){
          this.show_menu = !this.show_menu
          console.log(this.show_menu)
          if(this.show_menu == true)
          {
            $('.menu ul.nav').animate({width: '400px'});
          }
          else{
              $('.menu ul.nav').animate({width: '0px'});
          }
      }
  }
}
</script>
<style>
    .menu{
        float: left;
        width: 300px;
    }
    .menu> ul.nav {
    height:100%;
    position: fixed;
    overflow-y:scroll;
}
.nav::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

.nav::-webkit-scrollbar
{
	width: 5px;
	background-color: #F5F5F5;
}

.nav::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #AAAAAA;
}
.nav-menu-item{
    width: 998px;
    height: 543px!important;
    padding: 14px 20px;
    border-width: 1px;
    border-style: solid;
    border-color: #ddd #ddd #ddd #e1e1e1;
    position: absolute;
    top: -1px;
    bottom: -1px;
    left: 100%;
    background: #fff;
    margin-left: 0;
    display: none;
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
    box-shadow: -2px 0 8px 0 rgba(0,0,0,.06);
    z-index: 1;
}
.sub-menu-item:last-child{
       margin-bottom: 0;
}
</style>

