<x-frontend-layout>
    <div class="listcontent-area">
        <aside class="cart-area  dz-scroll" id="cart_area">
            <div class="" >
                <div class="h-100" id="home-counter">
                    <div class="card">
                        <div class="card-body">
                            <img src="images/counter.jpg" class="img-fluid mb-5" alt="">
                            <h3 class="title mb-4">Your Order in Progress Check Order</h3>
                            <p class="mb-sm-5 mb-3">Click on any item or Add Order Button to create order</p>
                            <a href="javascript:void(0);" id="add-order" class="btn btn-warning btn-rounded me-3">Add Order</a>
                            <a href="front-orders_status.html" class="btn btn-warning light btn-rounded">Order Status</a>
                        </div>
                    </div>
                </div>
                <div class="h-100" id="add-order-content">
                    <div class="card rounded-0">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table text-black">
                                    <thead>
                                        <tr>
                                            <th>ITEM</th>
                                            <th>PRICE</th>
                                            <th>QNT.</th>
                                            <th>TOTAL($)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td><span class="font-w500">{{ $category->name }}</span></td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <div class="quantity btn-quantity style-1">
                                                    <input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
                                                </div>
                                            </td>
                                            <td>12.00</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-order-footer">
                        <div class="amount-details">
                            <h5 class="d-flex text-right mb-3">
                                <span class="text">Sub total </span>
                                <span class="me-0 ms-auto">43.00</span>
                            </h5>
                        </div>
                        <div class="amount-payble">
                            <h5 class="d-flex text-right mb-0">
                                <span class="text">Amount to Pay</span>
                                <span class="me-0 ms-auto">46.00</span>
                            </h5>
                        </div>

                        <div class="btn_box mt-5">
                            <div class="row no-gutter mx-0">
                                <a href="javascript:void(0);" id="home-counter-tab" class="btn btn-danger btn-block col-6 m-0 rounded-0">Cancel</a>
                                <a href="javascript:void(0);" id="place-order-tab" class="btn btn-primary btn-block col-6 m-0 rounded-0">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-100" id="place-order" >
                    <div class="card rounded-0">
                        <div class="card-body">
                            <form>
                                <h4 class="mb-4">Amount to Pay <strong> $46.00 </strong></h4>
                                <div class="form-group mb-4 pb-2">
                                    <label class="font-w600">Select Payment Method</label>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                            <div class="custom-control custom-radio">
                                                <input checked="" type="radio" id="cash" name="PaymentMethod" class="custom-control-input">
                                                <label class="custom-control-label" for="cash"><span class="ms-2">Cash</span></label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="card" name="PaymentMethod" class="custom-control-input">
                                                <label class="custom-control-label" for="card"><span class="ms-2">Card</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4 pb-2">
                                    <label class="font-w600">Order type</label>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                            <div class="custom-control custom-radio">
                                                <input checked="" type="radio" id="takeaway" name="OrderType" class="custom-control-input">
                                                <label class="custom-control-label" for="takeaway"><span class="ms-2">Takeaway</span></label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="dine-in" name="OrderType" class="custom-control-input">
                                                <label class="custom-control-label" for="dine-in"><span class="ms-2">Dine-in</span></label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                            <div class="select_box style-1 w-100 d-flex">
                                                <select class="default-select">
                                                    <option>Select Table</option>
                                                    <option>Table No 01</option>
                                                    <option>Table No 02</option>
                                                    <option>Table No 03</option>
                                                    <option>Table No 04</option>
                                                    <option>Table No 05</option>
                                                    <option>Table No 06</option>
                                                    <option>Table No 07</option>
                                                    <option>Table No 08</option>
                                                    <option>Table No 09</option>
                                                    <option>Table No 10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-w600">Customer Info (Optional)</label>
                                    <input type="text" class="form-control solid" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control solid" placeholder="Enter Phone Number">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-order-footer">
                        <div class="btn_box">
                            <div class="row no-gutter mx-0">
                                <a href="javascript:void(0);" id="place-order-cancel" class="btn btn-danger btn-block col-6 m-0 rounded-0">Cancel</a>
                                <a href="front-home.html" class="btn btn-primary btn-block col-6 m-0 rounded-0">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="row">
            {{-- <div class="col-xl-12">
                <div class="owl-carousel item-carousel">
                    <div class="items">
                        <div class="item-box">
                            <img src="images/food-icon/1.png" alt="">
                            <h5 class="title mb-0">soft drink</h5>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-box active">
                            <img src="images/food-icon/2.png" alt="">
                            <h5 class="title mb-0">fast food</h5>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-box">
                            <img src="images/food-icon/3.png" alt="">
                            <h5 class="title mb-0">pastry</h5>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-box">
                            <img src="images/food-icon/4.png" alt="">
                            <h5 class="title mb-0">burger</h5>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-box">
                            <img src="images/food-icon/5.png" alt="">
                            <h5 class="title mb-0">chinese</h5>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-box">
                            <img src="images/food-icon/6.png" alt="">
                            <h5 class="title mb-0">vegetable</h5>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-box">
                            <img src="images/food-icon/7.png" alt="">
                            <h5 class="title mb-0">watermelon</h5>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-12">
                <div class="input-group search-area style-1 mb-4">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <div class="input-group-append">
                        <button class=" btn btn-primary btn-rounded">Search<i class="flaticon-381-search-2 scale3 ms-3"></i></button>
                    </div>
                </div>
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
                        <div class="card item-card">
                            <div class="card-body p-0">
                                <img src="{{ Storage::url($category->image) }}" class="img-fluid" alt="">
                                <div class="info">
                                    <h5 class="name">{{ $category->name }}</h5>
                                    <p class="mb-0 mt-2 price"><img src="/images/veg.png" alt="">{{ $category->description }}<h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-frontend-layout>
