@extends('layouts.default')
@section('title','支出汇总')
@section('content')
		<div class="body">
			<h1 style="text-align: center;">支出统计图</h1>
		</div>

		<div style="margin-left:auto;
								margin-right:auto;
								width:30%;">
			<canvas id="myChart" width="200" height="200"></canvas>
		</div>

		<script src="{{ asset('js/Chart.min.js') }}"></script>
		<script>
				var ctx = document.getElementById("myChart").getContext('2d');
				var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
								labels: ["餐费", "应酬", "礼金", "车费","其他"],
								datasets: [{
										label: '支出汇总',
										data: [{!! $dataList['food'] !!}, {!! $dataList['part'] !!}, {!! $dataList['gift'] !!}, {!! $dataList['fare'] !!}, {!! $dataList['other'] !!}],
										backgroundColor: [
												'rgba(255, 99, 132, 0.2)',
												'rgba(54, 162, 235, 0.2)',
												'rgba(255, 206, 86, 0.2)',
												'rgba(75, 192, 192, 0.2)',
												'rgba(153, 102, 255, 0.2)'
										],
										borderColor: [
												'rgba(255,99,132,1)',
												'rgba(54, 162, 235, 1)',
												'rgba(255, 206, 86, 1)',
												'rgba(75, 192, 192, 1)',
												'rgba(153, 102, 255, 1)'
										],
										borderWidth: 1
								}]
						},
						options: {
								scales: {
										yAxes: [{
												ticks: {
														beginAtZero:true
												}
										}]
								},
								legend: {
									display: false
								}
						}
				});
		</script>
@stop
<style>
	div.addBody{
		margin-top: 50px;
	}
</style>
