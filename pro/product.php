<?php
include __DIR__ . '/partials/init.php';
$title = '美食區';
?>



<?php include __DIR__ . '/partials/html-head.php'; ?>
<?php include __DIR__ . '/partials/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 my-3">
            <div class="card text-center h-100 border-0 box-shadow">
                <img src="https://images.unsplash.com/photo-1491336477066-31156b5e4f35?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title " style="font-weight: bold;">蚵男的手錶</h5>
                    <p class="card-text ">特色：手錶是防水的，還可以照明。主要是射出麻醉針，當然還有時間提示功能。</p>
                </div>
                <div class="card-footer border-top-0 bg-white">
                    <div class="btn-group " role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-secondary btn-sm">紅</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">黑</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">褐</button>

                    </div>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-2 d-block"><i class="fas fa-shopping-cart mr-1"></i>加入購物車</a>
                </div>

            </div>
        </div>
        <div class="col-md-4 my-3">
            <div class="card text-center h-100 border-0 box-shadow">
                <img src="https://images.unsplash.com/photo-1447005497901-b3e9ee359928?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title " style="font-weight: bold;">一級偽裝帽</h5>
                    <p class="card-text ">戴上後連老媽都認不出來。時常做錯事的人建議買一頂備著以防不時之需。</p>
                </div>
                <div class="card-footer border-top-0 bg-white">

                    <a href="#" class="btn btn-outline-secondary btn-sm mt-2 d-block"><i class="fas fa-shopping-cart mr-1"></i>加入購物車</a>
                </div>

            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card text-center h-100 border-0 box-shadow">
                <img src="https://i0.wp.com/flog.cc/mag/wp-content/uploads/2013/12/Taiwan-bluw-and-white-Slipper-1.jpg?resize=660%2C450" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title " style="font-weight: bold;">+9 戰鬥靴</h5>
                    <p class="card-text ">精品界大師-卡爾拉格斐(Karl Lagerfeld)，最新力作。+9只是最低預估值，數量有限，欲者請速速下單！</p>
                </div>
                <div class="card-footer border-top-0 bg-white">
                    <div class="btn-group " role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-secondary btn-sm">S</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">M</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" disabled>L</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" disabled>XL</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">XXL</button>
                    </div>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-2 d-block"><i class="fas fa-shopping-cart mr-1"></i>加入購物車</a>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/partials/scripts.php'; ?>
<?php include __DIR__ . '/partials/html-foot.php'; ?>