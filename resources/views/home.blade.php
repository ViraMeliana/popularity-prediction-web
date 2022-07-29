@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4">
                <div class="card-header position-relative  align-items-center" style="background-color: #E1B14A">
                    <h3 class="text-white mb-4 text-center d-flex justify-content-center">Multi Layer Perceptron</h3>
                </div>
                <div class="card-body row text-center">
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Accuracy</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Precision</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Recall</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4">
                <div class="card-header position-relative  align-items-center bg-warning"  style="background-color: #E1654A">
                    <h3 class="text-white mb-4 text-center d-flex justify-content-center">Random Forest</h3>
                </div>
                <div class="card-body row text-center">
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Accuracy</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Precision</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Recall</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4">
                <div class="card-header position-relative  align-items-center" style="background-color: #8361F1">
                    <h3 class="text-white mb-4 text-center d-flex justify-content-center">Multi Layer Perceptron Manual</h3>
                </div>
                <div class="card-body row text-center">
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Accuracy</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Precision</div>
                    </div>
                    <div class="vr"></div>
                    <div class="col">
                        <h4 class="fs-5 fw-semibold">Accuracy</h4>
                        <div class="text-uppercase text-medium-emphasis small">Recall</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
