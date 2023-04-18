
@extends('layouts.htmlContainer') @section('content')

<section class="user-page section-padding mt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                <div class="user-profile-box mb-0">
                    <div class="sidebar-header">
                        <img
                            src="{{url('assets/img/icons/logo.png')}}"
                            alt="header-logo2.png"
                        />
                    </div>
                    <div class="header clearfix">
                        <img
                            
                            src="{{ url('assets/img/users/' . $user->profile_Image) }}"
                            alt="avatar"
                            class="img-fluid profile-img"
                        />
                    </div>
                    <div class="active-user">
                        <h2 class="userName">Mohamed Osalh</h2>
                    </div>
                    <div class="detail clearfix">
                        <ul class="mb-0">
                            <li>
                                <a href="/dashboard">
                                    <i class="fa fa-map-marker"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a
                                   
                                    href="/addproperty"
                                >
                                    <i class="fa fa-list" aria-hidden="true"></i
                                    >Add Property
                                </a>
                            </li>
                            <li>
                                <a  class="active" href="/Myproperties">
                                    
                                    <i class="fa fa-list" aria-hidden="true"></i
                                    >My Properties
                                </a>
                            </li>
                            <li>
                                <a href="Favourites">
                                    <i
                                        class="fa fa-heart"
                                        aria-hidden="true"
                                    ></i
                                    >Favorited Properties
                                </a>
                            </li>

                            <li>
                                <a href="/profile">
                                    <i class="fa fa-user"></i>Profile
                                </a>
                            </li>

                            <li>
                                <a href="change-password.html">
                                    <i class="fa fa-lock"></i>Change Password
                                </a>
                            </li>
                            <li>
                                <a href="/logout">
                                    <i class="fas fa-sign-out-alt"></i>Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2" style="width: 74%;">

                <div class="my-properties">
                    <table class="table-responsive">
                        <thead>

                          
                            <tr>
                                <th class="pl-2">My Properties</th>
                                <th class="p-0"></th>
                                <th>Date Added</th>
                                <th class="text-center">Actions</th>
                            </tr>
                           

                        </thead>
                        <tbody>

                         {{-- box propertiy --}}

                         @foreach ($properties as $property)
                             
                         
                            <tr>
                                <td class="image myelist">
                                    <a href="single-property-1.html"><img alt="my-properties-3" src="assets/img/uploads/{{$property->PropertyImage[0]->image}}" class="img-fluid"></a>
                                    
                                </td>
                                <td>
                                    <div class="inner">
                                        <a href="single-property-1.html"><h2> {{$property->title}} </h2></a>
                                        <figure><i class="lni-map-marker"></i> {{$property->address}} </figure>
                                        <ul class="starts text-left mb-0 list-unstyled d-flex gap-3">
                                            <li class="mb-0"><i class="fa fa-star" style="color:#ffc107"></i>
                                            </li>
                                            <li class="ml-3 pl-10">(6 Reviews)</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>08.14.2020</td>
                                <td class="actions text-center">
                                    <button class="border-0 {{$property->status ?'bg-success':'bg-danger'}} text-white statusBtn"  style="    width: 100px; height: 30px; border-radius:20px" data-id="{{$property->id}}">{{$property->status ?'Valid':'Pending'}}</button>
                                </td>
                            </tr> 

                            @endforeach
                            
                        {{-- end of box property --}}
                        </tbody>
                    </table>
                    <div class="pagination-container">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <!-- Display Previous button with link to previous page -->
                                    @if($properties->currentPage() > 1)
                                        <a class="btn btn-common" href="{{ $properties->previousPageUrl() }}">
                                            <i class="lni-chevron-left"></i> Previous
                                        </a>
                                    @endif
                                </li>
                                <!-- Display page number links -->
                                @for($i = 1; $i <= $properties->lastPage(); $i++)
                                    <li class="page-item">
                                        <a class="page-link" @if($properties->currentPage() == $i) style="background: #ff385c; color:white" @endif href="{{ $properties->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item">
                                    <!-- Display Next button with link to next page -->
                                    @if($properties->currentPage() < $properties->lastPage())
                                        <a class="btn btn-common" href="{{ $properties->nextPageUrl() }}">
                                            Next <i class="lni-chevron-right"></i>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

          
        </div>
    </div>
</section>


<script src="{{url('assets/js/admin.js')}}"></script>



@endsection