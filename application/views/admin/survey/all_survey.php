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




@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap');

*,:after,:before {
  box-sizing:border-box;
  margin: 0; padding: 0;
  /*font-family: 'Roboto', sans-serif;*/
}

ul {
  list-style: none;
}

#tabs {
  display: flex;
  flex-direction: column;
}

#tabs blockquote {
  padding: 0 0.85rem;
  border-left: 0.2em solid #6c7d8d;
  margin: 0.5rem 0 1rem;
  color: #6c7d8d;
}

#tabs > [role="tablist"] {
  display: flex;
  background-color: #eeeeee;
  border-bottom: solid 0.125rem #e5e5e5;
}

#tabs > [role="tablist"] > [role="tab"] {
  display: flex;
  align-items: center;
  margin: 0 0 -0.125rem;
  border-right: solid 1px #d8d8d8;
  border-left: solid 1px #f9f9f9;
  border-bottom: solid 0.125rem transparent;
  padding: 0.5rem 1.5rem;
  height: 3rem;
}
  
#tabs > [role="tablist"] > [role="tab"]:is([aria-selected="true"]) {
  border-bottom: solid 0.125rem #58acdc;
  cursor: not-allowed;
}

#tabs > [role="tablist"] > [role="tab"]:hover:is([aria-selected="false"]) {
  cursor: pointer;
  border-bottom: solid 0.125rem #98c6e0;
}

#tabs > [role="tabpanel"] {
  border-bottom: solid 1px transparent;
  padding: 0.5rem 1rem;
  background-color: #eff0f3;
  color: #2c2c2c;
}

#tabs > [role="tabpanel"] > :where(h1, blockquote, p) {
  min-width: 20rem;
  max-width: 50rem;
}

#tabs > [role="tabpanel"]:not([hidden]) {
  display: flex;
  flex-direction: column;
  min-height: calc(100vh - 3rem);
}

#tabs > [role="tabpanel"] > h1 {
  padding: 1rem 0 0 0;
  font-size: 1.5rem;
}

#tabs > [role="tabpanel"] > p + :where(h2, h3, h4) {
  margin-top: 0.75rem;
}

#tabs > [role="tabpanel"] > h2 {
  font-size: 1.25rem;
}

#tabs > [role="tabpanel"] > :where(h1, h2, h3, p) + p {
  padding: 0.5rem 0;
}

aside {
  position: absolute;
  right: 3rem;
  top: 5rem;
}

aside > a > img {
  box-shadow: 0 0 13px rgba(0, 0, 0, 0.2);
  border-radius: 1rem;
}

#panel-developers > p + :where(h2, h3, h4) {
  margin-top: 0.75rem;
}

#panel-developers > ul {
  margin: 0.5rem 2rem;
}

#panel-developers > ul > li {
  list-style-type: '👉';
  padding-inline-start: 1ch;
}

#panel-developers > ul > li + li {
  margin: 0.5rem 0;
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
                        <h3 class="box-title titlefix">All Survey</h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo base_url('admin/survey'); ?>"><button type="submit" class='btn btn-primary' style="float: right;">Create Survey</button> </a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->

                    <div class="box-body">

              <!-- <div class="col-md-2"></div> -->


<article id="tabs">
  <ul role="tablist" aria-label="Free HTML Tabs">
    <li role="tab" aria-selected="true" aria-controls="panel-home" id="tab-home" tabindex="0">
      All Survey
    </li>
    <li role="tab" aria-selected="false" aria-controls="panel-developers" id="tab-developers" tabindex="-1">
      My Survey
    </li>
   <!--  <li role="tab" aria-selected="false" aria-controls="panel-information" id="tab-information" tabindex="-1">
      Information
    </li> -->
  </ul>
  <section id="panel-home" role="tabpanel" tabindex="0" aria-labelledby="tab-home">

                    <div class="box box-primary" id="hroom">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">All Survey</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="mailbox-controls">
                            <div class="pull-right">
                            </div><!-- /.pull-right -->
                        </div>
                        <div class="mailbox-messages table-responsive">
                            <div class="download_label">All Survey</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Survey Ttile</th>
                                        <th>Survey Discription</th>
                                        <th class="text-right no-print"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($hostelroomlist1)) {
                                        ?>

                                        <?php
                                    } else {
                                        $count = 1;
                                        foreach ($hostelroomlist as $hostelroom) { 
                                            ?>
                                            <tr>
                                                <td class="mailbox-name"> <?php echo $hostelroom['survey_title'] ?></td>
                                                <td class="mailbox-name"> <?php echo $hostelroom['survey_discription'] ?></td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <?php if ($this->rbac->hasPrivilege('hostel_rooms', 'can_edit')) { ?>
                                                     <!--    <a data-placement="left" href="<?php echo base_url(); ?>admin/hostelroom/edit/<?php echo $hostelroom['id'] ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a> -->
                                                    <?php } if ($this->rbac->hasPrivilege('hostel_rooms', 'can_delete')) { ?>
                                                   <!--      <a data-placement="left" href="<?php echo base_url(); ?>admin/hostelroom/delete/<?php echo $hostelroom['id'] ?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');">
                                                            <i class="fa fa-remove"></i>
                                                        </a> -->

            <a data-placement="left" href="<?php echo base_url(); ?>admin/hostelroom/delete/<?php echo $hostelroom['id'] ?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');">
                                                            <i class="fa fa-remove"></i>
            </a>

                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        $count++;
                                    }
                                    ?>
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>

  </section>


  <section id="panel-developers" role="tabpanel" tabindex="0" aria-labelledby="tab-developers" hidden>

                        <div class="box box-primary" id="hroom">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">My Survey</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="mailbox-controls">
                            <div class="pull-right">
                            </div><!-- /.pull-right -->
                        </div>
                        <div class="mailbox-messages table-responsive">
                            <div class="download_label">My Survey</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>
                                        <th>Survey Ttile</th>
                                        <th>Survey Discription</th>
                                        <th>Assign To</th>
                                        <th class="text-right no-print"><?php echo $this->lang->line('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($hostelroomlist)) {
                                        ?>

                                        <?php
                                    } else {
                                        $count = 1;
                                        foreach ($hostelroomlist as $hostelroom) {
                                            ?>
                                            <tr>
                                                <td class="mailbox-name"> <?php echo $hostelroom['survey_title'] ?></td>
                                                <td class="mailbox-name"> <?php echo $hostelroom['survey_discription'] ?></td>
                                                <td class="mailbox-name"> <?php echo $hostelroom['assign_to'] ?></td>
                                                <td class="mailbox-date pull-right no-print">
                                                    <?php if ($this->rbac->hasPrivilege('hostel_rooms', 'can_edit')) { ?>
                                                       <!--  <a data-placement="left" href="<?php echo base_url(); ?>admin/hostelroom/edit/<?php echo $hostelroom['id'] ?>" class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('edit'); ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a> -->
                                                    <?php } if ($this->rbac->hasPrivilege('hostel_rooms', 'can_delete')) { ?>
                                                      <!--   <a data-placement="left" href="<?php echo base_url(); ?>admin/hostelroom/delete/<?php echo $hostelroom['id'] ?>"class="btn btn-default btn-xs"  data-toggle="tooltip" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('<?php echo $this->lang->line('delete_confirm') ?>');">
                                                            <i class="fa fa-remove"></i>
                                                        </a> -->
                                                   <?php } ?>
                                                   
  <a data-placement="left" href="<?php echo base_url(); ?>admin/survey-view/"class="btn btn-default btn-xs"  data-toggle="tooltip" title="View">
                       <i class="fa fa-eye"></i>
            </a>
                                                   
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        $count++;
                                    }
                                    ?>
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>

  </section>
<!--   <section id="panel-information" role="tabpanel" tabindex="0" aria-labelledby="tab-information" hidden>
    <h2>Information</h2>
    <p>I constantly update my shared codes, both on codepen and elsewhere. Do you have fun ideas, tips or want to add something on one of my shared codes. Please feel free to message me: <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#104;&#97;&#116;&#115;&#101;&#107;&#105;&#100;&#101;&#101;&#46;&#99;&#111;&#109;" target="_blank">Send an email</a></p>
  </section> -->
</article>

<!-- <aside>
  <a href="https://www.buymeacoffee.com/hatsekidee" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" ></a>
</aside> -->


                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->
        </div>

    </section><!-- /.content -->

</div>

<script type="text/javascript">
    window.addEventListener("DOMContentLoaded", () => {
  
    const tabs = document.querySelectorAll('[role="tab"]');
    const tabList = document.querySelector('[role="tablist"]');

    // Add a click event handler to each tab
    tabs.forEach((tab) => {
        tab.addEventListener("click", changeTabs);
    });

    // Enable arrow navigation between tabs in the tab list
    let tabFocus = 0;

    tabList.addEventListener("keydown", (e) => {
      
        // Move right
        if (e.keyCode === 39 || e.keyCode === 37) 
        {
            tabs[tabFocus].setAttribute("tabindex", -1);
          
            if (e.keyCode === 39) 
            {
                tabFocus++;
              
                // If we're at the end, go to the start
                if (tabFocus >= tabs.length) {
                    tabFocus = 0;
                }
                // Move left
            } 
              else if (e.keyCode === 37)
            {
                tabFocus--;
              
                // If we're at the start, move to the end
                if (tabFocus < 0) {
                    tabFocus = tabs.length - 1;
                }
            }

            tabs[tabFocus].setAttribute("tabindex", 0);
            tabs[tabFocus].focus();
        }
    });
});

function changeTabs(event) {
    const target = event.target;
    const parent = target.parentNode;
    const grandparent = parent.parentNode;

    // Remove all current selected tabs
    parent.querySelectorAll('[aria-selected="true"]').forEach((node) => node.setAttribute("aria-selected", false));

    // Set this tab as selected
    target.setAttribute("aria-selected", true);

    // Hide all tab panels
    grandparent.querySelectorAll('[role="tabpanel"]').forEach((node) => node.setAttribute("hidden", true));

    // Show the selected panel
    grandparent.parentNode.querySelector(`#${target.getAttribute("aria-controls")}`).removeAttribute("hidden");
}
</script>