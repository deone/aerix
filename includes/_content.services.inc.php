<ul class="menu">
    <li class="category">
	<a href="#">Materials / Equipment Procurement</a>
	<ul>
	    <li>Oil Tools</li>
	    <li>Electrical Equipment</li>
	    <li>Rotating Equipment</li>
	    <li>Heavy Equipment</li>
	    <li>Inspection Equipment</li>
	    <li>Instrument &amp; Control equipment</li>
	    <li>Water Treatment Equipment</li>
	    <li>Safety Materials</li>
	    <li>Pipeline Equipment</li>
	</ul>
    </li>
    <li class="category">
	<a href="#">Consultancy Services</a>
	<ul>
	    <li>Logistics and Supply Chain Consulting</li>
	    <li>Strategy Consulting</li>
	    <li>Specialized Technical Consulting for the Oil and Gas industry</li>
	</ul>
    </li>
    <li class="category">
	<a href="#">Onshore &amp; Offshore Engineering Services</a>
	<ul>
	    <li>Marine Logistics</li>
	    <li>Corrosion Protection</li>
	    <li>Pipeline Coatings</li>
	    <li>Data Center Management</li>
	    <li>Call Center Management</li>
	</ul>
    </li>
</ul>
<div class="body"></div>
<div class="clear-float"></div>
<?
	//$i = $_REQUEST["i"];
?>
<!--<table cellspacing="0" cellpadding="0" class="mainContent_tableContainer">
<tr>
	<td align="left" valign="top" class="contentArea_containerCell" id="contentArea_containerCell_about">
    	<div class="pageIndicator_container">
        	<img src="images/pageIndicator_services.jpg" />-->
            <? //if( isset( $i ) ){ ?>
            	<!--<a href="services.php" class="breadcrumbStyle_link">
                    [ See all Services ]
                </a>-->
                <!--<a href="javascript:history.back()" class="breadcrumbStyle_link">
                    [ Back ]
                </a>-->
            <? //} ?>
            
        <!--</div>
        <div id="servicesDetails_container" class="generalText_2 details_container">
            <ul class="servicesList">
            	<li class="servicesListItem" id="servicesListItem_MaterialsProcurement">
                	Materials/Equipment procurement
                    <ul class="servicesSubList">
                    	<li class="servicesSubListItem">
                        	Oil Tools
                        </li>
                    	<li class="servicesSubListItem">
                        	Electrical Equipment<span class="generalText_2"> - Generators, Transformers, Relays, Meters,...</span>
                        </li>
                        <li class="servicesSubListItem">
                        	Rotating Equipment<span class="generalText_2"> - Pumps, Compressors,...</span>
                        </li>
                        <li class="servicesSubListItem">
                        	Heavy Equipment<span class="generalText_2"> - Cranes, Excavators, Concrete mixers, Loaders, Carriers,...</span>
                        </li>
                        <li class="servicesSubListItem">
                        	Inspection Equipment<span class="generalText_2"> - Surface profile, Coating thickness, Abrasion, Adhesion,...</span>
                        </li>
                        <li class="servicesSubListItem">
                        	Instrument and Control Equipment<span class="generalText_2"></span>
                        </li>
                        <li class="servicesSubListItem">
                        	Water Treatment Equipment<span class="generalText_2"></span>
                        </li>
                        <li class="servicesSubListItem">
                        	Safety Materials<span class="generalText_2"></span>
                        </li>
                        <li class="servicesSubListItem">
                        	Pipeline Equipment<span class="generalText_2"> - Valves and Operators; Closures, Flanges, Fittings and Miscellaneous equipment,...</span>
                        </li>
                    </ul><!--end subList-->
		    <br/>
		    <div class="notices">
			<a href="http://eqsupply.aerixnigeria.com/" class="breadcrumbStyle_link" style="font-weight:normal">Check out our web-based Equipment Procurement System. Don't forget to tell us what you think.</a>
		    </div>
                </li><!--end listItem-->
                <li class="servicesListItem" id="servicesListItem_ConsultancyServices">
                	Consultancy Services
                    <ul class="servicesSubList">
                    	<li class="servicesSubListItem">
                        	Logistics and Supply Chain Consulting
                        </li>
                    	<li class="servicesSubListItem">
                        	Strategy Consulting
                        </li>
                    	<li class="servicesSubListItem">
                        	Specialized Technical Consulting for the Oil and Gas industry
                        </li>
                    </ul>
                </li><!--end listItem-->
                <li class="servicesListItem" id="servicesListItem_OilGasOutsourcing">
                	Outsourcing services to the Oil and Gas industry
                    <ul class="servicesSubList">
			<li class="servicesSubListItem">
			    Marine Logistics
			</li>
                    	<li class="servicesSubListItem">
                        	Corrosion Protection
                        </li>
                    	<li class="servicesSubListItem">
                        	Pipeline Coatings
                        </li>
                    	<li class="servicesSubListItem">
                        	Data Center Management
                        </li>
                    	<li class="servicesSubListItem">
                        	Call Center Management
                        </li>
                    </ul>
                </li><!--end listItem-->
                <li class="servicesListItem" id="servicesListItem_OilGasFocalPoint">
                	Local focal point for off shore vendors in the Oil and Gas Industry
                    <ul class="servicesSubList">
                    	<li class="servicesSubListItem">
                        	Local Representation for foreign companies in accordance with the Nigerian Content Directives
                        </li>
                    	<li class="servicesSubListItem">
                        	Skill acquisition for Nigerian professional via Specialized Technology Transfer Initiatives
                        </li>
                    </ul>
                </li><!--end listItem-->
            </ul><!--end list-->
        </div>-->
       
        <script language="javascript" type="text/javascript">
			showHideServicesItems( <?=$i;?> );			
			
			function showHideServicesItems( i ){				
				var id1 = "servicesListItem_MaterialsProcurement";
				var id2 = "servicesListItem_ConsultancyServices";
				var id3 = "servicesListItem_OilGasOutsourcing";
				var id4 = "servicesListItem_OilGasFocalPoint";
				switch( i ){
					case 1:
						element( id2 ).style.display = "none";
						element( id3 ).style.display = "none";
						element( id4 ).style.display = "none";
						break;
					case 2:
						element( id1 ).style.display = "none";
						element( id3 ).style.display = "none";
						element( id4 ).style.display = "none";
						break;
					case 3:
						element( id2 ).style.display = "none";
						element( id1 ).style.display = "none";
						element( id4 ).style.display = "none";
						break;
					case 4:
						element( id2 ).style.display = "none";
						element( id3 ).style.display = "none";
						element( id1 ).style.display = "none";
						break;
					default:
						break;
				}//end switch
			}
			function element( elementId ){
				return document.getElementById( elementId );
			}
		</script>
    <!--</td>
</tr>
</table>-->
