const seaech = () => {
    var input_value = document.getElementById("text").value;
    var table = document.getElementById("table");
    var tr = table.getElementsByTagName("tr");
    for (var i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            var text_value = td.textcontent;
            if (text_value.toUpperCase().indexof(input_value)>-1){
                tr[i].style.display ="";
            }else{
                tr[i].style.dispaly ="none";
            }
        }
    }
}
