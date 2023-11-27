//Hàm validation
function Validator(option) {
  //get form validation

  var formElement = document.querySelector(option.form);

  if (formElement) {
    option.rules.forEach(function (rule) {
      var inputElement = document.querySelector(rule.selector);
      var errorElement =
        inputElement.parentElement.querySelector(".form-message");
      if (inputElement) {
        inputElement.onblur = function () {
          var errorMessage = rule.test(inputElement.value);
          if (errorMessage) {
            errorElement.innerText = errorMessage;
            inputElement.parentElement.classList.add("invalid");
          } else {
            errorElement.innerText = "";
            inputElement.parentElement.classList.remove("invalid");
          }
        };
      }
    });
  }
}
//Rules

Validator.isRequired = function (selector) {
  return {
    selector: selector,
    test: function (value) {
      return value.trim()
        ? undefined
        : "Vui lòng nhập tên món ăn muốn đề xuất!";
    },
  };
};
//

const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});

// add to cart with qty

$(document).on("click", "#addToCart", function () {
  var getID = document.getElementById("addToCart").dataset.idmonan;
  var getQty = document.getElementById("qty").value;

  if (getQty <= 0 || getQty > 10) {
    Toast.fire({
      icon: "error",
      title: "Số lượng món ăn chưa chính xác hoặc quá lớn",
    });
  } else {
    $.ajax({
      type: "POST",
      url: "process/add_cart.php",
      data: {
        MaMonAn: getID,
        SoLuong: getQty,
      },
      success: function (response) {
        Toast.fire({
          icon: "success",
          title: "Sản phẩm đã được thêm vào giỏ hàng",
        });
        setTimeout(function () {
          window.location.reload();
        }, 1000);
      },
    });
  }
});

//Delete item in cart
$(document).on("click", ".delete_item", function () {
  var id = $(this).data("id");
  if (confirm("Bạn có muốm xóa sản phẩm này không?") == true) {
    $.ajax({
      type: "POST",
      url: "process/process_cart.php",
      data: { idCart: id, act: "delete" },
      success: function (data) {
        alert("Đã xóa món ăn!");
        window.location.reload();
      },
    });
  } else {
  }
});

//update item in cart
$(document).on("click", ".update_cart", function () {
  var mamonan = $(this).data("id");
  var qty = $(".soluong").val();
  if (qty <= 0 || qty > 10) {
    Toast.fire({
      icon: "error",
      title: "Số lượng đặt phải > 0 và < 10",
    });
    setTimeout(function () {
      window.location.reload();
    }, 3000);
  } else {
    $.ajax({
      type: "POST",
      url: "process/process_cart.php",
      data: {
        mamonan,
        qty,
        act: "update_cart",
      },
      success: function (data) {
        location.reload();
      },
    });
  }
});

//Check Order currentDate

function checkTime() {
  var time = new Date();
  var hours = time.getHours();
  if (hours >= 0 && hours < 8) {
    return false;
  } else {
    return true;
  }
}

//Check Cookie
function checkCookie() {
  var allCookies = document.cookie;
  var cookieArray = allCookies.split(";");
  for (var i = 0; i < cookieArray.length; i++) {
    var cookie = cookieArray[i].trim();

    if (cookie.indexOf("maNV=") === 0) {
      var maNV = cookie.substring("maNV=".length);
      return maNV;
    }
  }
  return -1;
}
var check = document.cookie;
console.log(check);
//Get total
function getTotal() {
  var total = $("#total").text();
  total = total.replace(/,/g, "");
  var getTotal = parseInt(total, 10);
  return getTotal;
}

// Add Order
$(document).on("click", ".datmon", function () {
  var maNV = checkCookie();
  var tongtien = getTotal();
  var ghichu = $("#note").val();

  console.log(maNV, tongtien, ghichu);

  if (checkTime() == false) {
    Swal.fire("Đã quá giờ đặt món!");
  } else if (maNV == -1) {
    Swal.fire({
      icon: "error",
      title: "Bạn chưa đăng nhập!",
      text: "Vui lòng đăng nhập để đặt món!",
      footer:
        '<a href="?page=login" style="color: black; text-decoration: none;">Đăng nhập </a>',
    });
  } else {
    $.ajax({
      type: "POST",
      url: "process/process_order.php",
      data: {
        maNV,
        tongtien,
        ghichu,
        act: "datmon",
      },
      success: (data) => {
        Swal.fire("Đặt món thành công!");
        setTimeout(() => {
          window.location.href = "index.php?page=xempdm";
        }, 2000);
        // location.reload();
      },
    });
  }
});

//Cancel Order

$(document).on("click", ".huymon", function () {
  var idphieu = $(this).data("idphieu");
  if (checkTime() == false) {
    Swal.fire("Đã quá thời gian hủy phiếu!");
  } else {
    if (confirm("Bạn có chắc chắn muốn hủy phiếu đặt món này không?") == true) {
      $.ajax({
        type: "POST",
        url: "process/process_order.php",
        data: { idphieu: idphieu, act: "huymon" },
        success: function (data) {
          Swal.fire("Đã hủy phiếu đặt món!");

          setTimeout(function () {
            window.location.reload();
          }, 2000);
        },
      });
    }
  }
});
