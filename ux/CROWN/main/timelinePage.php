<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="calendar/css/cover.css" rel="stylesheet" media="screen">
		<link href="calendar/css/960_12_col.css" rel="stylesheet">
		<link href="calendar/css/cssTimeline.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
      <script src='calendar/lib/events.js'></script> <!--file of events-->
        <script src='calendar/lib/moment.min.js'></script>
        <script src='calendar/lib/jquery.min.js'></script>
        <script src='calendar/lib/fullcalendar.js'></script> 

		<!--Pop Up SideBar -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
		<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
		<!--End Pop SideBar-->


		<link rel="Shortcut Icon" href="img/CROWN_LOGO2.ico"/>
		<title> CROWN </title>
	</head>

	<body>
	<div class="container_12">

		<div class="top">

			<div class="grid_3 monthly_calendar">
						<img src="img/Monthly_Calendar.jpg">
			</div>

			<div class="grid_2 logo">
					<img src="img/CROWN_LOGO2.jpg">
			</div>

			<div class="grid_3">
				<div class="search_bar">
						<form method="get" action="/search" id="search">
							<input name="q" type="text" size="40" placeholder="Search">
						</form>
				</div>

				<div class="calendar_button">
                    <a href="calendarPage.php"><img src="img/calendar button.jpg" height="40"></a>
				</div>
			</div>

			<div class="grid_2 timeline_button activet">
				<img src="img/timeline button.jpg">
			</div>


				<!--Add Button-->
				<div class="grid_3">				
					<div class="add_button">
						<a href="#"><img src="img/add button.jpg"></a>
						<div class="dialog" style="display:none">
							<div class="title"> Add Event or Class</div>
						  	<form action="addevent.php" method="post">
						 		<select name="type">
									<option value="a">Event</option>
									<option value="a">Class</option>
								</select>
								<br/>

							    <input name="Name" type="text" placeholder="Name" class="event_name"/>
							    <br/>
							    <input name="start_dtm" type="text" class="eventstart_time" placeholder="Start Time (format= '24:00')"/>
							    <br/>
							    <input name="end-dtm" class="eventend_time" type="text" placeholder="End Time (format='24:00')"/>
						    	</br>

						    	<div class="typeofevent">
						      		</br>
						    		<input type="radio" name="allday"> &nbsp;All Day &nbsp;
						    		<input type="radio" name="repeating"> &nbsp; Repeat 
						    	</div> 
						   		<div class="priority">
						    		<p class="idcwhat" align="left">Priority</p>
						    		<div class="priority_buttons"> 
						    			<input type="radio" name="priority_low" value="priority_low"> &nbsp; Low
										<input type="radio" name="priority_med" value="priority_med"> &nbsp; Med
						    			<input type="radio" name="priority_high" value="priority_high"> &nbsp; High   
						    		</div>
						    	</div>
						   		<input name="location" type="text" placeholder="Location" class="event_location"/>
						    	<textarea name="description" placeholder="Description" cols="30" rows="5" wrap="soft"></textarea>
						    	<!--<input type="submit" value="ADD"/>-->
						    	<div class="action_btns">
									<!--mike do css please btn_red2--> <div class="modal_add_event"><a href="#" class="btn btn_red2">ADD</a></div>
								</div>

							</form>
						</div>
					</div>
				</div>
				<!--End Add Button-->
					<!--Crystal2 adds script for add button- event dropdown-->
					<script type="text/javascript">
									var main=function(){
							$('.btn_red2').click(function(){
								
								var description=$('.event_description').val();
								var location=$('.event_location').val();

								var typeofpriority="";
									var priority_low=$("input[name=priority_low]:checked");
									var priority_med=$("input[name=priority_med]:checked");
									var priority_high=$("input[name=priority_high]:checked");
									if (priority_low.length>0){
										typeofpriority="0";
									}
									if (priority_med.length>0){
										typeofpriority="1";
									}
									if (priority_high.length>0){
										typeofpriority="2";
									}


								var typeofday="";
									var type_allday=$("input[name=allday]:checked");
									var type_repeating=$("input[name=repeating]:checked");
									if (type_allday.length>0){
										typeofday="all day event";
										}
									else if (type_repeating.length>0){
										typeofday="repeating event";
									}

								var end_time=$('.eventend_time').val();									
								var start_time=$('.eventstart_time').val();
								var name_event=$('.event_name').val();

								/*new for PHP*/
								newEvent = {eventName: name_event, eventStart: start_time,
								eventEnd: end_time, eventPriority: typeofpriority}

								callPHP(newEvent);
								/*new for PHP*/

							});
						}
						$(document).ready(main);
					</script>
					<!--crystal2 ends change for add event dropdown-->

					<!--new for php-->
					<script>
					function callPHP(newEvent) {
						 $.ajax ({
							type: "POST",
							url: "calendar/lib/addEvent.php",
							  data: {eventName: newEvent.eventName, eventStart: newEvent.eventStart,
										eventEnd: newEvent.eventEnd, eventPriority: newEvent.eventPriority},
							  success: function( data ) {
							  } })
							setTimeout("location.reload(true);",500);
						 }
					</script>
					<!--new for php-->


			<div class="username">
					<p>Angela Luh &nbsp; &nbsp; </p> 
				</div>

			<div class="username_photo">
					<img src="img/angela.jpg">
			</div>
		</div><!--end top-->
	</div> <!--end container 12-->

<div class="left grid_3">

					<!--To Do List-->
					<div class="todolist">
						<h1>TO-DO LIST &nbsp; &nbsp;<a href='#todo_modal' id="todoplus" class="modal_trigger"><img src="img/plus button.jpg" id="plus" class="todoplus"></a></h1>
						<ul>
							<div class="todolist_li">

							</div>
						</ul>
					</div>
					<!--End To Do List-->

					</br> <!--Line Filler-->

					<!--Assignment List-->
					<div class="assignment">
						<h1>ASSIGNMENTS &nbsp;</h1><a href='#assignment_modal' id="assignmentsplus" class="modal_trigger"><img src="img/plus button.jpg" id="plus" class="assignmentsplus"></a>
						</br>
						<ul>
							<div class="assignments_list_li">

							</div>
						</ul>

					</div>
					<!--End Assignment List-->

					<!--Goals List-->
					<div class="goals">
						<h1>GOALS&nbsp; <a href='#goals_modal' id="goalsplus" class="modal_trigger"><img src="img/plus button.jpg" id="plus" class="goalsplus"></a></h1>


						<ul>
							<div class="goals_list_li">

							</div>
						</ul>


						<!--Added Events List-->
						<ul>
							<div class="test_event">

							</div>
						</ul>
						<!--end Added Events List-->	

					</div>
					<!--End Goals List-->
			</div>
			<!--End Left Task Bar-->
		<!--Todo PopUp Container-->
		<div id="todo_modal" class="popupContainer_todo" style="display:none;">
					<header class="popupHeader">
						<span class="header_title">to do</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
					</header>
					
					<section class="popupBody_todo">

						<!-- Title & Notes form -->
						<div class="todo_popup">
							<form>
								<label class="title_label">to do &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input class="input_box_todo" type="text"/>
								<br />

								<label class="title_label">notes&nbsp;&nbsp;</label>
								<input class="notes_box" type="text" />
								<br /><br/><br/>

								<div class="action_btns">
									<div class="modal_add_todo"><a href="#" class="btn btn_red">ADD</a></div>
								</div>
								<br/><br/>
							</form>

						</div>
					</section>
		</div>
		<!--End Todo PopUp Container-->

		<!--Assignments PopUp Container-->
		<div id="assignment_modal" class="popupContainer_assignments" style="display:none;">
					<header class="popupHeader">
						<span class="header_title">Assignments</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
					</header>
					
					<section class="popupBody_assignments">

						<!-- Title & Notes form -->
						<div class="user_login">
							<form>
								<label class="title_label">title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input class="input_box_assignments_title" type="text"/>
								<br />

								<label class="title_label">Due Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input class="input_box_assignments_duedate" type="text"/>
								<br /><br /><br/>

								<label class="title_label">Hours <br />Until<br/> Finished </label>
								<input class="input_box_assignments" type="text"/>
								<br /><br /><br />

								<label class="title_label"><br/>Notes</label>
								<input class="notes_box_assignments" type="text" />
								<br /><br/><br/>

								<div class="action_btns">
									<div class="modal_add_todo"><a href="#" class="btn btn_red">ADD</a></div>
								</div>
								<br/><br/>
							</form>

						</div>
					</section>
		</div>
		<!--End Assignments PopUp Container-->

		<!--Goals PopUp Container-->
		<div id="goals_modal" class="popupContainer_todo" style="display:none;">
					<header class="popupHeader">
						<span class="header_title">Goals</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
					</header>
					
					<section class="popupBody_todo">

						<!-- Title & Notes form -->
						<div class="todo_popup">
							<form>
								<label class="title_label">Goals&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input class="input_box_goals" type="text"/>
								<br />

								<label class="title_label"><br/>Notes</label>
								<input class="notes_box_goals" type="text" />
								<br /><br/><br/>

								<div class="action_btns">
									<div class="modal_add_todo"><a href="#" class="btn btn_red">ADD</a></div>
								</div>
								<br/><br/>
							</form>

						</div>
					</section>
		</div>
		<!--End Assignment PopUp Container-->
</div>
		<!--PopUp Container Script-->
		<script type="text/javascript">

			$(".modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });


			$(function(){
				// Calling ToDo Popup Form
				$("#login_form").click(function(){
					$(".todo_popup").show();
					return false;
				});

				$(".modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_add_todo" });

			})
		</script>
		<!--End PopUp Container Script-->

		<!--Add Script for todo popup container-->
		<script type="text/javascript">
			var main=function(){
				$('.btn_red').click(function(){
					var todo_post=$('.input_box_todo').val();
					$('<li>').text(todo_post).prependTo('.todolist_li');

					$('.input_box_todo').val('');
					$('.notes_box').val('');
				});
			}
			$(document).ready(main);
		</script>
		<!--End Add Script for todo popup container-->


		<!--Add Script for assignments popup container-->
		<script type="text/javascript">
			var main=function(){
				$('.btn_red').click(function(){
					var todo_post=$('.input_box_assignments_duedate').val();
					$('<li>').text(todo_post).prependTo('.assignments_list_li');					
					var todo_post=$('.input_box_assignments_title').val();
					$('<li>').text(todo_post).prependTo('.assignments_list_li');

					$('.input_box_assignments_duedate').val('');
					$('.notes_box_assignments_title').val('');
				});
			}
			$(document).ready(main);
		</script>
		<!--End Add Script for assignments popup container-->

		<!--Add Script for assignments popup container-->
		<script type="text/javascript">
			var main=function(){
				$('.btn_red').click(function(){
					var todo_post=$('.input_box_goals').val();
					$('<li>').text(todo_post).prependTo('.goals_list_li');

					$('.input_box_goals').val('');
					$('.notes_box_goals').val('');
				});
			}
			$(document).ready(main);
		</script>
		<!--End Add Script for assignments popup container-->

		<!--Add Button Script-->
		<script type="text/javascript">

			$(document).ready( function() {

			 $('.add_button').click(function(e){
			   e.stopPropagation();
			  if ($(this).hasClass('active')){
			    $('.dialog').fadeOut(200);
			    $(this).removeClass('active');
			  } else {
			    $('.dialog').delay(100).fadeIn(100);
			    $(this).addClass('active');
			  }
			});
			$('.radio > .button').click( function() {
			  $('.radio').find('.button.active').removeClass('active');
			  $(this).addClass('active');
			});
			  
			function closeMenu(){
			  $('.dialog').fadeOut(100);
			  $('.add_button').removeClass('active');  
			}
			  
			$(document.body).click( function(e) {
			     closeMenu();
			});

			$(".dialog").click( function(e) {
			    e.stopPropagation();
			});
			});

		</script>
		<!--Add Button Script-->



		<div class="right">
			<div class="container_12">

				<div class="timeline_buttons">
				<div class="timeline_scrollbuttons">
					<div class="timeline_scrollup">
						<a href="#" onclick="return false;"><image onclick="changeDay(0)" src="img/scroll button up.jpg"/></a>
					</div>
					<div class="timeline_scrolldown">
						<a href="#" onclick="return false;"><image onclick="changeDay(1)" src="img/scroll button down.jpg"/></a>
					</div>
				</div>

				<div class="timeline_zoombuttons grid_1">
					<div class="timeline_zoomplus">
						<a href="#" onclick="return false;"><image onclick="changeView(0)" src="img/zoom button plus.jpg"/></a>
					</div>
					<div class="timeline_zoomminus">
						<a href="#" onclick="return false;"><image onclick="changeView(1)" src="img/zoom button minus.jpg"/></a>
					</div>
				</div>
			</div> 

            <script>
		         var events = [];
		         events = getEvents();
		         var currentView = 1;
					var today = 0;
					var ID_CONSTANT = 500;
					var LABEL_ID = 200;
               var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
               var months = ['January','February','March','April','May','June','July','August',
										'September','October','November','December'];
					var dateSuffix = ['st','nd','rd','th','th','th','th','th','th','th','th','th','th',
										'th','th','th','th','th','th','th','st','nd','rd','th','th','th','th',
										'th','th','th','st'];

		         var priorityColor = ['cd-timeline-low', 'cd-timeline-medium', 'cd-timeline-high'];
		         
		         function makeDate(date) {
				      
				      var year = date.slice(0, 4);
				      
				      var month = date.slice(5, 7);
				      if (month.slice(0, 1) == 0)
				     	 month = month.slice(1, 2);
				      
				      var day = date.slice(8, 10);
				      if (day.slice(0, 1) == 0)
				     	 day = day.slice(1, 2);
		    
				      var fullDate = new Date(year, month - 1, day, 0, 0, 0, 0);

				      return fullDate;
		         }
		         function convertDate(date) {
				      
				      var fullDate = makeDate(date);

				      
				      var dayName = days[fullDate.getDay()];
				      var monthName = months[fullDate.getMonth()];
				      
				      fullDate = (dayName + ", " + monthName + " " + fullDate.getDate());
				      return fullDate;
		         }
					function tConvert (time) {
					  // Check correct time format and split into components
					  time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

					  if (time.length > 1) { // If time format correct
						 time = time.slice (1);  // Remove full string match value
						 time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
						 time[0] = +time[0] % 12 || 12; // Adjust hours
					  }
					  return time.join (''); // return adjusted time or original string
					}

					function monthViewLabel(date) {

						date = makeDate(date);
						var makeDay = date.getDate()
						var makeWeek = months[date.getMonth()];

						date = makeWeek + " " + makeDay + dateSuffix[makeDay-1] + " - " +
							(makeWeek) + " " + (makeDay + 6) + dateSuffix[makeDay+5];
						return date;
					}
		         function setRange(date, firstDay, index) {
						var sevenDays = 604800000;
						//var thirtyOneDays = 2678400000;

				      firstDay = makeDate(firstDay);
						date = makeDate(date);

						if ((date - firstDay) == 0)
							events[index].isDay = true;
						else
							events[index].isDay = false;
						if (events[index].priority >= 1 && (date - firstDay) < sevenDays && (date - firstDay) >= 0)
							events[index].isWeek = true;
						else
							events[index].isWeek = false;
						if (events[index].priority == 2)
							events[index].isMonth = true;
						else
							events[index].isMonth = false;
		         }
					function hideEvent(element) {
						element = document.getElementById(element.ID);
						element.style.display = "none";
					}
					function showEvent(element) {

                  var startTime = element.start;
                  var dateChange = document.getElementById(parseInt(element.ID) + parseInt(LABEL_ID));
						dateChange.innerHTML = displayDate(startTime);
                  dateChange.style.display = "none";
                  dateChange.style.display = "inline";
                        
						element = document.getElementById(element.ID);
						element.style.display = "inline";


					}
					function changeView(newView) {

						var element;

						switch (newView) {
							case 0:
									if (currentView > 0)
										currentView--;
									else return;
							break;
							case 1:
									if (currentView < 2)
										currentView++;
									else return;
							break;
							default:
							break;
						}
						for (loop = 0; events[loop] != null; loop++)
						{
							switch (currentView) {
								case 0:
									if (events[loop].isDay)
										showEvent(events[loop]);
									else
										hideEvent(events[loop]);

									element = document.getElementById(LABEL_ID);
									var fooDate = convertDate(events[today].start);
									element.innerHTML = fooDate + dateSuffix[makeDate(events[today].start).getDate() - 1];
								break;
								case 1:
									if (events[loop].isWeek)
										showEvent(events[loop]);
									else
										hideEvent(events[loop]);

									element = document.getElementById(LABEL_ID);
									element.innerHTML = monthViewLabel(events[today].start);
								break;
								case 2:
									if (events[loop].isMonth)
										showEvent(events[loop]);
									else
										hideEvent(events[loop]);

									element = document.getElementById(LABEL_ID);
									element.innerHTML = "September, 2014";
								break;
							}
						}
					}
					function changeDay(newDay) {
							switch (newDay) {
								case 1: /*going forward days*/
										if (events[today + 1] != null)
										{											
											while (convertDate(events[today].start) == convertDate(events[today + 1].start))
											{
												today++;
											}
											today++;
										}
										else
											return;
								break;
								case 0: /*going back days*/
									if (today > 0)
									{  /*loops until it finds the next event on different day*/
										while (convertDate(events[today].start)
											== convertDate(events[today - 1].start))
										{
											today--;
										}
										today--; /*needs additional decrement to get different date*/
									}
									else /*if it is the first day*/
										return;
								break;
							}
						for (loop = 0; events[loop] != null; loop++) /*reset visible range*/
						{
							setRange(events[loop].start, events[today].start, loop);
						}
						changeView(2); /*call changeView to update visible events*/
					}
				  /*returns date for each event, formatted depending on timeline view*/
              function displayDate(date) {
						/*date formatted in events.js*/
                  switch (currentView) {
                      case 0: /*daily view*/
									if (date = date.slice(11, 16)) /*isolate day*/
										return tConvert(date);
									else /*if there is no time specified, all day event*/
										return "all day event";
                      break;
                      case 1: /*weekly view*/
                 				date = makeDate(date);
                      	   return days[date.getDay()];
                      break;
                      case 2: /*monthly view*/
									date = makeDate(date);
									var makeDay = date.getDate()
									var makeWeek = date.getMonth() + 1;
									date = makeWeek + "/" + makeDay;
									return date;
							 default:
                      break;
                  }
    
    
    
                    }
            </script>
            
            <section id="cd-timeline" class="cd-container">
				<span class="cd-timeline-label" id="200"></span>

            <script>	
					for(loop = 0; events[loop] != null; loop++) {

							var priority = events[loop].priority;
							var hNum = parseInt(priority, 10) + 1;
							setRange(events[loop].start, events[0].start, loop);

							events[loop].ID = ID_CONSTANT + loop;
                        
                            var textID = parseInt(events[loop].ID) + parseInt(LABEL_ID);

							document.write('\
								<div class="cd-timeline-block" id="'+events[loop].ID+'">\
								<div class="' + priorityColor[priority] + '">\
								</div>\
								\
								<div class="cd-timeline-content">\
								<span class="h'+hNum+'">'+ events[loop].title + '</span>\
								<span class="cd-date'+hNum+'" id="'+textID+'">' + convertDate(events[loop].start) + '</span>\
								</div>\
								</div>\
							');
				      }
					changeView(2);
				</script>


            </section> <!-- cd-timeline -->

			</div>
	</body> 

</html>
