@extends('layout')

@section('content')
<table class="table">
<thead>
<tr>
<th>
#
</th>
<th>
Product
</th>
<th>
Payment Taken
</th>
<th>
Status
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
1
</td>
<td>
TB - Monthly
</td>
<td>
01/04/2012
</td>
<td>
Default
</td>
</tr>
<tr class="active">
<td>
1
</td>
<td>
TB - Monthly
</td>
<td>
01/04/2012
</td>
<td>
Approved
</td>
</tr>
<tr class="success">
<td>
2
</td>
<td>
TB - Monthly
</td>
<td>
02/04/2012
</td>
<td>
Declined
</td>
</tr>
<tr class="warning">
<td>
3
</td>
<td>
TB - Monthly
</td>
<td>
03/04/2012
</td>
<td>
Pending
</td>
</tr>
<tr class="danger">
<td>
4
</td>
<td>
TB - Monthly
</td>
<td>
04/04/2012
</td>
<td>
Call in to confirm
</td>
</tr>
</tbody>
</table>
@endsection
