<div id="wrapper">
    @include('poi.map', ['url' => '/region/geo/'.$region['_id']])

    <div id="content" class="mob-max">
        <div class="singleTop">
            @include('poi.region.carousel')

            <div class="summary">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="summaryItem">
                            <h1 class="pageTitle">{{ $region['name'] }}</h1>
                            <div class="address"><span class="icon-pointer"></span></div>
                            <ul class="rating">
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o"></span></a></li>
                                <li>(146)</li>
                            </ul>
                            <div class="favLink"><a href="#"><span class="icon-heart"></span></a>54</div>
                            <ul class="stats">
                                <li><span class="icon-eye"></span> 200</li>
                                <li><span class="icon-bubble"></span> 13</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="description" ng-controller="WikipediaController" data-ng-init="retrieve('{{ $region['name'] }}')">
            <h3>ΠΛΗΡΟΦΟΡΙΕΣ</h3>
            <p>[[| introduction |]]</p>
        </div>
        <div class="share">
            <h3>ΜΟΙΡΑΣΟΥ ΤΟ</h3>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span> Facebook</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span> Twitter</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-google"><span class="fa fa-google-plus"></span> Google+</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                    <a href="#" class="btn btn-sm btn-round btn-o btn-pinterest"><span class="fa fa-instagram"></span> Instagram</a>
                </div>
            </div>
        </div>
        <div class="amenities" ng-controller="FoursquareController" data-ng-init="retrieve('thraki')">
            <h3>FOURSQUARE</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" ng-repeat="venue in foursquareData['response']['venues']">
                	<a href="" class="card">
				        <div class="figure">
				            <img height="192" src="https://scontent-fra3-1.cdninstagram.com/hphotos-xaf1/t51.2885-15/e35/11248726_1463439890629954_875741758_n.jpg" alt="image">
				            <div class="figCaption">
				                <div>$1,550,000</div>
				                <span class="icon-eye"> 200</span>
				                <span class="icon-heart"> 54</span>
				                <span class="icon-bubble"> 13</span>
				            </div>
				            <div class="figView"><span class="icon-eye"></span></div>
				            <div class="figType"></div>
				        </div>
				        <h2>[[| venue.name |]]</h2>
				        <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA</div>
				        <div class="cardRating">
				            <span class="fa fa-star"></span>
				            <span class="fa fa-star"></span>
				            <span class="fa fa-star"></span>
				            <span class="fa fa-star"></span>
				            <span class="fa fa-star-o"></span>
				            (146)
				        </div>
				        <ul class="cardFeat">
				            <li><span class="fa fa-moon-o"></span> 3</li>
				            <li><span class="icon-drop"></span> 2</li>
				            <li><span class="icon-frame"></span> 3430 Sq Ft</li>
				        </ul>
				        <div class="clearfix"></div>
				    </a>
                	
                </div>
            </div>
        </div>
         @include('vendor.widget.results', ['base' => 'county', 'paginate' => false, 'title' => 'ΔΗΜΟΤΙΚΕΣ ΕΝΟΤΗΤΕΣ'])
        <div class="clearfix"></div>
    </div>

    <div class="modal fade" id="contactAgent" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="contactLabel">Contact Agent</h4>
                </div>
                <div class="modal-body">
                    <form class="contactForm">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cfItem">
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
                                <input type="text" placeholder="Subject" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cfItem">
                                <textarea placeholder="Message" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-round btn-o btn-gray">Close</a>
                    <a href="#" class="btn btn-round btn-green isThemeBtn">Send message</a>
                </div>
            </div>
        </div>
    </div>
</div>