<?php include($_SERVER['DOCUMENT_ROOT'] ."/includes/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/lib/functions.php");?>
<?php $database->executeQuery("SELECT airportid FROM ".DBALIAS."airports WHERE airportcode='LHR'");$database->getNextRecord();$airportid = $database->getColumn('airportid');?>
<?php $promocode='AZP-LHR5';?>
<div id="content" class="top-m">
	<section class="banner2"></section>
	<section class="aboutus-content product-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-md-push-8">
				    <?php include($_SERVER['DOCUMENT_ROOT'] ."/includes/airportpagesquoteform.php");?>
                    <div class="price-match text-center m-top-10 m-bottom-10">
						<img src="/assets/images/a2z-airport-parking-price-match-promise.jpg" style="border-radius: 5px;width: 400px;" class="visible-md visible-lg">
					</div>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-md-pull-4">
				    <div class="row">
				        <div class="col-xs-12 col-sm-12 col-md-12 m-bottom-10">
				            <h1 style="font-size: 30px;margin-bottom: 10px;">Heathrow Airport <span style="font-size: 16px;">Parking Deals</span></h1>
				        </div>
				        <div class="col-xs-12 col-sm-6 col-md-7 m-bottom-15">
				            <p class="m-bottom-5 text-justify">
				                Heathrow LHR airport is one of the busiest airport in United Kingdom. Parking at Heathrow Airport for terminals 1, 2, 3, 4 and 5 has never been easier. 
				                A2Z Airport Parking is known for providing cheapest airport parking deals at Heathrow. 
				                Our airport price comparison site compares prices for all multiple cars to show the best price for meet and greet parking at Heathrow airport. 
				                With simple steps you can compare multiple car parks and meet and greet parking providers at Heathrow LHR airport. 
				                Our price comparison tool will show prices available on different options such as secured and non-secured car parks. 
				                You can pre-book meet and greet parking on our website following simple steps. You can also compare different parking vendors and options to choose the parking deal that best suits your need.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 m-bottom-15">
                            <img src="/assets/gatwick-airport-parking-save-upto-70.jpg" class="img-responsive" style="border-radius:5px;">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 m-bottom-10 text-center">
                            <span style="padding: 10px;border: 2px dashed #fdc18e;border-radius: 5px;">
                                " Heathrow Airport Parking Discount Code <span style="font-size: 17px;font-weight: 800;color: #1c8cc9;">AZP-LHR5</span> "
                            </span>
                            <br><br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 m-bottom-10">
                            <p class="m-bottom-5 text-justify">
                                Meet & greet parking is the most preferred car parking option used by most our customer at Heathrow Airport. 
                                Our meet and greet parking is excellent option for customers who want to pay a cheap price for Heathrow airport parking. 
                                According to frequent travelers meet and greet parking is convenient and hassle free. 
                                If you have a lot of luggage or travelling in groups or with family you will find this parking best suited for your family. 
                                With meet & greet airport parking there is no need to look for car park or finding a space nearby the airport terminal. 
                                With this parking option you can avoid long walks and transfer buses, It is also an ideal choice for disabled passengers. 
                                A professional meet and greet driver will meet you at the terminal and park your car. Upon your arrival, he will meet you outside the arrivals terminals and you will be able to get on the road and head back to your home.
                            </p>
                        </div>
                    </div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12 m-bottom-10">
                    <p class="m-bottom-5 text-justify">
                        Pre-Booking or booking in advance will always give you a best deal available. Do not wait for the last-minute to book your airport parking. 
                        Our prices change often and are subject to the car park availability. With just simple date selection you can find deals for your desired travel dates. 
                        All parking vendors listed on A2Z Parking website have years of experience in providing high-class meet and greet parking services.
                        With us you can choose from the best parking deal. We do our best to offer updated prices and parking discounts for Heathrow Airport on our website.
                    </p>
                </div>
   				<div class="col-xs-12 col-sm-12">
                    <?php $airproducts = AirportProducts($airportid);sort($airproducts);?>
                    <?php if(count($airproducts) > 0) {?>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr class="warning">
                            <th style="width: 35%;">Compare Gatwick Parking Services</th>
                            <th style="width: 15%;" class="text-center">Customer Rating</th>
                            <th class="text-center">
                                Price Per Day
                            </th>
                            <th class="text-center">Price Per Week</th>
                            <th class="text-center">Transfer Time</th>
                            <th class="text-center">Book Now</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($airproducts as $airproduct) {
                            $productid = $airproduct['productid'];
                            $productname = $airproduct['productname'];
                            $productlogo = $airproduct['productlogo'];
                            $servicetype = $airproduct['servicetype'];
                            $productprice = $airproduct['productprice'];
                        ?>
                          <tr>
                            <td style="vertical-align:middle;">
                                <div class="row">
				                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <img src="/assets/images/products/<?php echo $productlogo;?>" alt="" class="img-responsive" >
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9">
                                        <b><a href=""><?php echo $productname?></a></b>
                                        <p style="font-weight: 600;">
                                            <?php if($servicetype=="1") { ?>
                                                Meet & Greet Service
                                            <?php } else { ?>
                                                Park & Ride Service
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td style="vertical-align:middle;" class="text-center">
                                <?php $rating1 = mysqli_num_rows(mysqli_query($database->connect(),"SELECT * FROM ".DBALIAS."reviewsproduct WHERE product_id='".$productid."' AND publish='1' AND rating='1'"));?>
                                <?php $rating2 = mysqli_num_rows(mysqli_query($database->connect(),"SELECT * FROM ".DBALIAS."reviewsproduct WHERE product_id='".$productid."' AND publish='1' AND rating='2'"));?>
                                <?php $rating3 = mysqli_num_rows(mysqli_query($database->connect(),"SELECT * FROM ".DBALIAS."reviewsproduct WHERE product_id='".$productid."' AND publish='1' AND rating='3'"));?>
                                <?php $rating4 = mysqli_num_rows(mysqli_query($database->connect(),"SELECT * FROM ".DBALIAS."reviewsproduct WHERE product_id='".$productid."' AND publish='1' AND rating='4'"));?>
                                <?php $rating5 = mysqli_num_rows(mysqli_query($database->connect(),"SELECT * FROM ".DBALIAS."reviewsproduct WHERE product_id='".$productid."' AND publish='1' AND rating='5'"));?>
                                <?php $totalrating = $rating1+$rating2+$rating3+$rating4+$rating5;?>
                                <?php if($totalrating!= 0) {$rating = ($rating1*1 + $rating2*2 + $rating3*3 + $rating4*4 + $rating5*5) / $totalrating;}?>
                                <?php $rating = round($rating * 2) / 2;if($rating>0){?>
                                    <small>Rating: <b><?php echo number_format($rating,2);?></b> <span class="color_light">from 0 - 5.0</span> </small>
                                    <img src="/assets/images/rating-star<?php echo $rating;?>.png" style="width:110px;">
                                <?php } else { ?>
                                    <small>Not Rated Yet</small>
                                    <img src="/assets/images/rating-star0.png" style="width:110px;">
                                <?php } ?>
                            </td>
                            <td style="vertical-align:middle;" class="text-center">
                                <b>£<?php echo number_format($productprice/7,2);?></b><small>*</small>
                            </td>
                            <td style="vertical-align:middle;" class="text-center"><b>£<?php echo number_format($productprice,2);?></b><small>*</small></td>
                            <td style="vertical-align:middle;" class="text-center"><p>Not Required</p></td>
                            <td style="vertical-align:middle;" class="text-center"><button type="button" class="btn btn-primary btn-sm page-booknow">Book Now</button> </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <?php } ?>
		        </div>
			</div>
		</div>
	</section>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/includes/footer.php");?>
<script>
$(document).ready(function (){
    $(".page-booknow").click(function() {
        $('html, body').animate({
            scrollTop: $(".product-page").offset().top
        }, 2000);
    });
});
</script>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/includes/footerend.php");?>