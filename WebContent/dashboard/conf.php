<div class="container-fluid">
    <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title">
            </div>
          <div class="widget-content nopadding">
              
              
              
              <?php

include 'include/dbconfig2.php';


				$sql = "SELECT * FROM conferences ";
				$result = $conn->query($sql);


				echo '<table class="table table-bordered data-table">';
				echo '<thead>
									<tr>
										<th>No.</th>
										<th>Name</th>
										<th>Location</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Picture</th>
										<th>Description</th>
										<th>Publisher</th>
										<th>Rank</th>
                                        <th> Action </th>
									</tr>
                                    
								</thead>';
				echo'<tbody id="InvoiceTableBody">';
				$number_item=0;
				if ($result->num_rows > 0) {
                                     $count=1;
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$number_item+=1;
                        $name=$row["name"];
                        $location=$row["location"];
                        $startDate=$row["startDate"];
                        $endDate=$row["endDate"];
                        $picture=$row["picture"];
                        $description=$row["description"];
                        $publisher=$row["publisher"];
                        $rank=$row["rank"];
						
						
                        //put a condition to check if the start date is soon or middle or far away
   
                        $date1=date_create(date("Y-m-d"));
                        $date2=date_create($startDate);
                        $diff=date_diff($date1,$date2);

                        $diff->format("%a"); 
                        
                        
                        $daysRemaining = $diff->format('%a');
                        
						if ($daysRemaining >= 30)
						echo '<tr class="success">';
                        
						else if (($daysRemaining >= 15) && ($daysRemaining >= 29))
						echo '<tr class="info">';
                        
						else if ($daysRemaining <= 15)
						echo '<tr class="danger">';
                        
                        
						else echo '<tr>';
                        
						echo '
							<td>'.$number_item.'</td>
							<td id="name'.$count.'">'.$name.'</td>
							<td>'.$location.'</td>
							<td>'.$startDate.'</td>
							<td>'.$endDate.'</td>
							<td>'.$picture.'</td>
							<td>'.$description.'</td>
							<td>'.$publisher.'</td>
							<td>'.$rank.'</td>
                            <td> 
                                <a href="#" class="btn btn-primary btn-mini">Edit</a>
                                <a href="#" class="btn btn-danger btn-mini" onclick="removeCRequest('.$count.')">Delete</a>
                            </td>
						   </tr>';

					$count++;}
				}
				echo'</tbody>';
				echo '</table>';
				echo '</div>';
				?>
              
              
        </div>
       
    </div>
  </div>
</div>