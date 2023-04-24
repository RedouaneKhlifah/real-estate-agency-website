

<x-dasboard>



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


<script src="{{url('assets/js/admin.js')}}"></script>

        </x-dasboard>

