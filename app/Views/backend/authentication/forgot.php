<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL; ?>">
    <title>LOGIN | ANH MINH MEDIA SYSTEM V3.0</title>

    <link href="<?php echo ASSET_BACKEND; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ASSET_BACKEND; ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo ASSET_BACKEND; ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo ASSET_BACKEND; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo ASSET_BACKEND; ?>css/customize.css" rel="stylesheet">
    
</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

             <div class="col-md-6">
                <h2 class="font-bold">ANH MINH MEDIA CMS SYSTEM V.1.0+</h2>

                <p>
                    +5,000 doanh nghiệp và chủ shop đã chọn để bán hàng từ Online đến Offline.
                </p>

                <p>
                    Sản phẩm của ANH MINH MEDIA luôn có tốc độ xử lý rất nhanh(~2 giây) giúp đem lại trải nghiệm tốt cho người dùng.
                </p>

                <p>
                    Với công nghệ mới, khách hàng sẽ luôn được sử dụng sản phẩm tốt nhất với mức giá ưu đãi nhất.


                </p>

                <p>
                    Website được xây dựng đơn giản rõ ràng, tinh tế, cùng chế độ bảo hành bảo trì thường xuyên.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">

                    <?php echo  (!empty($validate) && isset($validate)) ? '<div class="alert alert-danger">'.$validate.'</div>'  : '' ?>
                    
                    <form class="m-t" method="post" action="">
                        <div class="form-group">
                            <input type="email" required name="email" value="<?php echo set_value('email') ?>" class="form-control" placeholder="Nhập vào email của bạn">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Nhận mã OTP</button>

                        <a href="<?php echo base_url(BACKEND_DIRECTORY); ?>">
                            <small>Đăng nhập?</small>
                        </a>
                    </form>
                    <p class="m-t">
                        <small>Hệ thống quản trị nội dung ANH MINH MEDIA 2021 Version 1.2</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                ANH MINH MEDIA Copyright <?php echo date('Y'); ?>
            </div>
            <div class="col-md-6 text-right">
               <small>© 2021-2022</small>
            </div>
        </div>
    </div>

</body>

</html>
