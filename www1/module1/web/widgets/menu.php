<nav class="navbar navbar-expand-md navbar-light bg-light">
          <a class="navbar-brand" href="#">Backend</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý User</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="danhsach.php">Danh sách</a>
                          <a class="dropdown-item" href="them.php">Thêm mới</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý sản phẩm</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="dssp.php">Danh sách</a>
                          <a class="dropdown-item" href="themsp.php">Thêm mới</a>
                      </div>
                  </li>
              </ul>            
              <ul class="navbar-nav float-right">
                    <li class="nav-item ">
                      <a class="nav-link" href="#">Chào bạn: <img src="<?=$_SESSION['login_avt']?>" height="20px"/> <?=$_SESSION['login_name']?></span></a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link" href="logout.php">Thoát </span></a>
                  </li>
              </ul>
          </div>
      </nav>