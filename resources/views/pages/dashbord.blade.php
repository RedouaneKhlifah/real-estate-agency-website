<x-dasboard>

            <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                <div class="col-lg-12 mobile-dashbord dashbord"></div>
                <div class="dashborad-box stat bg-white">
                    <h4 class="title">Manage Dashboard</h4>
                    <div class="section-body">
                        <div class="row">
                            <div
                                class="col-lg-3 col-md-6 col-xs-12 dar pro m-0"
                            >
                                <div class="item">
                                    <div class="icon">
                                        <i
                                            class="fa fa-list"
                                            aria-hidden="true"
                                        ></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="number">
                                            {{$PublishedProperties}}
                                        </h6>
                                        <p class="type ml-1">
                                            Published Property
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 dar booked m-0">
                                <div class="item mb-0">
                                    <div class="icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="number">{{$totalLikes}}</h6>
                                        <p class="type ml-1">
                                            Times Bookmarked
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- START FOOTER -->
            </div>

        </x-dasboard>

