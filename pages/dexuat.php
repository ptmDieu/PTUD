<div class="row mt-3">
  <span class="title-mon-an">ĐỀ XUẤT MÓN ĂN MỚI</span>
</div>
<div class="spacer"></div>
<div class="container  mt-3">
  <form action="" method="POST" class="frm-dx form" id="phieudx">
    <div class="row mb-4 title-frm">
      <span style="font-weight: bold">PHIẾU ĐỀ XUẤT MÓN ĂN MỚI</span>
    </div>
    <div class="form-group">
      <label for="fullname" class="form-label">Tên món đề xuất</label>
      <input id="mondx" name="fullname" type="text" placeholder="Cơm tấm sà bì chưởng" class="form-control">
      <span class="form-message"></span>
    </div>

    <div class="form-group">
      <label for="fullname" class="form-label">Ghi chú</label>
      <input id="ghichu" name="ghichu" style="height: 50px;" type="text" placeholder="Nhập ghi chú của bạn" class="form-control">
      <span class="form-message"></span>
    </div>
    <!-- <div class="row mb-3 form-group">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tên món ăn:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mondx" placeholder="Nhập tên món ăn bạn muốn đề xuất!!!" required />
        <span class="form-message" style="text-align: left; font-size: 1.2rem; padding: 4px 0 0;"></span>
      </div>
    </div>
    <div class="row mb-3 form-group">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Ghi chú:</label>
      <div class="col-sm-10">
        <textarea name="" class="form-control" id="" cols="100" rows="5" placeholder="Ghi chú tại đây nhé!"></textarea>
        <span class="form-message"></span>
      </div>
    </div> -->
    <button type="submit" class="btn btn-primary">GỬI PHIẾU</button>
  </form>
  <div class="spacerbt"></div>

  <script src="js/index.js"></script>
  <script>
    Validator({
      form: '#phieudx',
      rules: [
        Validator.isRequired('#mondx')
      ]
    });
  </script>
</div>