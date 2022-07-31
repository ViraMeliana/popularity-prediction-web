@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4">
                    <div class="card-header position-relative  align-items-center" style="background-color: #E1B14A">
                        <h3 class="text-white mb-4 text-center d-flex justify-content-center">Multi Layer
                            Perceptron</h3>
                    </div>
                    <div class="card-body row text-center">
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">76%</h4>
                            <div class="text-uppercase text-medium-emphasis small">Precision</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">75%</h4>
                            <div class="text-uppercase text-medium-emphasis small">Recall</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">76%</h4>
                            <div class="text-uppercase text-medium-emphasis small">F1 Score</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4">
                    <div class="card-header position-relative  align-items-center bg-warning"
                         style="background-color: #E1654A">
                        <h3 class="text-white mb-4 text-center d-flex justify-content-center">Random Forest</h3>
                    </div>
                    <div class="card-body row text-center">
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">66%</h4>
                            <div class="text-uppercase text-medium-emphasis small">Precision</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">80%</h4>
                            <div class="text-uppercase text-medium-emphasis small">Recall</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">73%</h4>
                            <div class="text-uppercase text-medium-emphasis small">F1 Score</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4">
                    <div class="card-header position-relative  align-items-center" style="background-color: #8361F1">
                        <h3 class="text-white mb-4 text-center d-flex justify-content-center">Multi Layer Perceptron
                            Manual</h3>
                    </div>
                    <div class="card-body row text-center">
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">77%</h4>
                            <div class="text-uppercase text-medium-emphasis small">Precision</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">74%</h4>
                            <div class="text-uppercase text-medium-emphasis small">Recall</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <h4 class="fs-5 fw-semibold">75%</h4>
                            <div class="text-uppercase text-medium-emphasis small">F1 Score</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <div class="row">
            <div class=" col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Comparison Methods based on Accuracy
                    </div>
                    <div class="card-body">
                        <div class="c-chart-wrapper">
                            <canvas id="canvas-2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-lg-6">

                <div class="card">
                    <div class="card-header">
                        K-Fold Cross Validation
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>
                                    Model
                                </th>
                                <th>
                                    Fold-1
                                </th>
                                <th>
                                    Fold-2
                                </th>
                                <th>
                                    Fold-3
                                </th>
                                <th>
                                    Fold-4
                                </th>
                                <th>
                                    Fold-5
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <th>Library MLP</th>
                                <th>0.56</th>
                                <th><b>0.67</b></th>
                                <th>0.61</th>
                                <th>0.49</th>
                                <th>0.57</th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>Random Forest</th>
                                <th>0.55</th>
                                <th>0.54</th>
                                <th>0.52</th>
                                <th>0.50</th>
                                <th><b>0.59</b></th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>Manual MLP</th>
                                <th>0.5</th>
                                <th>0.58</th>
                                <th><b>0.61</b></th>
                                <th>0.53</th>
                                <th>0.48</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <script src="{{ asset('js/charts.js') }}"></script>
@endsection
