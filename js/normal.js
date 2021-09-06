function display_instruction(id) {
    var field_btn_arr = document.getElementsByClassName("field_btn");
    document.getElementsByClassName("cont")[0].style.height = "400px";
    console.log(field_btn_arr.length);
    for (var i=0; i<field_btn_arr.length; i++) {
        field_btn_arr[i].style.display = "none";
    }
    document.getElementById("final_confirm").style.display = "none";
    
    id = id.substring(id.length, 5);
    document.getElementById("field_instruction" + id).style.display = "block";
    document.getElementById("field_instruction" + id).style.border = "1px lightgrey solid";
    document.getElementById("field_instruction" + id).contentEditable = true;
    document.getElementById("insert" + id).style.display = "inline-block";
    document.getElementById("partial_confirm" + id).style.display = "inline-block";
}

function Partial_Submit(id) {
    id = id.substring(id.length, 15);
    var temp = document.getElementById("field_instruction" + id).innerHTML;
    document.getElementById("field_instruction_hidden" + id).value = temp;
    
    document.getElementById("field_instruction" + id).style.display = "none";
    document.getElementById("insert" + id).style.display = "none";
    document.getElementById("partial_confirm" + id).style.display = "none";
    
    var cont_height = document.getElementById("cont_height").value;
    document.getElementsByClassName("cont")[0].style.height = cont_height + "px";
    
    var field_btn_arr = document.getElementsByClassName("field_btn");
    console.log(field_btn_arr.length);
    for (var i=0; i<field_btn_arr.length; i++) {
        field_btn_arr[i].style.display = "block";
        if(document.getElementById("field_instruction_hidden" + (i+1)).value != "") {
            field_btn_arr[i].style.border = "2px green solid";
        }
        else {
            field_btn_arr[i].style.border = "0";
        }
    }
    document.getElementById("final_confirm").style.display = "block";
}

function Insert_field(id) {
    id = id.substring(id.length, 6);
    var content = document.getElementById("field_instruction" + id).innerHTML;
    document.getElementById("field_instruction" + id).innerHTML = content + "<img src='image/Field.png' style='height:23px;'/>";
}

function Final_Confirm() {
    document.getElementById("hidden_field").submit();
}