@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose Class
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Maths</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Prealgebra</a>
    <a class="dropdown-item" href="#">Algebra I</a>
    <a class="dropdown-item" href="#">Algebra II</a>
    <a class="dropdown-item" href="#">Precalculus</a>
    <a class="dropdown-item" href="#">Calc. AB</a>
    <a class="dropdown-item" href="#">Calc. BC</a>
    <a class="dropdown-item" href="#">Statistics</a>
    <a class="dropdown-item" href="#">Multivar Calc.</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">other subjects</a>
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
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Tue 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Wed 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col3"
                                       role="button"
                                       aria-controls="col3">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col3">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col4"
                                       role="button"
                                       aria-controls="col4">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col4">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Thu 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col5"
                                       role="button"
                                       aria-controls="col5">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col5">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col6"
                                       role="button"
                                       aria-controls="col6">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col6">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Fri 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Mon 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Tue 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Wed 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Thu 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Fri 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            <div>
                                <b>World History</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col1"
                                       role="button"
                                       aria-controls="col1">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col1">
                                <p><i class="fas fa-user-graduate"></i> 5</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Mrs. Teacher</p>
                            </div>
                        </div>
                        <div class="test" style="border-color: #123456">
                            <div>
                                <b>Latin</b>
                                <span class="float-right expand">
                                    <a data-toggle="collapse"
                                       href="#col2"
                                       role="button"
                                       aria-controls="col2">
                                        <i class="fas fa-chevron-down"></i>
                                    </a></span>
                            </div>
                            <div class="collapse" id="col2">
                                <p><i class="fas fa-user-graduate"></i> 32</p>
                                <p><i class="fas fa-chalkboard-teacher"></i> Ms. Teacher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
