<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <?php foreach ($kategoris as $index => $kategori) : ?>
                            <li><a href="<?= site_url('shop/category/' . $kategori->id) ?>"><?= $kategori->nama ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" for="cs-black">Black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" for="cs-violet">Violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label class="cs-blue" for="cs-blue">Blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" for="cs-yellow">Yellow</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label class="cs-red" for="cs-red">Red</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label class="cs-green" for="cs-green">Green</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">s</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">m</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">l</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">xs</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresses</a>
                        <a href="#">Trousers</a>
                        <a href="#">Men's hats</a>
                        <a href="#">Backpack</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="<?= base_url('uploads/' . $barang->gambar . '') ?>" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="<?= base_url('uploads/' . $barang->gambar . '') ?>"><img src="<?= base_url('uploads/' . $barang->gambar . '') ?>" alt=""></div>
                                <div class="pt" data-imgbigurl="<?= base_url('uploads/' . $barang->gambar . '') ?>"><img src="<?= base_url('uploads/' . $barang->gambar . '') ?>" alt=""></div>
                                <div class="pt" data-imgbigurl="<?= base_url('uploads/' . $barang->gambar . '') ?>"><img src="<?= base_url('uploads/' . $barang->gambar . '') ?>" alt=""></div>
                                <div class="pt" data-imgbigurl="<?= base_url('uploads/' . $barang->gambar . '') ?>"><img src="<?= base_url('uploads/' . $barang->gambar . '') ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span><?= $barang->nama ?></span>
                                <h3><?= $barang->nama ?></h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <h4>Rp <?= $barang->harga ?></h4>
                                <hr>
                                <?php if ($session->get('isLoggedIn')) : ?>
                                    <h4>Pengiriman</h4>
                                    <div class="form-group">
                                        <label for="provinsi">Pilih Provinsi</label>
                                        <select class="form-control" id="provinsi">
                                            <option>Select Provinsi</option>
                                            <?php foreach ($provinsi as $p) : ?>
                                                <option value="<?= $p->province_id ?>"><?= $p->province ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten">Pilih Kabupaten/Kota</label>
                                        <select class="form-control" id="kabupaten">
                                            <option>Select Kabupaten/kota</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="service">Pilih Service</label>
                                        <select class="form-control" id="service">
                                            <option>Select Service</option>
                                        </select>
                                    </div>

                                    <strong>Estimasi : <span id="estimasi"></span></strong>
                                    <hr>
                                    <?= form_open('buy') ?>
                                    <?= form_input($id_barang) ?>
                                    <?= form_input($id_pembeli) ?>
                                    <div class="form-group">
                                        <?= form_label('Jumlah Pembelian', 'jumlah') ?>
                                        <?= form_input($jumlah) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label('Ongkir', 'ongkir') ?>
                                        <?= form_input($ongkir) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label('Total Harga', 'total_harga') ?>
                                        <?= form_input($total_harga) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label('Alamat', 'alamat') ?>
                                        <?= form_input($alamat) ?>
                                    </div>
                                    <div class="text-right">
                                        <?= form_submit($submit) ?>
                                    </div>
                                    <?= form_close() ?>
                                <?php endif ?>
                            </div>
                            <div class="pd-share">
                                <div class="p-code">Sku : 00012</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-n active" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4><?= count($komentars) ?> Comments</h4>
                                    <div class="comment-option">
                                        <?php foreach ($komentars as $index => $komentar) : ?>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="<?= base_url('fashi-master/img/product-single/avatar-2.png') ?>" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><?= $komentar->username ?> <span><?= $komentar->created_date ?></span></h5>
                                                    <div class="at-reply"><?= $komentar->komentar ?></div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->
<?= $this->endSection() ?>