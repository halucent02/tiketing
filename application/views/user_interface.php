<?php require_once('_temp/header.php');?>
	<div class="head_design_user">
    	<div class="settings-cont">
        	<div class="settings-btn-cont">
                        <div class="btn-config-set btn-group" role="group">
                <div class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="icon-style glyphicon glyphicon-cog"></span>
                   
                </div>
                <ul class="menulist-style dropdown-menu" role="menu">
                	<?php require_once('_temp/dropdown_menu_list.php');?>
                </ul>
            </div>
   
            </div>
        </div>
    </div> 
        
        
         <div class="midcont-user">
            <div class="field-cont">
            	<div class="config-cont">
            		<div class="config2-cont">
                    	<div class="hrlogo-user"></div>
                            <div class="emp-cont">
                            <div class="emp-name">MICHAEL JOE MIRAFLOR</div>
                            <div class="emp-num">439</div>
                            <div class="emp-dep">Enterprise Solutions Group</div>
                            <div class="emp-des">System Developer </div>
                                    <div class="name-uni">EMPLOYEE NAME:</div>
                                    <div class="name-uni">EMPLOYEE NUMBER:</div>
                                    <div class="name-uni">DEPARTMENT:</div>
                                    <div class="name-uni">DESIGNATION:</div>
                        </div>
                        	<div class="seperator"></div>
                                    <div class="search-cont">
                                        <div class="name-search">SEARCH EMPLOYEE:</div>
                                        <input type="text" class="search-emp form-control" placeholder="Employee Name / ID No.">
                               		</div><!---SEARCH-CONT-->
                    </div><!--config2-cont-->
            	</div><!--config-cont-->
                
                        <div class="content-f">
                                 <div id="tabs">
                                    <ul class="usernav nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tabs-1">Leaves</a></li>
                                        <li role="tab"><a data-toggle="tab" href="#tabs-2">Change Shift</a></li>
                                        <li role="tab"><a data-toggle="tab" href="#tabs-ob">Official Business Form</a></li>
                                        <li role="tab"><a data-toggle="tab" href="#tabs-3">Current Cut Off</a></li>
                                        <li role="tab"><a data-toggle="tab" href="#tabs-4">Time Keeping History</a></li>
                                        
                                    </ul> 
                                    
                                    <div class="tab-content">
                                    
                                    	<div id="tabs-1" class="tab-pane fade in active">
                                        	<div class="uni-tab-content">
                                            	<div class="leaves-container">
                                                	<div class="title-h">
                                                    	<div class="titlebg-h">
                                                        	<div class="name-col1">Credits</div>
                                                            <div class="name-col2">Taken</div>
                                                            <div class="name-col3">Balance</div>
                                                        </div>
                                                    </div>
                                                    	<div class="leave-cont-fillup">
                                                                <div class="name-leave-h">Vacation Leave:</div>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                            </div>
                                                            
                                                            <div class="leave-cont-fillup">
                                                                <div class="name-leave-h">Sick Leave:</div>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                            </div>
                                                            
                                                            <div class="leave-cont-fillup">
                                                                <div class="name-leave-h">Paternity Leave:</div>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                            </div>
                                                            
                                                             <div class="leave-cont-fillup">
                                                                <div class="name-leave-h">Maternity Leave:</div>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                            </div>
                                                            
                                                             <div class="leave-cont-fillup">
                                                                <div class="name-leave-h">Leave Without Pay:</div>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                                <input type="text" class="fill-f form-control"/>
                                                            </div>
                                                            
                                                            	<div class="this">This cut off's leave application:</div>
                                                                <div class="approved-f">
                                                                	<div class="period-n">Period:</div>
                                                                    <input type="text" class="approves-f form-control"/>
                                                                </div>
                                                                		<div class="date-f">
                                                                        
                                                                        	<div class="appby">Approved by:</div>
                                                                        	<input type="text" class="appby-f form-control"/>
                                                                            <div class="datefiled-n">Date Filed:</div>
                                                                        	<input type="text" class="datefiled-f form-control"/>
                                                                            
                                                                            <div class="datemodified-n">Date Modified:</div>
                                                                            <div class="datemodified-f">12/12/12 8:54am</div>
                                                                    
                                                                                    <div class="docu-n">Document Number:</div>
                                                                                    <div class="docu-f">9999999</div>
                                                                                    <div class="applytk btn btn-danger glyphicon glyphicon-log-in" title="Apply to Current Cut off"></div>
                                                                        </div>
                                                                        
                                                                        
                                                </div><!--leaves-container-->
                                            		
                                                    <div class="historylogs-cont">
                                                    <div class="headslog">HISTORY LOGS</div>
                                                    <div class="headsloglabel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Credits&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taken &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Balance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Modified field &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Modified by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date</div>
                                                    	<div class="logs-cont">
                                                                <div class="logscontainer">
                                                                    <div class="box1">1</div>
                                                                    <div class="box1">2</div>
                                                                    <div class="box1">5</div>
                                                                    <div class="box1">VL</div>
                                                                    <div class="boxNAME">CHEENEE J.</div>
                                                                    <div class="box1">12/12/2015</div>
                                                                </div> <!---headslog------->
                                                                
                                                                <div class="logscontainer">
                                                                    <div class="box1">1</div>
                                                                    <div class="box1">2</div>
                                                                    <div class="box1">5</div>
                                                                    <div class="box1">VL</div>
                                                                    <div class="boxNAME">CHEENEE J.</div>
                                                                    <div class="box1">12/12/2015</div>
                                                                </div> <!---headslog------->
                                                                
                                                                <div class="logscontainer">
                                                                    <div class="box1">1</div>
                                                                    <div class="box1">2</div>
                                                                    <div class="box1">5</div>
                                                                    <div class="box1">VL</div>
                                                                    <div class="boxNAME">CHEENEE J.</div>
                                                                    <div class="box1">12/12/2015</div>
                                                                </div> <!---headslog------->
                                                                
                                                                <div class="logscontainer">
                                                                    <div class="box1">1</div>
                                                                    <div class="box1">2</div>
                                                                    <div class="box1">5</div>
                                                                    <div class="box1">VL</div>
                                                                    <div class="boxNAME">CHEENEE J.</div>
                                                                    <div class="box1">12/12/2015</div>
                                                                </div> <!---headslog------->
                                                                
                                                                <div class="logscontainer">
                                                                    <div class="box1">1</div>
                                                                    <div class="box1">2</div>
                                                                    <div class="box1">5</div>
                                                                    <div class="box1">VL</div>
                                                                    <div class="boxNAME">CHEENEE J.</div>
                                                                    <div class="box1">12/12/2015</div>
                                                                </div> <!---headslog------->
                                                                
                                                              
                                                        </div>
                                                    
                                                    
                                                    
                                                    </div><!---historylogs-cont-->
                                                    
                                            
                                            </div>
                                        </div><!----tab content-->
                                        
                                            <div id="tabs-2" class="listusers_scroll tab-pane fade">
                                                <div class="uni-tab-content">
                                                	<div class="changeshift-cont">
                                                    	<div class="branchdate-cont">
                                                            <div class="branch-n">Branch:</div>
                                                            <input type="text" class="branch-f form-control"/>
                                                             <div class="t-n">Date Filed:</div>
                                                            <input type="text" class="t-f form-control"/>
                                                        </div>
                                                        	<div class="orchange-cont">
                                                            	<div class="orgsched-cont">
                                                                	<div class="orgsched-h"> ORIGINAL SCHEDULE</div>
                                                                    <div class="dates-n">DATE:</div>
                                                                    <input type="text" class="dates-f form-control"/>
                                                                    <br>
                                                                    <div class="dates-n">TIME:</div>
                                                                    <input type="text" class="dates-f form-control"/>
                                                                </div>
                                                                
                                                                    <div class="orchange-cont">
                                                                    <div class="orgsched-cont">
                                                                        <div class="orgsched-h"> CHANGE SHIFT</div>
                                                                        <div class="dates-n">DATE:</div>
                                                                        <input type="text" class="dates-f form-control"/>
                                                                        <br>
                                                                        <div class="dates-n">TIME:</div>
                                                                        <input type="text" class="dates-f form-control"/>
                                                                    </div>
                                                                	</div>
                                                                    
                                                                    	<div class="authproved-cont">
                                                                        	<div class="auth-n">Authorized & Approved by:</div>
                                                                            <input type="text" class="auth-f form-control"/>
                                                                            <div class="remarks-n">Remarks:</div>
                                                                            <textarea class="inputremarks"></textarea>
                                                                        	
                                                                        </div>
                                                                
                                                            </div><!-----branch-cont--->
                                                        
                                                        
                                                    </div><!---changeshift-cont--->
                                                                                               
                                                 </div><!----unitab--->
                                            </div><!------tab2---->
                                            
                                            
                                            
                             <!-------------------------------->
                                            
                                            <div id="tabs-ob" class="listusers_scroll tab-pane fade">
                                                <div class="uni-tab-content">
                                                	<div class="ob-cont">
                                                    		<div class="branchdate-cont">
                                                                <div class="branch-n">Date of Field Work:</div>
                                                                <input type="text" class="dateoffield form-control"/>
                                                                 <div class="t-n">Date Filed:</div>
                                                                 <input type="text" class="dateoffield form-control"/>
                                                        	</div>
                                                            
                                                            <div class="branchdate-cont">
                                                                <div class="assigned-n">Assigned IN:</div>
                                                                <input type="text" class="dateoffield form-control"/>
                                                                 <div class="t-n">Report To:</div>
                                                                 <input type="text" class="dateoffield form-control"/>
                                                        	</div>
                                                        
                                                        
                                                        <div class="branchdate-cont">
                                                                <div class="timein-n">Time IN:</div>
                                                                <input type="text" class="dateoffield form-control"/>
                                                                 <div class="t-n">Time OUT:</div>
                                                                 <input type="text" class="dateoffield form-control"/>
                                                        	</div>
                                                            
                                                            		<div class="reason-f">
                                                                    	<div class="reason-n">REASON:</div>
                                                                        <textarea class="reason-textfield"></textarea>
                                                                    
                                                                    </div>
                                                            
                                                        
                                                    </div><!---changeshift-cont--->
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                </div>
                                            </div>
                                        
                                        
                                        
                            <!-------------------------------->            
                                        
                                                <div id="tabs-3" class="listusers_scroll tab-pane fade">
                                                    <div class="uni-tab-content">
       
																<div class="prints glyphicon glyphicon-print" title="Print"></div>
                                                    					<br><br>
                                                                        <table>
                                                                        		<tr>
                                                                                <th>Date</th>
                                                                                    <th>Productivity (hrs)</th>
                                                                                    <th># Mins on Break</th>
                                                                                    <th>Tardiness (mins)</th>
                                                                                    <th>Loss Hours (Over break + Tardiness)</th>
                                                                                    <th>Approval</th>
                                                                                    <th>Total Loss Hrs (mins)</th>
                                                                                </tr>
                                                                        </table>
                                                                        
                                                                        <div class="result-table-cont">
                                                                        	<table>
                                                                                <tr>
                                                                                	<td class="date-tab">1/31/15</td>
                                                                                    <td class="prod-tab">6</td>
                                                                                    <td class="min-tab">12</td>
                                                                                    <td class="tard-tab">14</td>
                                                                                    <td class="loss-tab">60</td>
                                                                                    <td class="change-tab">
                                                                                    <select class="ddown">
                                                                                    	<option>None</option>
                                                                                    	<option>Change Shift</option>
                                                                                        <option>Official Business</option>
                                                                                        <option>Sick Leave</option>
                                                                                        <option>Vacation Leave</option>
                                                                                        <option>Paternity Leave</option>
                                                                                        <option>Maternity Leave</option>
                                                                                    </select>
                                                                                    </td>
                                                                                    <td class="tl-tab">0</td>
                                                                                </tr>
                                                                 
                                                                            </table>
                                                                            
                                                                       </div><!---result-table-cont-->
                                                    </div><!--uni-tab-content--->
                                                </div><!--tabs-3-->
            
            
            
             									<div id="tabs-4" class="listusers_scroll tab-pane fade">
                                                    	<div class="uni-tab-content">
                                                        <div class="prints glyphicon glyphicon-print" title="Print"></div>	
                                                         	<div class="search-n-h">Search Cut Off</div>
                                                                <div class="startend-cont">
                                                                	<div class="startend-n">START:</div>
                                                               		<input type="text" class="datepicker start-f form-control">
                                                                    <div class="startend-n">END:</div>
                                                               		<input type="text" class="datepicker start-f form-control">
                                                                    <button type="button" class="populate-btns btn btn-danger">POPULATE</button>
                                                              	</div><!--startend-cont-->
                                                                		
                                                                        <table>
                                                                        <tr>
                                                                                <th>Date</th>
                                                                                    <th>Productivity (hrs)</th>
                                                                                    <th># Mins on Break</th>
                                                                                    <th>Tardiness (mins)</th>
                                                                                    <th>Loss Hours (Over break + Tardiness)</th>
                                                                                    <th>Approval</th>
                                                                                    <th>Total Loss Hrs (mins)</th>
                                                                                </tr>
                                                                        </table>
                                                                        <div class="result-table-cont">
                                                                        	<table>
                                                                                <tr>
                                                                                	<td class="date-tab">1/31/15</td>
                                                                                    <td class="prod-tab">6</td>
                                                                                    <td class="min-tab">12</td>
                                                                                    <td class="tard-tab">14</td>
                                                                                    <td class="loss-tab">60</td>
                                                                                    <td class="change-tab">Change Shift</td>
                                                                                    <td class="tl-tab">0</td>
                                                                                </tr>
                                                                                
                                                                                 <tr>
                                                                                	<td class="date-tab">1/31/15</td>
                                                                                    <td class="prod-tab">6</td>
                                                                                    <td class="min-tab">12</td>
                                                                                    <td class="tard-tab">14</td>
                                                                                    <td class="loss-tab">60</td>
                                                                                    <td class="change-tab">Change Shift</td>
                                                                                    <td class="tl-tab">0</td>
                                                                                </tr>
                                                                                
                                                                                 <tr>
                                                                                	<td class="date-tab">1/31/15</td>
                                                                                    <td class="prod-tab">6</td>
                                                                                    <td class="min-tab">12</td>
                                                                                    <td class="tard-tab">14</td>
                                                                                    <td class="loss-tab">60</td>
                                                                                    <td class="change-tab">Change Shift</td>
                                                                                    <td class="tl-tab">0</td>
                                                                                </tr>
                                                                            </table>
                                                                            
                                                                       </div>	
                                                           

                                                        </div><!---uni-tab-content-->
                                                  </div><!----tab4---->
            
                                 </div><!----tabs-->   
                                    </div><!-----tab-content--->
                                    
                        </div><!---content-f--->
            
            
            </div><!--field-cont-->
         </div><!--midcont-user-->
 

<?php require_once('_temp/footer.php');?>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>