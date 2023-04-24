<x-dasboard>


            <div
                class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2"
            >
                <form action="/addproperty" method="POST" enctype="multipart/form-data" >

                @csrf
                <div class="single-add-property">
                    <h3>Property description and price</h3>
                    <div class="property-form-group">

                        
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="m-0">
                                        <label for="title"
                                            >Property Title</label
                                        >
                                        <input
                                            type="text"
                                            name="title"
                                            id="title"
                                            placeholder="Enter your property title"
                                        />
                                    </p>

                                {{-- error --}}
                                @error('title')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description"
                                            >Property Description</label
                                        >
                                        <textarea
                                            id="description"
                                            name="description"
                                            placeholder="Describe about your property"
                                        ></textarea>

                                {{-- error --}}
                                @error('description')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label for="area">type</label>
                                    <select name="type" id="type">
                                        <option value="House">House</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Garage">Garage</option>
                                    </select>

                                    {{-- error --}}
                                @error('type')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label for="area">Rooms</label>
                                    <select name="rooms" id="type">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>

                                    {{-- error --}}
                                @error('Rooms')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                                
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb">
                                        <label for="price">Price</label>
                                        <input
                                            type="number"
                                            name="price"
                                            placeholder="USD"
                                            id="price"
                                        />
                                    </p>

                                    {{-- error --}}
                                @error('price')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="area">Area</label>
                                        <input
                                            type="number"
                                            name="area"
                                            placeholder="Sqft"
                                            id="area"
                                        />
                                    </p>

                                {{-- error --}}
                                @error('area')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                </div>
                            </div>
                        


                    </div>
                </div>
                <div class="single-add-property">
                    <h3>property Media</h3>

                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="mulitiple_images" class="w-100">
                                <div class="dropzone" >
                                    <div class="aploadInsideConatiner">         
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                        <span>Click Here Or Drop Files To Upload</span>
                                    </div>
                                </div>
                                </label>
                                <input
                                type="file"
                                name="images[]"
                                multiple
                                id="mulitiple_images"
                                class="mulitiple_images"
                                hidden
                               
                            />
                            
                            <div class="imagezone" style="    padding-top: 30px;
                            display: flex;
                            flex-wrap: wrap;
                            GAP: 30PX;">
                              
                            </div>
                            {{-- error --}}
                            @error('images')
                            <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                            @enderror
                            {{-- end error --}}

                            </div>
                        </div>
                    </div>


                </div>
                <div class="single-add-property">
                    <h3>property Location</h3>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="address">Address</label>
                                    <input
                                        type="text"
                                        name="address"
                                        placeholder="Enter Your Address"
                                        id="address"
                                    />
                                </p>
                                {{-- error --}}
                                @error('address')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="city">City</label>
                                    <input
                                        type="text"
                                        name="city"
                                        placeholder="Enter Your City"
                                        id="city"
                                    />
                                </p>

                                {{-- error --}}
                                @error('city')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="state">State</label>
                                    <input
                                        type="text"
                                        name="state"
                                        placeholder="Enter Your State"
                                        id="state"
                                    />
                                </p>

                                {{-- error --}}
                                @error('state')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>
                                    <label for="country">Neighborhood</label>
                                    <input
                                        type="text"
                                        name="neighborhood"
                                        placeholder="Enter Your Neighborhood"
                                        id="country"
                                    />
                                </p>

                                {{-- error --}}
                                @error('neighborhood')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <h3>Extra Information</h3>
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <label for="area">Age</label>
                                <select name="Age" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                                {{-- error --}}
                                @error('Age')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="area">beds</label>
                                <select name="beds" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                                {{-- error --}}
                                @error('beds')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <label for="area">BathRooms</label>
                                <select name="bathRooms" id="type">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>

                                {{-- error --}}
                                @error('bathRooms')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <h3>Property Features</h3>

                    
                    <div class="property-form-group">
                        <div class="row">
                            <div class="col-md-12">

                                {{-- error --}}
                                @error('Features')
                                <p class="text-danger mt-2" style="font-weight : 500"> {{$message}} </p>
                                @enderror
                                {{-- end error --}}

                                <ul class="pro-feature-add pl-0">
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-a"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Air Conditioning"
                                                />
                                                <label for="check-a"
                                                    >Air Conditioning</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-b"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Swimming Pool"
                                                />
                                                <label for="check-b"
                                                    >Swimming Pool</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-c"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Central Heating"
                                                />
                                                <label for="check-c"
                                                    >Central Heating</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-d"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Laundry Room"
                                                />
                                                <label for="check-d"
                                                    >Laundry Room</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-e"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Gym"
                                                />
                                                <label for="check-e">Gym</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-h"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Window Covering"
                                                />
                                                <label for="check-h"
                                                    >Window Covering</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-i"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Refrigerator"
                                                />
                                                <label for="check-i"
                                                    >Refrigerator</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-j"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="TV Cable & WIFI"
                                                />
                                                <label for="check-j"
                                                    >TV Cable & WIFI</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                    <li class="fl-wrap filter-tags clearfix">
                                        <div class="checkboxes float-left">
                                            <div class="filter-tags-wrap">
                                                <input
                                                    id="check-k"
                                                    type="checkbox"
                                                    name="Features[]"
                                                    value="Microwave"
                                                />
                                                <label for="check-k"
                                                    >Microwave</label
                                                >
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-add-property">
                    <div class="property-form-group">
                    </div>
                    <div class="add-property-button pt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="prperty-submit-button">
                                    <button type="submit">
                                        Submit Property
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            </div>
        </div>
    </div>
</section>


<script src="{{url('assets/js/addproperty.js')}}"></script>


</x-dasboard>