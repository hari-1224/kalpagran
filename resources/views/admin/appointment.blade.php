@extends('admin.admin_layouts')

@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Appointment</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Appointments</a>
                                    </li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                          <!-- Button trigger modal -->
                      <!-- <button type="button" class="btn-icon btn btn-primary btn-round btn-sm " data-toggle="modal" data-target="#inlineForm">
                        Add Appointment
                    </button> -->
                        
                    </div>
                   
                </div>
            </div>
            <div class="content-body">
           
                <div class="container">
                    <div class="response"></div>
                    <div id='calendar'></div>  
                </div>
                    
                    <!-- Modal -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Inline Login Form</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="#">
                                    <div class="modal-body">
                                        <label>Email: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Email Address" class="form-control" />
                                        </div>

                                        <label>Password: </label>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </section>
                <!--/ Basic table -->

     

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    
<script>
    $(document).ready(function () {
           
          var SITEURL = "{{url('/')}}";
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
   
          var calendar = $('#calendar').fullCalendar({
              editable: true,
              events: SITEURL + "/admin/fullcalendareventmaster",
              displayEventTime: true,
              editable: true,
              eventRender: function (event, element, view) {
                  if (event.allDay === 'true') {
                      event.allDay = true;
                  } else {
                      event.allDay = false;
                  }
              },
              selectable: true,
              selectHelper: true,
              select: function (start, end, allDay) {
                  var title = prompt('Event Title:');
   
                  if (title) {
                      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
   
                      $.ajax({
                          url: SITEURL + "/admin/fullcalendareventmaster/create",
                          data: 'title=' + title + '&start=' + start + '&end=' + end,
                          type: "POST",
                          success: function (data) {
                              displayMessage("Added Successfully");
                          }
                      });
                      calendar.fullCalendar('renderEvent',
                              {
                                  title: title,
                                  start: start,
                                  end: end,
                                  allDay: allDay
                              },
                      true
                              );
                  }
                  calendar.fullCalendar('unselect');
              },
               
              eventDrop: function (event, delta) {
                          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                          $.ajax({
                              url: SITEURL + '/admin/fullcalendareventmaster/update',
                              data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                              type: "POST",
                              success: function (response) {
                                  displayMessage("Updated Successfully");
                              }
                          });
                      },
              eventClick: function (event) {
                  var deleteMsg = confirm("Do you really want to delete?");
                  if (deleteMsg) {
                      $.ajax({
                          type: "POST",
                          url: SITEURL + '/admin/fullcalendareventmaster/delete',
                          data: "&id=" + event.id,
                          success: function (response) {
                              if(parseInt(response) > 0) {
                                  $('#calendar').fullCalendar('removeEvents', event.id);
                                  displayMessage("Deleted Successfully");
                              }
                          }
                      });
                  }
              }
   
          });
    });
   
    function displayMessage(message) {
      $(".response").html(""+message+"");
      setInterval(function() { $(".success").fadeOut(); }, 1000);
    }
  </script>
@endsection
