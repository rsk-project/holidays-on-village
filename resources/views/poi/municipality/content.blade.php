<div id="wrapper">
    @include('poi.map', ['url' => '/municipality/geo/'.$municipality['_id']])


    <div id="content" class="mob-max">
        <div class="singleTop">
            @include('poi.municipality.carousel')

            <div class="summary">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="summaryItem">
                            <h1 class="pageTitle"><a href="/county/{{ $municipality['county_id'] }}">{{ $county['name'] }}</a> / {{ $municipality['name'] }}</h1>
                            <div class="address"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA</div>
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
                            <ul class="features">
                                <li><span class="fa fa-moon-o"></span><div>2 Bedrooms</div></li>
                                <li><span class="icon-drop"></span><div>2 Bathrooms</div></li>
                                <li><span class="icon-frame"></span><div>2750 Sq Ft</div></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="agentAvatar summaryItem">
                            <div class="clearfix"></div>
                            <img class="avatar agentAvatarImg" src="images/avatar-2.png" alt="avatar">
                            <div class="agentName">Jane Smith</div>
                            <a data-toggle="modal" href="#contactAgent" class="btn btn-lg btn-round btn-green contactBtn isThemeBtn">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="description" ng-controller="WikipediaController" data-ng-init="retrieve('{{ $municipality['name']}}')">
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
                    <a href="https://foursquare.com/v/[[| venue.name |]]/[[| venue.id |]]" class="card">
                        <div class="figure">
                            <img height="192" src="[[| getStreet(venue.location.lat, venue.location.lng) |]]" align="image">
                            <div class="figCaption">
                                <div>[[| venue.hereNow.summary |]]</div>
                                {{-- <span class="icon-eye"> 200</span>
                                <span class="icon-heart"> 54</span> --}}
                                <span class="icon-bubble"> [[| venue.hereNow.count |]]</span>
                            </div>
                            <div class="figView"><span class="icon-eye"></span></div>
                            <div class="figType">[[| venue.categories[0].name |]]</div>
                        </div>
                        <h2>[[| venue.name |]]</h2>
                        <div class="cardAddress"><span class="icon-pointer"></span> [[| venue.location.formattedAddress.join(" ") |]]</div>
                        {{-- <div class="cardRating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-o"></span>
                            (146)
                        </div> --}}
                        <ul class="cardFeat">
                            <li><span class="fa fa-moon-o"></span> [[| venue.stats.checkinsCount |]]</li>
                            <li><span class="icon-drop"></span>  [[| venue.stats.usersCount |]]</li>
                            <li><span class="icon-frame"></span>  [[| venue.stats.tipCount |]]</li>
                        </ul>
                        <div class="clearfix"></div>
                    </a>                    
                </div>
            </div>
        </div>
        @include('vendor.widget.results', ['base' => 'village', 'paginate' => false])
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