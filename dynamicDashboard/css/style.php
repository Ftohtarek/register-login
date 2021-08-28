/* <?php header("Content-type: text/css"); ?> */
body{
<!-- background-color:rgb(6, 7, 30) ; -->
}
<!-- .cell {
text-align: center;
margin: 5px auto;
padding: 5px;
font-size: 18px;
border: 1px solid rgba(0,0,0,.3);
border-radius:5px;
} -->

#tableBody .row , #tableHead {
margin: auto 0px;
font-size: 15px;
min-height: 40px !important;
}
#tableBody .row {
min-height: 60px !important;
}
#tableHead *{
padding: 5px;
font-weight: 600;
border: 1px solid rgba(211, 208, 208,.3) ;
background-color: #eeecec;
}
#tableBody .row *,{
border: 1px solid #eeecec ;
padding: 5px;
display: flex;
align-items: center;
}
/* end table cell */
.updatelabel{
height: 100% !important;
margin: auto !important;
background-color: #eeeeee;
width: 120px !important;
}
/* */
.updRow{
display: none;
}
/* */
.savebtn ,.cansalbtn ,.addBtn{
border: none;
border-radius: 3px;
transition: all .5s;
font-size:12px;
}
.savebtn{
background-color: lime;
}
.savebtn:hover ,.addBtn:hover{
background-color: rgb(99, 253, 99);
transform: translateY(-10%);
}
.cansalbtn{
background-color:yellow;
}
.cansalbtn:hover{
background-color:rgb(255, 255, 101);
transform: translateY(-10%);
}
/*add user*/
.addBtn{
background-color: lime;
font-size:16px ;


}
<style>
    body {
        background-color: red;
    }
</style>