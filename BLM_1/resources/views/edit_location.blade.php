@extends('layouts.app')

@section('content')


<ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
    <li class="nav-item">
        <a href="#add" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
            <i class="mdi mdi-home-variant d-md-none d-block"></i>
            <span class="d-none d-md-block">Add</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#remove" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
            <i class="mdi mdi-account-circle d-md-none d-block"></i>
            <span class="d-none d-md-block">Remove</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane" id="add">


        <div class="tab-content">
            <div class="tab-pane show active" id="input-types-preview">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Site Name</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Address No.</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>                            

                        </form>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <form>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Street Name</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="example-select">Town/City</label>
                                <select class="form-control" id="example-select">
                                    <option>--Select Town/City--</option>                                                                        
                                    <option>Attard</option>
                                    <option>Balzan</option>
                                    <option>Bidnija</option>
                                    <option>Birgu</option>
                                    <option>Birkirkara</option>
                                    <option>Birżebbuġa</option>
                                    <option>Bormla</option>
                                    <option>Fgura</option>
                                    <option>Furjana</option>
                                    <option>Għargħur</option>
                                    <option>Għaxaq</option>
                                    <option>Gudja</option>
                                    <option>Gżira</option>
                                    <option>Ħamrun</option>
                                    <option>Iklin</option>
                                    <option>Kalkara</option>
                                    <option>Kirkop</option>
                                    <option>Lija</option>
                                    <option>Luqa</option>
                                    <option>Marsa</option>
                                    <option>Marsaskala</option>
                                    <option>Marsaxlokk</option>
                                    <option>Mdina</option>
                                    <option>Mellieħa</option>
                                    <option>Mġarr</option>
                                    <option>Mosta</option>
                                    <option>Mqabba</option>
                                    <option>Msida</option>
                                    <option>Imtarfa</option>
                                    <option>Naxxar</option>
                                    <option>Paola</option>
                                    <option>Pembroke</option>
                                    <option>Pietà</option>
                                    <option>Qormi</option>
                                    <option>Qrendi</option>
                                    <option>Rabat, Malta</option>
                                    <option>Safi</option>
                                    <option>San Ġwann</option>
                                    <option>Santa Luċija</option>
                                    <option>Santa Venera</option>
                                    <option>Isla</option>
                                    <option>Siġġiewi</option>
                                    <option>Sliema</option>
                                    <option>Ġiljan</option>
                                    <option>San Pawl il-Baħar</option>
                                    <option>Swieqi</option>
                                    <option>Tarxien</option>
                                    <option>Ta' Xbiex</option>
                                    <option>Valletta</option>
                                    <option>Xgħajra</option>
                                    <option>Żabbar</option>
                                    <option>Żebbuġ</option>
                                    <option>Żejtun</option>
                                    <option>Żurrieq</option>
                                    <option>Fontana</option>
                                    <option>Għajnsielem</option>
                                    <option>Għarb</option>
                                    <option>Għasri</option>
                                    <option>Kerċem</option>
                                    <option>Munxar</option>
                                    <option>Nadur</option>
                                    <option>Qala</option>                                    
                                    <option>San Lawrenz</option>
                                    <option>Sannat</option>
                                    <option>Victoria</option>
                                    <option>Xagħra</option>
                                    <option>Xewkija</option>
                                    <option>Żebbuġ</option>
                                </select>
                            </div>
                            
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->                      
            </div> <!-- end preview-->
        
            <div class="card-body">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>

            <div class="card-body">
                <button type="button" onclick="window.location='{{ url("/admin") }}'" class="btn btn-primary" >Return to Admin Page</button>            
            </div>
        </div>

    </div>
    <div class="tab-pane show active" id="remove">
        <select class="custom-select custom-select-lg mb-3">
            <option selected>--Select Locality--</option>
            <option value="1">Salina</option>
            <option value="2">Simar</option>
            <option value="3">Għadira</option>
            <option value="1">Foresta 2000</option>
            <option value="2">Ximenes</option>
            <option value="3">Comino</option>
            <option value="1">Office</option>
        </select>

        <div class="card-body">
            <button type="button" class="btn btn-primary">Remove</button>            
        </div>

        {{-- <div class="card-body">
            <button type="button" onclick="window.location='{{ url("/admin") }}'" class="btn btn-primary" >Return to Admin Page</button>            
        </div> --}}

        <div class="card-body">
            <button type="button" onclick="window.location='{{ url("/admin") }}'" class="btn btn-primary" >Return to Admin Page</button>            
        </div>


        {{-- @include('return_to_admin-page.blade.php') --}}

    </div>
</div>


@endsection




@section('footer')


@endsection

</body>
</html>