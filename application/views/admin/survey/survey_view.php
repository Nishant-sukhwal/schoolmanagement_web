<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>
        .main {
            display: block;
            position: relative;
            padding-left: 45px;
            margin-bottom: 15px;
            cursor: pointer;
            font-size: 20px;
        }
          
        /* Hide the default checkbox */
        input[type=checkbox] {
            visibility: hidden;
        }
          
        /* Creating a custom checkbox
        based on demand */
        .geekmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: black;
        }
          
        /* Specify the background color to be
        shown when hovering over checkbox */
        .main:hover input ~ .geekmark {
            background-color: yellow;
        }
          
        /* Specify the background color to be
        shown when checkbox is active */
        .main input:active ~ .geekmark {
            background-color: red;
        }
          
        /* Specify the background color to be
        shown when checkbox is checked */
        .main input:checked ~ .geekmark {
            background-color: green;
        }
          
        /* Checkmark to be shown in checkbox */
        /* It is not be shown when not checked */
        .geekmark:after {
            content: "";
            position: absolute;
            display: none;
        }
          
        /* Display checkmark when checked */
        .main input:checked ~ .geekmark:after {
            display: block;
        }
          
        /* Styling the checkmark using webkit */
        /* Rotated the rectangle by 45 degree and 
        showing only two border to make it look
        like a tickmark */
        .main .geekmark:after {
            left: 8px;
            bottom: 5px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 4px 4px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>

<div class="content-wrapper">

    <!-- Main content -->

    <section class="content">

        <div class="row">

            <!--/.col (right) -->

            <!-- left column -->

            <div class="col-md-12">

                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Survey View</h3>
                        <div class="box-tools pull-right">
                        <!-- <a href="" style="float: left;">All Survey</a> -->
                        <a href="<?php echo base_url('admin/all-survey'); ?>"><button type="submit" class='btn btn-primary' style="float: right;">All Survey</button> </a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->

                    <div class="box-body">

              <div class="col-md-2"></div>

              	

<div class="col-md-10">

<b>Question 1.</b>
    <h1 style="color:green;">
      Best Computer Science Platform
    </h1>
      
    <label class="main">CodeX
        <input type="checkbox">
        <span class="geekmark"></span>
    </label>
      
    <label class="main">fhgjghjghj
        <input type="checkbox" checked="checked">
        <span class="geekmark"></span>
    </label>
      
    <label class="main">CodeY
        <input type="checkbox">
        <span class="geekmark"></span>
    </label>

    <label class="main">hgfjhgjgjgh
        <input type="checkbox">
        <span class="geekmark"></span>
    </label>

    <label class="main">ghdgjhgjh
        <input type="checkbox">
        <span class="geekmark"></span>
    </label>

</div>





                    </div><!-- /.box-body -->

                </div>

            </div><!--/.col (left) -->

            <!-- right column -->

        </div>



    </section><!-- /.content -->

</div>

