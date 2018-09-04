<?php
include 'includes/header.php' ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
<!--      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
    </section>
    <hr>
    <!-- Main content -->
    <section class="content">
        
        
        
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="">
              <div class="small-box bg-aqua">
            <div class="inner">
                <center><h3>$ 150</h3>

              <p><small>14</small> Overdue</p>
                </center>
            </div>
           
           
          </div>
          </a>
        </div>
          
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="">
              <div class="small-box bg-green">
            <div class="inner">
                <center><h3>$ 150</h3>

              <p><small>14</small> Estimate</p>
                </center>
            </div>
           
           
          </div>
          </a>
        </div>
          
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="">
              <div class="small-box bg-red">
            <div class="inner">
                <center><h3>$ 150</h3>

              <p><small>14</small> Open Invoice</p>
                </center>
            </div>
           
           
          </div>
          </a>
        </div>
          
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="">
              <div class="small-box bg-orange">
            <div class="inner">
                <center><h3>$ 150</h3>

              <p><small>14</small> Life Time Sell</p>
                </center>
            </div>
           
           
          </div>
          </a>
        </div>
        
        
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
         <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
               <div class="box-header" style="padding:50px 20px;">
               <a href="add-new-customer.php" class="btn btn-success">Export</a>
               <a href="" class="btn btn-danger">Print</a>
               
            </div>
              
            <div class="box-header">
              <h3 class="box-title">Invoice List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>Date</th>
                  <th>Order No</th>
                  <th>Customer</th>
                  <th>Due Date</th>
                  <th>Grand Total</th>
                  <th>Paid</th>
                  <th>Balance</th>
                  <th>Order Status</th>
                  <th>Actions</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                <tr>
	     
                  <td>2018-08-12</td>
                  <td>24</td>
                  <td>LDA</td>
                  <td>2018-08-12</td>
                  <td>4,500</td>
                  <td>0.00</td>
                  <td>4000</td>
                  <td>Processing</td>
                  <td>
                    <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Actions</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="">View</a></li>
                    <li><a href="">Edit</a></li>
                    <li><a href="">Add Payment</a></li>
                    <li><a href="">View Payment</a></li>
                    <li><a href="">PDF Invoice</a></li>
                    <li><a href="">Email Invoice</a></li>
                    <li><a href="">Cancel Order</a></li>
                    <li><a href="">Delete</a></li>
                </ul>
                </div>
                  </td>
                  
                </tr>
	    
                
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>








<?php include 'includes/footer.php' ?>
