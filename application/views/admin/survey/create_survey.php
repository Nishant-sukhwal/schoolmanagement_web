<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">

    .versionup{font-size: 16px;}

    .versionup span{display: block;}

    .upgradeup{}

    .update-list li h5{font-family:'Roboto-Medium';}

    .upgradeup h4, .upgradeup h5{font-family:'Roboto-Bold';}

    .update-list{padding: 0; margin: 0;}

    .update-list li{list-style: none;}

    #title{
      border: 1px solid lightgray;
      border-radius: 5px;
      padding: 20px;
      border-top: 5px solid black;
    }
    #title1{
      border: 1px solid lightgray;
      border-radius: 5px;
      padding: 20px;
      border-left: 5px solid black;
        min-height: 100px;
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
                        <h3 class="box-title titlefix">Create Survey</h3>
                        <div class="box-tools pull-right">
                        <!-- <a href="" style="float: left;">All Survey</a> -->
                        <a href="<?php echo base_url('admin/all-survey'); ?>"><button type="submit" class='btn btn-primary' style="float: right;">All Survey</button> </a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->

                    <div class="box-body">

              <div class="col-md-2"></div>

          <form class="form" action="<?php echo base_url('admin/savingdata'); ?>" method="post" enctype="multipart/form-data">
              <div class="col-md-8">

                <div class="form-group" id="title">
                      <input type="text" name="survey_title" placeholder="Survey Title" class="form-control" /><br>
                      <textarea class="form-control" name="survey_discription" placeholder="Survey Description"></textarea>

                                          <!-- <label for="exampleInputEmail1"><?php echo $this->lang->line('title'); ?></label><small class="req"> *</small> -->
                                          <!-- <input autofocus="" id="title" name="title" placeholder="" type="text" class="form-control"  value="<?php echo set_value('title'); ?>" /> -->
                                          <!-- <span class="text-danger"><?php echo form_error('title'); ?></span> -->
                              </div>


<div id="temp">
                <div class="form-group title1" id="title1">

                            <div class="container1">
                              <div class="col-md-12">
                                <div class="col-md-8">
                                    <input type="text" name="question" placeholder="Question" class="form-control" />
                                    </div>
                                    <div class="col-md-4">
                                    <select name="" class="form-control" id="chkShowPassword">
                                      <option value="Multiple choice">Multiple choice</option>
                                      <option value="Checkboxes">Checkboxes</option>
                                      <option value="Radio">Radio</option>
                                      <!-- <option value="File upload">File upload</option> -->
                                    </select>
                                    </div>
                                </div><br><br><br>

                             <div class='element' id='div_1'>
                                <span>
                                    <input type='radio' id='txt_2'>
                                  <input type='text' placeholder='Option' name="options[]" id='txt_1' >&nbsp;<br><br>
                               </span>
                             </div>
                            </div>

                           <span id='add' class='btn btn-primary add'>Add Option</span>

              </div>     
</div>

              <span class="new_div"></span>


            <span class='btn btn-primary add_q' title="Add Question">Add Question</span>

            <button type="submit" class='btn btn-primary' style="float: right;">Submit</button> 
 


              </div>
              


              <div class="col-md-2">

                                <div class="">


                                        <div class="form-horizontal">

                                            <label for="exampleInputEmail1">Assign To</label>

                                            <div class="checkbox">

                                                <label><input type="checkbox" name="visible[]" value="student" <?php echo set_checkbox('visible[]', 'student', false) ?> /> <b><?php echo $this->lang->line('student'); ?></b> </label>

                                            </div>

                                            <div class="checkbox">

                                                <label><input type="checkbox" name="visible[]"  value="parent" <?php echo set_checkbox('visible[]', 'parent', false) ?> /> <b><?php echo $this->lang->line('parent'); ?></b></label>

                                            </div>

                                             <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]"  value="Teacher" <?php echo set_checkbox('visible[]', 'Teacher', false) ?> /> Teacher</b></label>
                                            </div>

                                              <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]"  value="Accountant" <?php echo set_checkbox('visible[]', 'Accountant', false) ?> /> Accountant</b></label>
                                            </div>

                                              <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]"  value="Librarian" <?php echo set_checkbox('visible[]', 'Librarian', false) ?> /> Librarian</b></label>
                                            </div>

                                               <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]"  value="Receptionist" <?php echo set_checkbox('visible[]', 'Receptionist', false) ?> /> Receptionist</b></label>
                                            </div>

                                             <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]"  value="Receptionist" <?php echo set_checkbox('visible[]', 'Receptionist', false) ?> /> Receptionist</b></label>
                                            </div>

                                             <div class="checkbox">
                                                <label><input type="checkbox" name="visible[]"  value="Super Admin" <?php echo set_checkbox('visible[]', 'Super Admin', false) ?> /> Super Admin</b></label>
                                            </div>

                                        </div>
                                    </div>   

                            </div>
                            
          </form>

                    </div><!-- /.box-body -->

                </div>

            </div><!--/.col (left) -->

            <!-- right column -->

        </div>

 
<script type="text/javascript">
$(document).ready(function(){

 // Add new element
 $(".add").click(function(){

  // Finding total number of elements added
  var total_element = $(".element").length;
 
  // last <div> with element class id
  var lastid = $(".element:last").attr("id");
  var split_id = lastid.split("_");
  var nextindex = Number(split_id[1]) + 1;

  var max = 5;
  // Check total number elements
  if(total_element < max ){
   // Adding new div container after last occurance of element class
   $(".element:last").after("<div class='element' id='div_"+ nextindex +"'></div>");
 
   // Adding element to <div>
   $("#div_" + nextindex).append("<input type='radio'>&nbsp;<input type='text' name='options[]' placeholder='Option' id='txt_"+ nextindex +"'>&nbsp;<span id='remove_" + nextindex + "' class='remove'>X</span><br><br>");
  }
 
 });

 // Remove element
 $('.container1').on('click','.remove',function(){
 
  var id = this.id;
  var split_id = id.split("_");
  var deleteindex = split_id[1];

  // Remove <div> with id
  $("#div_" + deleteindex).remove();

 }); 
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
    var template = $('#temp').html();
    // alert(template);
    $("#btn1").click(function(){
         // alert('okk1');
        // $(".list-items").append("<b></b>");
        $('.list-items').append(template);
    });

    $("#remove_li").click(function(){  
        $(".list-items:last").remove();
    });

});

</script>


<script type="text/javascript">
  $('#chkShowPassword').on('change', function() { 
  var val = this.value;
  // var val1 = $("#chkShowPassword").val();
  // var b = chkShowPassword.type = val1;
  // var result = b.toLowerCase();
  // alert(val);

  if(val == 'Checkboxes'){
        $('.form #title1').find('input:radio').each(function() {
       $("<input type='checkbox' />").attr({ name: this.name, value: this.value }).insertBefore(this);
    }).remove();
  }if(val == 'Radio'){
        $('.form #title1').find('input:checkbox').each(function() {
       $("<input type='radio' />").attr({ name: this.name, value: this.value }).insertBefore(this);
    }).remove();
  }
 


  console.log(val1);
});
</script>


    </section><!-- /.content -->

</div>


<script type="text/javascript">
    $(document).ready(function(){
    var template = $('#temp').html();
    // alert(template);
    $(".add_q").click(function(){
         // alert('okk1');
        // $(".list-items").append("<b></b>");
        $('.new_div').append(template);
    });

    $("#remove_li").click(function(){
        $(".list-items:last").remove();
    });

});

</script>