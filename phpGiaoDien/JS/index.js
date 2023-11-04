$(document).ready(function(){
    var i = 1;
    $("#btn2").click(function(){
        $("#myModal").modal();
    });

    function kiemTraTen(){
        var i = 1;
        let mauKT = /([A-Z]{1}[a-z]+)((\s{1}[A-Z]{1}[a-z]+){1,})$/;
        if ($("#Name").val() == ""){
            $("#tbName").html("Không thể bỏ trống");
            return false;
        }
        if (!mauKT.test($("#Name").val())){
            $("#tbName").html("Mỗi ký tự viết hoa không dùng số");
            return true
        }
        $("#Name").html("*");
        return true;
    }
    $("#Name").blur(kiemTraTen);

    function kiemTraSoAo(){
        var mauKT = /^\d*$/;
        if ($("#Ao").val() == ""){
            $("#tbAo").html("Không thể bỏ trống");
            return false;
        }
        if (!mauKT.test($("#Ao").val())){
            $("#tbAo").html("Dùng số từ 1 đến 100");
            return true
        }
        else{
            var soAo =$("#Ao").val();
            if (soAo < 1 || soAo > 100){
                $("#tbAo").html("từ 1 đến 100");
            }else{
                $("tbAo").html("*")
                return true;
            }
        }
    }
    $("#Ao").blur(kiemTraSoAo);

    function kiemTraCLB(){
        var mauKT = /^[A-Z0-9][a-z0-9]*(\s[A-Z0-9][a-z0-9]*)*$/;
        if ($("#CLB").val() == ""){
            $("#tbCLB").html("Không thể bỏ trống");
            return false;
        }
        if (!mauKT.test($("#CLB").val())){
            $("#tbCLB").html("Dùng chữ hoa đầu từ và số");
            return true
        }
        $("#tbCLB").html("*");
        return true;
    }
    $("#CLB").blur(kiemTraCLB);

    function kiemTraNTT(){
        if ($("#NTT").val() == ""){
            $("#tbNTT").html("Không thể bỏ trống");
            return false;
        }
        var today = new Date();
        var ntt = new Date($("#NTT").val());
        today = today.setDate(today.getDate()+7);
        if (today > ntt){
            $("#tbNTT").html("Phải sau ngày hiện tại 7 ngày");
            return true
        }
        $("#tbNTT").html("*");
        return true;
    }
    $("#NTT").blur(kiemTraNTT);

    function kiemTraSDT(){
        var mauKT = /^0\D{3}-\d{3}-d{3}$/;
        if ($("#SDT").val() == ""){
            $("#tbSDT").html("Không thể bỏ trống");
            return false;
        }
        if (!mauKT.test($("#SDT").val())){
            $("#tbSDT").html("Theo mẫu: 0xxx-xxx-xxx trong đó x là số");
            return true
        }
        $("#tbSDT").html("*");
        return true;
    }
    $("#tbSDT").blur(kiemTraSDT);
    $("#Save").click(function(){
        if(KiemTraTen() == true && KiemTraSoAo() == true && KiemTraCLB() == true && KiemTraNTT() == true && KiemTraSDT() == true){
            row = "<tr>";
            row += "<th>" + (i++) + "</th>";
            row += "<th>" + $("#Name").val() + "</th>";
            row += "<th>" + $("#Ao").val() + "</th>";
            row += "<th>" + $("#CLB").val() + "</th>";
            row += "<th>" + $("#NTT").val() + "</th>";
            row += "<th>" + $("#SDT").val() + "</th>";
            row += "<th>" + $("#ADD").val() + "</th>";
            $("#danhSach").append(row);
            $("#myModal").modal("hide");
        }
    })
})