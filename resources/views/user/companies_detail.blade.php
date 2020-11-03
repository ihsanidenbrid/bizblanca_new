<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bizblanca | Companies</title>

    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

</head>
<style type="text/css">
    table.shoping-cart-table tr td {
    border: none;
    text-align: left;
    padding-top: 20px;
    padding-right: 32px;
}

</style>
<body>

    <div id="wrapper">

<?php echo $header;?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Companies list</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <strong>Companies list</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content animated fadeInRight">

                     
                        <div class="ibox-content">


                            <div class="table-responsive">
                                <table class="table shoping-cart-table">
                                <thead>
                                    <th></th>
                                    <th></th>
                                    <th>Sales</th>
                                    <th>Social Link</th>
                                    <th>Product</th>
                                    <th>Employees</th>
                                    <th>Industry</th>
                                    <th>Action</th>
                                </thead>
                                 @foreach($company_data as $row)
                                    <tbody>
                                    
                                    <tr>
                                        <td width="90">
                                            <div class="">
                                            <img src="{{asset('assets/storage/'.$row->company_pic1)}}" width="100px" height="100px">
                                            </div>
                                        </td>
                                        <td class="desc">
                                            <h3>
                                            <a href="#" class="text-navy">
                                                {{$row->company_title}}
                                            </a>
                                            </h3>
                                            <p class="small">
                                               <span>Summary:</span> {{$row->company_summary}}
                                            </p>
                                            <dl class="small m-b-none">
                                                <dt>CEO</dt>
                                                <dd>{{$row->company_ceo}}</dd>
                                            </dl>

                                            <div class="m-t-sm">
                                                <a href="#" class="text-muted"><i class="fa fa-phone"></i> {{$row->company_phone}}</a>
                                                |
                                                <a href="#" class="text-muted"><i class="fa fa-envelope-o"></i> {{$row->company_email}}</a>
                                                |
                                                <a href="#" class="text-muted"><i class="fa fa-map-marker"></i> {{$row->company_location}}</a>
                                                |
                                                <a href="#" class="text-muted"><i class="fa fa-globe"></i> {{$row->company_website}}</a>
                                            </div>
                                        </td>
                                         <td>
                                            <span>{{ number_format($row->company_sales,0)}}PKR.</span>
                                        </td>
                                        <td>
                                            <span><a href="{{$row->company_fblink}}" target="_blank"><i class="fa fa-facebook-square" style="font-size: 25px;"></i></a></span>
                                        </td>
                                         <td>
                                            <span>{{$row->company_mainproduct}}</span>
                                        </td>
                                        <td>
                                           
                                            <span>Total: {{$row->company_employees}}</span>
                                        </td>
                                       
                                        <td>
                                            <span>{{$row->company_insustry}}</span>
                                        </td>
                                       <td><a href="#" class="btn btn-sm">View</a></td>
                                    </tr>
                                    
                                    </tbody>
                                     @endforeach
                                </table>
                            </div>

                        </div>
                        

                    </div>
                </div>
            </div>
       <?php echo $footer;?>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="{{asset('assets')}}/js/jquery-2.1.1.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{asset('assets')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('assets')}}/js/inspinia.js"></script>
    <script src="{{asset('assets')}}/js/plugins/pace/pace.min.js"></script>


</body>

</html>
