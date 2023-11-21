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
  timer: 2000,
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
    window.location.reload();
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
