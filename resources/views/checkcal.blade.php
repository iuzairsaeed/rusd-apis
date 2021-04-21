<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 5px;
		  text-align: right;    
		}

		table.tableizer-table {
		font-size: 12px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}

</style>
</head>
<body>
	<!-- 

=C10+(C15*30)+4 -->

	<form>
		<table border="1" align="center">
			<tr>
				<!-- C10 -->
				<td>Target First Investment  (C10)</td>
				<td><input type="text" name="first_investment"></td>
			</tr>

			<tr>
				<td>Investment Frequency</td>
				<td><input type="text" name="first_frequency"></td>
			</tr>

			<tr>
				<td>Periodic Investment amount</td>
				<td><input type="text" name="periodic_investment_amount"></td>
			</tr>


			<tr>
				<td>How liquid you intend to be</td>
				<td><input type="text" name="liquid_intend"></td>
				
			</tr>

			<tr>
				<td>Target Investment Horizon  (C15)</td>
				<td><input type="text" name="target_investment_horizon" value="{{old('target_investment_horizon')}}"></td>
				
			</tr>

			<tr>
				<td colspan="2" align="right"><input type="submit" name="submit"></td>
			</tr>



			



		</table>

<!-- <style type="text/css">
table.tableizer-table {
font-size: 12px;
border: 1px solid #CCC; 
font-family: Arial, Helvetica, sans-serif;
} 
.tableizer-table td {
padding: 4px;
margin: 3px;
border: 1px solid #CCC;
}
.tableizer-table th {
background-color: #104E8B; 
color: #FFF;
font-weight: bold;
}
</style>


<table class="tableizer-table">
   <thead>
      <tr class="tableizer-firstrow">
         <th></th>
         <th>Equity</th>
         <th>Profit Rate</th>
         <th>No of days</th>
         <th>Profits</th>
         <th>Total</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>1-May</td>
         <td>&nbsp;</td>
         <td>2%</td>
         <td>394</td>
         <td>  -   </td>
         <td>  -   </td>
      </tr>
      <tr>
         <td>1-Jun</td>
         <td>  100 </td>
         <td>2%</td>
         <td>363</td>
         <td>  1.99 </td>
         <td>  101.99 </td>
      </tr>
      <tr>
         <td>1-Jul</td>
         <td>  100 </td>
         <td>2%</td>
         <td>333</td>
         <td>  1.82 </td>
         <td>  101.82 </td>
      </tr>
      <tr>
         <td>1-Aug</td>
         <td>  100 </td>
         <td>2%</td>
         <td>302</td>
         <td>  1.65 </td>
         <td>  101.65 </td>
      </tr>
      <tr>
         <td>1-Sep</td>
         <td>  100 </td>
         <td>2%</td>
         <td>271</td>
         <td>  1.48 </td>
         <td>  101.48 </td>
      </tr>
      <tr>
         <td>1-Oct</td>
         <td>  100 </td>
         <td>2%</td>
         <td>241</td>
         <td>  1.32 </td>
         <td>  101.32 </td>
      </tr>
      <tr>
         <td>1-Nov</td>
         <td>  100 </td>
         <td>2%</td>
         <td>210</td>
         <td>  1.15 </td>
         <td>  101.15 </td>
      </tr>
      <tr>
         <td>1-Dec</td>
         <td>  100 </td>
         <td>2%</td>
         <td>180</td>
         <td>  0.99 </td>
         <td>  100.99 </td>
      </tr>
      <tr>
         <td>1-Jan</td>
         <td>  100 </td>
         <td>2%</td>
         <td>149</td>
         <td>  0.82 </td>
         <td>  100.82 </td>
      </tr>
      <tr>
         <td>1-Feb</td>
         <td>  100 </td>
         <td>2%</td>
         <td>118</td>
         <td>  0.65 </td>
         <td>  100.65 </td>
      </tr>
      <tr>
         <td>1-Mar</td>
         <td>  100 </td>
         <td>2%</td>
         <td>90</td>
         <td>  0.49 </td>
         <td>  100.49 </td>
      </tr>
      <tr>
         <td>1-Apr</td>
         <td>  100 </td>
         <td>2%</td>
         <td>59</td>
         <td>  0.32 </td>
         <td>  100.32 </td>
      </tr>
      <tr>
         <td>1-May</td>
         <td>  100 </td>
         <td>2%</td>
         <td>29</td>
         <td>  0.16 </td>
         <td>  100.16</td>
      </tr>
   </tbody>
</table>
 -->

	</form>

	{!! isset($table) ?   $table  : '' !!}

</body>
</html>