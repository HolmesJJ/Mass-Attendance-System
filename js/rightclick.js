window.onload = function(){
    //去掉默认的contextmenu事件，否则会和右键事件同时出现。
    document.oncontextmenu = function(e){
        e.preventDefault();
    };
    document.getElementById("body").onmousedown = function(e){
        if(e.button == 2 || e.button == 1){
            alert("Hjjznb Company");
        }
    }
}