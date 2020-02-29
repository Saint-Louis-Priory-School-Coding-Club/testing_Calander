@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
    <div class="container-fluid">
        <div class="calander">
            <div class="row border">
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Mon 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b><span class="float-right expand"><a data-toggle="collapse"
                                                                                        href="#collapseExample"
                                                                                        role="button"
                                                                                        aria-controls="collapseExample"><i
                                            class="fas fa-chevron-down"></i></a></span>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <div class="test" style="border-color: #9012a5">
                            <b>Latin</b>
                        </div>
                        <div class="test" style="border-color: #0f6674">
                            <b>World History</b>
                        </div>
                        <div class="test" style="border-color: #9012a5">
                            <b>Latin</b>
                        </div>
                        <div class="test" style="border-color: #0f6674">
                            <b>World History</b>
                        </div>
                        <div class="test" style="border-color: #9012a5">
                            <b>Latin</b>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Tue 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Wed 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Thu 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Fri 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Mon 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Tue 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Wed 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Thu 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Fri 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
