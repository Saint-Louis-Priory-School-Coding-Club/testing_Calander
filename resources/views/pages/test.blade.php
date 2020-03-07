@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-info-circle"></i> More information
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> <i class="far fa-file-alt"></i> Test / AP Calc. BC / Dr. Dave</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body">
        <h6>Topic(s): Basic Derivation</h6>
        <h6 style="color:#cc0000"><i class="fas fa-exclamation-circle"></i><i> High Importance</i></h6>
        <p>Scheduled for April 20th</p>
        <hr>
        <h6>Teacher Notes:</h6>
        <p>&nbsp;This test concerns the basics of derivation that we have reviewed in class. You will be expected to derive simple expressions while also using the quotient rule, product rule, and chain rule. </p>
        <hr>
        <h6><i class="fas fa-user-graduate"></i> Class Roster:</h6>
        <p>&nbsp;a<br>&nbsp;b<br>&nbsp;c<br>&nbsp;d<br>&nbsp;e</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
@endsection