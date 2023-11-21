 <?php

  require_once("./class/monan.php");

  $id = '';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  $detail = new Monan();
  $result = $detail->getFoodById($id);
  $result = mysqli_fetch_array($result);
  // var_dump($result);
  ?>

 <div class="row mt-3">
   <span class="title-mon-an">CHI TIẾT MÓN ĂN</span>
 </div>
 <div class="row m-3">
   <div class="col-lg-5 col-md-4 col-sm-6 col-12">
     <img class="" style="height: 380px; width: 510px; margin-left: 150px; " src="./Admin_QuanLyBepAn/uploads/<?php echo $result['HinhAnh']; ?>" alt="<?php echo $result['TenMonAn']; ?>" />
   </div>

   <div class="col-lg-7 col-md-8 col-sm-6 col-12" style="padding-left: 100px;">
     <div class="product-name detail-content">
       <h2><?php echo $result['TenMonAn']; ?></h2>
     </div>
     <div class="price detail-content">
       <span>Giá bán:</span>
       <span><?php echo number_format($result['GiaTien']) . " " . "VND"; ?></span>
     </div>

     <div class="review detail-content">
       <span>Mô tả món ăn:</span>
       <span><?php echo $result['MoTa']; ?></span>
     </div>

     <div class="thanhphan detail-content">
       <span>Thành phần:</span>
       <span><?php echo $result['ThanhPhan']; ?></span>
     </div>

     <div class="quality">
       <label for="qty" style="font-size: 18px">Số Lượng:</label>
       <div class="box-qty">
         <div class="custom pull-left" style="display: flex">
           <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty > 1 ) result.value--;return false;" class="reduced items-count" type="button">
             <i class="fa-solid fa-minus" style="color: #050505"></i>
             <!-- <i class="icon-minus">&nbsp;</i> -->
           </button>
           <input type="number" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty" />
           <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">
             <i class="fa-solid fa-plus" style="color: #000000"></i>
             <!-- <i class="icon-plus">&nbsp;</i> -->
           </button>
         </div>
       </div>
     </div>
     <div class="">
       <a href="?page=thucdon">
         <button class="btn-add">
           <i class="fa-solid fa-bars" style="font-size: 20px"></i>

           <span>QUAY LẠI THỰC ĐƠN</span>
         </button>
       </a>

       <button class="btn-add" id="addToCart" data-idmonan="<?php echo $result['MaMonAn']; ?>">
         <i class="fa-solid fa-cart-plus" style="font-size: 20px"></i>
         <span>THÊM VÀO GIỎ</span>
       </button>

     </div>
   </div>
 </div>