<!-- Phần footer của trang dùng để import vào các trang home, category, product ... -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <img src="./assets/images/logo.png" alt="">
        <div class="mt-4">
          <p class="mb-0">1-800-234-9000</p>
          <p class="mb-0">tasha@yourcompany.com</p>
        </div>
      </div>
      <div class="col-8">
        <div class="row">
          <!-- Tab bootstrap Dùng để tạo tab khi click vào địa chỉ -->
          <div class="col-3">
            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="trieu-khuc-tab" data-toggle="pill" href="#trieu-khuc" role="tab" aria-controls="v-pills-home" aria-selected="true">Triều Khúc</a>
              <a class="nav-link" id="le-thanh-nghi-tab" data-toggle="pill" href="#le-thanh-nghi" role="tab" aria-controls="v-pills-profile" aria-selected="false">54 Lê Thanh Nghị</a>
              <a class="nav-link" id="doi-can-tab" data-toggle="pill" href="#doi-can" role="tab" aria-controls="v-pills-messages" aria-selected="false">16 Đội Cấn</a>
              <a class="nav-link" id="fpt-tower-tab" data-toggle="pill" href="#fpt-tower" role="tab" aria-controls="v-pills-settings" aria-selected="false">FPT 10 Phạm Văn Bạch</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content">
              <!-- Các iframe địa chỉ, phần này có thể lên google copy -->
              <div class="tab-pane fade show active" id="trieu-khuc" role="tabpanel" aria-labelledby="trieu-khuc-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7450.541753670525!2d105.79562539173128!3d20.981776240109713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc3ae37fc47%3A0x607ded9d4d1d1182!2zVHJp4buBdSBLaMO6YywgVMOibiBUcmnhu4F1LCBUaGFuaCBUcsOsLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1681918682315!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="tab-pane fade" id="le-thanh-nghi" role="tabpanel" aria-labelledby="le-thanh-nghi-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7294312625086!2d105.84730827510676!3d21.003480288646593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgUC4gTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1681918743098!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="tab-pane fade" id="doi-can" role="tabpanel" aria-labelledby="doi-can-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.938431134461!2d105.81971747510744!3d21.035149387559365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0cea14480f%3A0xe3f91377915ccbe6!2zMTYgxJDhu5lpIEPhuqVuLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1681918772425!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="tab-pane fade" id="fpt-tower" role="tabpanel" aria-labelledby="fpt-tower-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1459354757203!2d105.7860368751073!3d21.026845987844503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab286c7f7931%3A0xd08c4f176b0c22a7!2zMTAgUC4gUGjhuqFtIFbEg24gQuG6oWNoLCBZw6puIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1681918821273!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Phần này sẽ là phần viết các function javascript -->
<!-- Nhớ viết bên trong thẻ đóng mở <script>Viết ở đây</script> -->
<script>
  // Phần này để cài đặt thời gian tự động next slide của banner=> có thể tìm hiều trong phần slide bootstrap
  const banner = document.getElementById('bannerHome')
  banner.carousel({
    interval: 100
  })
</script>

<!-- Phần này để import file js -->
<!-- các link dưới đang dùng link cdn để thay cho các file js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>