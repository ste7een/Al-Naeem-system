@extends('layouts.master')
@section('title', 'Home')
@section('content')
  

<section class="slice py-5 bg-section-fade">
	<div class="container">
		<div class="row align-items-center mb-4">
			<div class="col">
				<!-- Title -->
				<h1 class="h4 mb-0">
					accountant
				</h1>
			</div>
		</div>
		<!-- Stats -->
		<div class="row mx-n2">
			<div class="col-lg-3 col-sm-6 px-2">
				<div class="card">
					<div class="card-body text-center">
						<div class="mb-3">
							<div class="icon icon-shape icon-md bg-primary shadow-primary text-white">
								<i class="fas fa-wallet"></i>
							</div>
						</div>
						<!-- Title -->
						<h5 class="h3 font-weight-bolder mb-1">$25,370.00</h5>
						<!-- Subtitle -->
						<span class="d-block text-sm text-muted font-weight-bold">
							Global Budget
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up text-success"><polyline points="18 15 12 9 6 15"></polyline></svg>
						</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 px-2">
				<div class="card">
					<div class="card-body text-center">
						<div class="mb-3">
							<div class="icon icon-shape icon-md bg-danger shadow-danger text-white">
								<i class="fas fa-cash-register"></i>
							</div>
						</div>
						<!-- Title -->
						<h5 class="h3 font-weight-bolder mb-1">$5,370.00</h5>
						<!-- Subtitle -->
						<span class="d-block text-sm text-muted font-weight-bold">
							Today's Income
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down text-danger"><polyline points="6 9 12 15 18 9"></polyline></svg>
						</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 px-2">
				<div class="card">
					<div class="card-body text-center">
						<div class="mb-3">
							<div class="icon icon-shape icon-md bg-warning shadow-warning text-white">
								<i class="fas fa-shopping-basket"></i>
							</div>
						</div>
						<!-- Title -->
						<h5 class="h3 font-weight-bolder mb-1">$2,370.00</h5>
						<!-- Subtitle -->
						<span class="d-block text-sm text-muted font-weight-bold">
							Spendings
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down text-danger"><polyline points="6 9 12 15 18 9"></polyline></svg>
						</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 px-2">
				<div class="card">
					<div class="card-body text-center">
						<div class="mb-3">
							<div class="icon icon-shape icon-md bg-success shadow-success text-white">
								<i class="fas fa-receipt"></i>
							</div>
						</div>
						<!-- Title -->
						<h5 class="h3 font-weight-bolder mb-1">863</h5>
						<!-- Subtitle -->
						<span class="d-block text-sm text-muted font-weight-bold">
							Today's Orders
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up text-success"><polyline points="18 15 12 9 6 15"></polyline></svg>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Chart + Stats -->
		<div class="row">
			<div class="col-lg-8">
				<div class="card card-fluid">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col">
								<span class="h6">Orders</span>
							</div>
							<div class="col-auto">
								<div class="custom-control custom-radio">
									<input type="checkbox" class="custom-control-input" id="checkChartLegendRefunds" onchange="ApexOrdersChart.toggleSeries(this)" value="Rejected" checked="">
									<label class="custom-control-label h6 text-sm lh-200 text-muted" for="checkChartLegendRefunds">Show refunds</label>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body pt-2 pb-0 px-2" style="position: relative;">
						<!-- Chart -->
						<div id="apex-orders" data-height="200" style="min-height: 215px;"><div id="apexchartszp84gyu9l" class="apexcharts-canvas apexchartszp84gyu9l light" style="width: 712px; height: 200px;"><svg id="SvgjsSvg1096" width="712" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1098" class="apexcharts-inner apexcharts-graphical" transform="translate(58.703125, 30)"><defs id="SvgjsDefs1097"><linearGradient id="SvgjsLinearGradient1101" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1102" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1103" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1104" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskzp84gyu9l"><rect id="SvgjsRect1106" width="643.296875" height="125.72999999999999" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskzp84gyu9l"><rect id="SvgjsRect1107" width="645.296875" height="127.72999999999999" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1105" width="53.608072916666664" height="125.72999999999999" x="216.86902225378785" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient1101)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="125.72999999999999" filter="none" fill-opacity="0.9" x1="216.86902225378785" x2="216.86902225378785"></rect><g id="SvgjsG1136" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1137" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1138" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="26.804036458333332" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1139" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Jan</tspan><title>Jan</title></text><text id="SvgjsText1140" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="80.412109375" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1141" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Feb</tspan><title>Feb</title></text><text id="SvgjsText1142" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="134.02018229166666" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1143" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Mar</tspan><title>Mar</title></text><text id="SvgjsText1144" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="187.62825520833331" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1145" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Apr</tspan><title>Apr</title></text><text id="SvgjsText1146" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="241.23632812499997" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1147" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">May</tspan><title>May</title></text><text id="SvgjsText1148" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="294.8444010416667" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1149" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Jun</tspan><title>Jun</title></text><text id="SvgjsText1150" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="348.45247395833337" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1151" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Jul</tspan><title>Jul</title></text><text id="SvgjsText1152" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="402.06054687500006" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1153" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Aug</tspan><title>Aug</title></text><text id="SvgjsText1154" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="455.66861979166674" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1155" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Sep</tspan><title>Sep</title></text><text id="SvgjsText1156" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="509.2766927083334" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1157" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Oct</tspan><title>Oct</title></text><text id="SvgjsText1158" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="562.884765625" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1159" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Nov</tspan><title>Nov</title></text><text id="SvgjsText1160" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="616.4928385416666" y="154.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#adb5bd" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;"><tspan id="SvgjsTspan1161" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1169" class="apexcharts-grid"><g id="SvgjsG1170" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1172" x1="0" y1="0" x2="643.296875" y2="0" stroke="#e9ecef" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine1173" x1="0" y1="31.432499999999997" x2="643.296875" y2="31.432499999999997" stroke="#e9ecef" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine1174" x1="0" y1="62.864999999999995" x2="643.296875" y2="62.864999999999995" stroke="#e9ecef" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine1175" x1="0" y1="94.29749999999999" x2="643.296875" y2="94.29749999999999" stroke="#e9ecef" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine1176" x1="0" y1="125.72999999999999" x2="643.296875" y2="125.72999999999999" stroke="#e9ecef" stroke-dasharray="3" class="apexcharts-gridline"></line></g><g id="SvgjsG1171" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1178" x1="0" y1="125.72999999999999" x2="643.296875" y2="125.72999999999999" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1177" x1="0" y1="1" x2="0" y2="125.72999999999999" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1109" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1110" class="apexcharts-series" rel="1" seriesName="Delivered" data:realIndex="0"><path id="SvgjsPath1112" d="M 23.392613636363638 125.72999999999999L 23.392613636363638 74.80453835227273Q 26.316690340909094 71.88046164772727 29.240767045454547 74.80453835227273L 29.240767045454547 125.72999999999999L 23.392613636363638 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 23.392613636363638 125.72999999999999L 23.392613636363638 74.80453835227273Q 26.316690340909094 71.88046164772727 29.240767045454547 74.80453835227273L 29.240767045454547 125.72999999999999L 23.392613636363638 125.72999999999999" pathFrom="M 23.392613636363638 125.72999999999999L 23.392613636363638 125.72999999999999L 29.240767045454547 125.72999999999999L 29.240767045454547 125.72999999999999L 23.392613636363638 125.72999999999999" cy="73.3425" cx="81.87414772727273" j="0" val="50" barHeight="52.387499999999996" barWidth="5.8481534090909095"></path><path id="SvgjsPath1113" d="M 81.87414772727273 125.72999999999999L 81.87414772727273 95.75953835227271Q 84.79822443181818 92.83546164772726 87.72230113636364 95.75953835227271L 87.72230113636364 125.72999999999999L 81.87414772727273 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 81.87414772727273 125.72999999999999L 81.87414772727273 95.75953835227271Q 84.79822443181818 92.83546164772726 87.72230113636364 95.75953835227271L 87.72230113636364 125.72999999999999L 81.87414772727273 125.72999999999999" pathFrom="M 81.87414772727273 125.72999999999999L 81.87414772727273 125.72999999999999L 87.72230113636364 125.72999999999999L 87.72230113636364 125.72999999999999L 81.87414772727273 125.72999999999999" cy="94.29749999999999" cx="140.35568181818184" j="1" val="30" barHeight="31.432499999999997" barWidth="5.8481534090909095"></path><path id="SvgjsPath1114" d="M 140.35568181818184 125.72999999999999L 140.35568181818184 85.28203835227272Q 143.2797585227273 82.35796164772727 146.20383522727275 85.28203835227272L 146.20383522727275 125.72999999999999L 140.35568181818184 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 140.35568181818184 125.72999999999999L 140.35568181818184 85.28203835227272Q 143.2797585227273 82.35796164772727 146.20383522727275 85.28203835227272L 146.20383522727275 125.72999999999999L 140.35568181818184 125.72999999999999" pathFrom="M 140.35568181818184 125.72999999999999L 140.35568181818184 125.72999999999999L 146.20383522727275 125.72999999999999L 146.20383522727275 125.72999999999999L 140.35568181818184 125.72999999999999" cy="83.82" cx="198.83721590909093" j="2" val="40" barHeight="41.91" barWidth="5.8481534090909095"></path><path id="SvgjsPath1115" d="M 198.83721590909093 125.72999999999999L 198.83721590909093 64.32703835227272Q 201.76129261363639 61.40296164772727 204.68536931818184 64.32703835227272L 204.68536931818184 125.72999999999999L 198.83721590909093 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 198.83721590909093 125.72999999999999L 198.83721590909093 64.32703835227272Q 201.76129261363639 61.40296164772727 204.68536931818184 64.32703835227272L 204.68536931818184 125.72999999999999L 198.83721590909093 125.72999999999999" pathFrom="M 198.83721590909093 125.72999999999999L 198.83721590909093 125.72999999999999L 204.68536931818184 125.72999999999999L 204.68536931818184 125.72999999999999L 198.83721590909093 125.72999999999999" cy="62.864999999999995" cx="257.31875" j="3" val="60" barHeight="62.864999999999995" barWidth="5.8481534090909095"></path><path id="SvgjsPath1116" d="M 257.31875 125.72999999999999L 257.31875 43.372038352272725Q 260.24282670454545 40.44796164772727 263.16690340909093 43.372038352272725L 263.16690340909093 125.72999999999999L 257.31875 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 257.31875 125.72999999999999L 257.31875 43.372038352272725Q 260.24282670454545 40.44796164772727 263.16690340909093 43.372038352272725L 263.16690340909093 125.72999999999999L 257.31875 125.72999999999999" pathFrom="M 257.31875 125.72999999999999L 257.31875 125.72999999999999L 263.16690340909093 125.72999999999999L 263.16690340909093 125.72999999999999L 257.31875 125.72999999999999" cy="41.91" cx="315.80028409090914" j="4" val="80" barHeight="83.82" barWidth="5.8481534090909095"></path><path id="SvgjsPath1117" d="M 315.80028409090914 125.72999999999999L 315.80028409090914 22.417038352272726Q 318.7243607954546 19.49296164772727 321.64843750000006 22.417038352272726L 321.64843750000006 125.72999999999999L 315.80028409090914 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 315.80028409090914 125.72999999999999L 315.80028409090914 22.417038352272726Q 318.7243607954546 19.49296164772727 321.64843750000006 22.417038352272726L 321.64843750000006 125.72999999999999L 315.80028409090914 125.72999999999999" pathFrom="M 315.80028409090914 125.72999999999999L 315.80028409090914 125.72999999999999L 321.64843750000006 125.72999999999999L 321.64843750000006 125.72999999999999L 315.80028409090914 125.72999999999999" cy="20.955" cx="374.28181818181827" j="5" val="100" barHeight="104.77499999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1118" d="M 374.28181818181827 125.72999999999999L 374.28181818181827 32.89453835227273Q 377.2058948863637 29.970461647727276 380.1299715909092 32.89453835227273L 380.1299715909092 125.72999999999999L 374.28181818181827 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 374.28181818181827 125.72999999999999L 374.28181818181827 32.89453835227273Q 377.2058948863637 29.970461647727276 380.1299715909092 32.89453835227273L 380.1299715909092 125.72999999999999L 374.28181818181827 125.72999999999999" pathFrom="M 374.28181818181827 125.72999999999999L 374.28181818181827 125.72999999999999L 380.1299715909092 125.72999999999999L 380.1299715909092 125.72999999999999L 374.28181818181827 125.72999999999999" cy="31.432500000000005" cx="432.7633522727274" j="6" val="90" barHeight="94.29749999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1119" d="M 432.7633522727274 125.72999999999999L 432.7633522727274 32.89453835227273Q 435.6874289772728 29.970461647727276 438.6115056818183 32.89453835227273L 438.6115056818183 125.72999999999999L 432.7633522727274 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 432.7633522727274 125.72999999999999L 432.7633522727274 32.89453835227273Q 435.6874289772728 29.970461647727276 438.6115056818183 32.89453835227273L 438.6115056818183 125.72999999999999L 432.7633522727274 125.72999999999999" pathFrom="M 432.7633522727274 125.72999999999999L 432.7633522727274 125.72999999999999L 438.6115056818183 125.72999999999999L 438.6115056818183 125.72999999999999L 432.7633522727274 125.72999999999999" cy="31.432500000000005" cx="491.2448863636365" j="7" val="90" barHeight="94.29749999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1120" d="M 491.2448863636365 125.72999999999999L 491.2448863636365 53.84953835227273Q 494.16896306818194 50.925461647727275 497.0930397727274 53.84953835227273L 497.0930397727274 125.72999999999999L 491.2448863636365 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 491.2448863636365 125.72999999999999L 491.2448863636365 53.84953835227273Q 494.16896306818194 50.925461647727275 497.0930397727274 53.84953835227273L 497.0930397727274 125.72999999999999L 491.2448863636365 125.72999999999999" pathFrom="M 491.2448863636365 125.72999999999999L 491.2448863636365 125.72999999999999L 497.0930397727274 125.72999999999999L 497.0930397727274 125.72999999999999L 491.2448863636365 125.72999999999999" cy="52.3875" cx="549.7264204545456" j="8" val="70" barHeight="73.34249999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1121" d="M 549.7264204545456 125.72999999999999L 549.7264204545456 32.89453835227273Q 552.6504971590911 29.970461647727276 555.5745738636365 32.89453835227273L 555.5745738636365 125.72999999999999L 549.7264204545456 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 549.7264204545456 125.72999999999999L 549.7264204545456 32.89453835227273Q 552.6504971590911 29.970461647727276 555.5745738636365 32.89453835227273L 555.5745738636365 125.72999999999999L 549.7264204545456 125.72999999999999" pathFrom="M 549.7264204545456 125.72999999999999L 549.7264204545456 125.72999999999999L 555.5745738636365 125.72999999999999L 555.5745738636365 125.72999999999999L 549.7264204545456 125.72999999999999" cy="31.432500000000005" cx="608.2079545454548" j="9" val="90" barHeight="94.29749999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1122" d="M 608.2079545454548 125.72999999999999L 608.2079545454548 22.417038352272726Q 611.1320312500002 19.49296164772727 614.0561079545456 22.417038352272726L 614.0561079545456 125.72999999999999L 608.2079545454548 125.72999999999999" fill="rgba(0,138,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 608.2079545454548 125.72999999999999L 608.2079545454548 22.417038352272726Q 611.1320312500002 19.49296164772727 614.0561079545456 22.417038352272726L 614.0561079545456 125.72999999999999L 608.2079545454548 125.72999999999999" pathFrom="M 608.2079545454548 125.72999999999999L 608.2079545454548 125.72999999999999L 614.0561079545456 125.72999999999999L 614.0561079545456 125.72999999999999L 608.2079545454548 125.72999999999999" cy="20.955" cx="666.6894886363639" j="10" val="100" barHeight="104.77499999999999" barWidth="5.8481534090909095"></path><g id="SvgjsG1111" class="apexcharts-datalabels"></g></g><g id="SvgjsG1123" class="apexcharts-series" rel="2" seriesName="Rejected" data:realIndex="1"><path id="SvgjsPath1125" d="M 29.240767045454547 125.72999999999999L 29.240767045454547 111.47578835227272Q 32.16484375 108.55171164772726 35.08892045454546 111.47578835227272L 35.08892045454546 125.72999999999999L 29.240767045454547 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 29.240767045454547 125.72999999999999L 29.240767045454547 111.47578835227272Q 32.16484375 108.55171164772726 35.08892045454546 111.47578835227272L 35.08892045454546 125.72999999999999L 29.240767045454547 125.72999999999999" pathFrom="M 29.240767045454547 125.72999999999999L 29.240767045454547 125.72999999999999L 35.08892045454546 125.72999999999999L 35.08892045454546 125.72999999999999L 29.240767045454547 125.72999999999999" cy="110.01374999999999" cx="87.72230113636364" j="0" val="15" barHeight="15.716249999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1126" d="M 87.72230113636364 125.72999999999999L 87.72230113636364 106.23703835227272Q 90.6463778409091 103.31296164772726 93.57045454545455 106.23703835227272L 93.57045454545455 125.72999999999999L 87.72230113636364 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 87.72230113636364 125.72999999999999L 87.72230113636364 106.23703835227272Q 90.6463778409091 103.31296164772726 93.57045454545455 106.23703835227272L 93.57045454545455 125.72999999999999L 87.72230113636364 125.72999999999999" pathFrom="M 87.72230113636364 125.72999999999999L 87.72230113636364 125.72999999999999L 93.57045454545455 125.72999999999999L 93.57045454545455 125.72999999999999L 87.72230113636364 125.72999999999999" cy="104.77499999999999" cx="146.20383522727275" j="1" val="20" barHeight="20.955" barWidth="5.8481534090909095"></path><path id="SvgjsPath1127" d="M 146.20383522727275 125.72999999999999L 146.20383522727275 106.23703835227272Q 149.1279119318182 103.31296164772726 152.05198863636366 106.23703835227272L 152.05198863636366 125.72999999999999L 146.20383522727275 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 146.20383522727275 125.72999999999999L 146.20383522727275 106.23703835227272Q 149.1279119318182 103.31296164772726 152.05198863636366 106.23703835227272L 152.05198863636366 125.72999999999999L 146.20383522727275 125.72999999999999" pathFrom="M 146.20383522727275 125.72999999999999L 146.20383522727275 125.72999999999999L 152.05198863636366 125.72999999999999L 152.05198863636366 125.72999999999999L 146.20383522727275 125.72999999999999" cy="104.77499999999999" cx="204.68536931818184" j="2" val="20" barHeight="20.955" barWidth="5.8481534090909095"></path><path id="SvgjsPath1128" d="M 204.68536931818184 125.72999999999999L 204.68536931818184 111.47578835227272Q 207.6094460227273 108.55171164772726 210.53352272727275 111.47578835227272L 210.53352272727275 125.72999999999999L 204.68536931818184 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 204.68536931818184 125.72999999999999L 204.68536931818184 111.47578835227272Q 207.6094460227273 108.55171164772726 210.53352272727275 111.47578835227272L 210.53352272727275 125.72999999999999L 204.68536931818184 125.72999999999999" pathFrom="M 204.68536931818184 125.72999999999999L 204.68536931818184 125.72999999999999L 210.53352272727275 125.72999999999999L 210.53352272727275 125.72999999999999L 204.68536931818184 125.72999999999999" cy="110.01374999999999" cx="263.16690340909093" j="3" val="15" barHeight="15.716249999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1129" d="M 263.16690340909093 125.72999999999999L 263.16690340909093 111.47578835227272Q 266.09098011363636 108.55171164772726 269.01505681818185 111.47578835227272L 269.01505681818185 125.72999999999999L 263.16690340909093 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 263.16690340909093 125.72999999999999L 263.16690340909093 111.47578835227272Q 266.09098011363636 108.55171164772726 269.01505681818185 111.47578835227272L 269.01505681818185 125.72999999999999L 263.16690340909093 125.72999999999999" pathFrom="M 263.16690340909093 125.72999999999999L 263.16690340909093 125.72999999999999L 269.01505681818185 125.72999999999999L 269.01505681818185 125.72999999999999L 263.16690340909093 125.72999999999999" cy="110.01374999999999" cx="321.64843750000006" j="4" val="15" barHeight="15.716249999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1130" d="M 321.64843750000006 125.72999999999999L 321.64843750000006 95.75953835227271Q 324.5725142045455 92.83546164772726 327.49659090909097 95.75953835227271L 327.49659090909097 125.72999999999999L 321.64843750000006 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 321.64843750000006 125.72999999999999L 321.64843750000006 95.75953835227271Q 324.5725142045455 92.83546164772726 327.49659090909097 95.75953835227271L 327.49659090909097 125.72999999999999L 321.64843750000006 125.72999999999999" pathFrom="M 321.64843750000006 125.72999999999999L 321.64843750000006 125.72999999999999L 327.49659090909097 125.72999999999999L 327.49659090909097 125.72999999999999L 321.64843750000006 125.72999999999999" cy="94.29749999999999" cx="380.1299715909092" j="5" val="30" barHeight="31.432499999999997" barWidth="5.8481534090909095"></path><path id="SvgjsPath1131" d="M 380.1299715909092 125.72999999999999L 380.1299715909092 106.23703835227272Q 383.0540482954546 103.31296164772726 385.9781250000001 106.23703835227272L 385.9781250000001 125.72999999999999L 380.1299715909092 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 380.1299715909092 125.72999999999999L 380.1299715909092 106.23703835227272Q 383.0540482954546 103.31296164772726 385.9781250000001 106.23703835227272L 385.9781250000001 125.72999999999999L 380.1299715909092 125.72999999999999" pathFrom="M 380.1299715909092 125.72999999999999L 380.1299715909092 125.72999999999999L 385.9781250000001 125.72999999999999L 385.9781250000001 125.72999999999999L 380.1299715909092 125.72999999999999" cy="104.77499999999999" cx="438.6115056818183" j="6" val="20" barHeight="20.955" barWidth="5.8481534090909095"></path><path id="SvgjsPath1132" d="M 438.6115056818183 125.72999999999999L 438.6115056818183 111.47578835227272Q 441.5355823863637 108.55171164772726 444.4596590909092 111.47578835227272L 444.4596590909092 125.72999999999999L 438.6115056818183 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 438.6115056818183 125.72999999999999L 438.6115056818183 111.47578835227272Q 441.5355823863637 108.55171164772726 444.4596590909092 111.47578835227272L 444.4596590909092 125.72999999999999L 438.6115056818183 125.72999999999999" pathFrom="M 438.6115056818183 125.72999999999999L 438.6115056818183 125.72999999999999L 444.4596590909092 125.72999999999999L 444.4596590909092 125.72999999999999L 438.6115056818183 125.72999999999999" cy="110.01374999999999" cx="497.0930397727274" j="7" val="15" barHeight="15.716249999999999" barWidth="5.8481534090909095"></path><path id="SvgjsPath1133" d="M 497.0930397727274 125.72999999999999L 497.0930397727274 95.75953835227271Q 500.01711647727285 92.83546164772726 502.94119318181833 95.75953835227271L 502.94119318181833 125.72999999999999L 497.0930397727274 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 497.0930397727274 125.72999999999999L 497.0930397727274 95.75953835227271Q 500.01711647727285 92.83546164772726 502.94119318181833 95.75953835227271L 502.94119318181833 125.72999999999999L 497.0930397727274 125.72999999999999" pathFrom="M 497.0930397727274 125.72999999999999L 497.0930397727274 125.72999999999999L 502.94119318181833 125.72999999999999L 502.94119318181833 125.72999999999999L 497.0930397727274 125.72999999999999" cy="94.29749999999999" cx="555.5745738636365" j="8" val="30" barHeight="31.432499999999997" barWidth="5.8481534090909095"></path><path id="SvgjsPath1134" d="M 555.5745738636365 125.72999999999999L 555.5745738636365 106.23703835227272Q 558.4986505681819 103.31296164772726 561.4227272727273 106.23703835227272L 561.4227272727273 125.72999999999999L 555.5745738636365 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 555.5745738636365 125.72999999999999L 555.5745738636365 106.23703835227272Q 558.4986505681819 103.31296164772726 561.4227272727273 106.23703835227272L 561.4227272727273 125.72999999999999L 555.5745738636365 125.72999999999999" pathFrom="M 555.5745738636365 125.72999999999999L 555.5745738636365 125.72999999999999L 561.4227272727273 125.72999999999999L 561.4227272727273 125.72999999999999L 555.5745738636365 125.72999999999999" cy="104.77499999999999" cx="614.0561079545456" j="9" val="20" barHeight="20.955" barWidth="5.8481534090909095"></path><path id="SvgjsPath1135" d="M 614.0561079545456 125.72999999999999L 614.0561079545456 95.75953835227271Q 616.980184659091 92.83546164772726 619.9042613636365 95.75953835227271L 619.9042613636365 125.72999999999999L 614.0561079545456 125.72999999999999" fill="rgba(255,190,61,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskzp84gyu9l)" pathTo="M 614.0561079545456 125.72999999999999L 614.0561079545456 95.75953835227271Q 616.980184659091 92.83546164772726 619.9042613636365 95.75953835227271L 619.9042613636365 125.72999999999999L 614.0561079545456 125.72999999999999" pathFrom="M 614.0561079545456 125.72999999999999L 614.0561079545456 125.72999999999999L 619.9042613636365 125.72999999999999L 619.9042613636365 125.72999999999999L 614.0561079545456 125.72999999999999" cy="94.29749999999999" cx="672.5376420454547" j="10" val="30" barHeight="31.432499999999997" barWidth="5.8481534090909095"></path><g id="SvgjsG1124" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1179" x1="0" y1="0" x2="643.296875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1180" x1="0" y1="0" x2="643.296875" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1181" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1182" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1183" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1162" class="apexcharts-yaxis" rel="0" transform="translate(25.703125, 0)"><g id="SvgjsG1163" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1164" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="regular" fill="#adb5bd" class="apexcharts-yaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">120</text><text id="SvgjsText1165" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="20" y="62.9325" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="regular" fill="#adb5bd" class="apexcharts-yaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">90</text><text id="SvgjsText1166" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="20" y="94.465" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="regular" fill="#adb5bd" class="apexcharts-yaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">60</text><text id="SvgjsText1167" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="20" y="125.9975" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="regular" fill="#adb5bd" class="apexcharts-yaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">30</text><text id="SvgjsText1168" font-family="-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;" x="20" y="157.53" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="regular" fill="#adb5bd" class="apexcharts-yaxis-label apexcharts-xaxis-label" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">0</text></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 308.376px; top: 6px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">May</div><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 138, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Delivered: </span><span class="apexcharts-tooltip-text-value">80 orders</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 190, 61);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Rejected: </span><span class="apexcharts-tooltip-text-value">15 orders</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
					<div class="resize-triggers"><div class="expand-trigger"><div style="width: 729px; height: 232px;"></div></div><div class="contract-trigger"></div></div></div>
					<div class="card-body pt-0">
						<!-- Stats -->
						<div class="row mx-md-n2">
							<div class="col-md-4 px-md-2">
								<div class="card bg-secondary border-0 shadow-none mb-md-0">
									<div class="p-2 d-flex align-items-center">
										<div>
											<div class="icon icon-shape bg-white text-primary shadow">
												<i class="fas fa-cash-register"></i>
											</div>
										</div>
										<div class="pl-3">
											<h6 class="text-muted text-xs font-weight-light mb-0">Spendings</h6>
											<span class="h6 font-weight-bolder mb-0">$7.500</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 px-md-2">
								<div class="card bg-secondary border-0 shadow-none mb-md-0">
									<div class="p-2 d-flex align-items-center">
										<div>
											<div class="icon icon-shape bg-white text-primary shadow">
												<i class="fas fa-cash-register"></i>
											</div>
										</div>
										<div class="pl-3">
											<h6 class="text-muted text-xs font-weight-light mb-0">Spendings</h6>
											<span class="h6 font-weight-bolder mb-0">$7.500</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 px-md-2">
								<div class="card bg-secondary border-0 shadow-none mb-md-0">
									<div class="p-2 d-flex align-items-center">
										<div>
											<div class="icon icon-shape bg-white text-primary shadow">
												<i class="fas fa-cash-register"></i>
											</div>
										</div>
										<div class="pl-3">
											<h6 class="text-muted text-xs font-weight-light mb-0">Spendings</h6>
											<span class="h6 font-weight-bolder mb-0">$7.500</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<!-- Stats -->
				<div class="card ">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col">
								<span class="h6">Performance</span>
							</div>
							<div class="col-auto ml-auto text-right">
								<span class="h6 text-sm text-muted">3,567.00</span>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="">
							<div class="progress-circle progress-lg mx-auto" id="progress-performance-1" data-progress="72" data-trailwidth="4" data-text="72%" data-textclass="h3" data-shape="circle" data-color="primary" style="position: relative;"><svg viewBox="0 0 100 100" style="display: block;"><path d="M 50,50 m 0,-46.5 a 46.5,46.5 0 1 1 0,93 a 46.5,46.5 0 1 1 0,-93" stroke="#eee" stroke-width="4" fill-opacity="0"></path><path d="M 50,50 m 0,-46.5 a 46.5,46.5 0 1 1 0,93 a 46.5,46.5 0 1 1 0,-93" stroke="#008aff" stroke-width="7" fill-opacity="0" style="stroke-dasharray: 292.273, 292.273; stroke-dashoffset: 81.8366;"></path></svg><div class="h3" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(0, 138, 255);">72%</div></div>
						</div>
						<hr class="my-4">
						<!-- Trend -->
						<div class="d-flex align-items-center mb-2">
							<div>
								<span class="icon icon-shape icon-sm bg-soft-success text-success">
									<i class="fas fa-caret-up"></i>
								</span>
							</div>
							<div class="pl-2">
								<span class="text-success text-sm font-weight-bold">+23%</span>
							</div>
						</div>
						<!-- Text -->
						<p class="mb-0 text-sm text-muted">
							You have a 23% growth in comparison with last month.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Inbox -->
		<div>
			<!-- Title -->
			<h3 class="h4">Inbox</h3>
			<!-- Inbox entries -->
			<div class="card mb-3 hover-shadow-lg">
				<div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
					<div class="col-auto col-lg-1 d-flex align-items-center px-0 pt-3 pt-lg-0 zindex-100">
						<!-- Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="chkInboxItem1">
							<label class="custom-control-label" for="chkInboxItem1"></label>
						</div>
						<!-- Star -->
						<div class="custom-rating d-none d-sm-inline-block">
							<input type="checkbox" id="chkInboxItemStar1" name="star">
							<label class="custom-rating-label" for="chkInboxItemStar1"><span class="sr-only">Star</span></label>
						</div>
					</div>
					<div class="col-lg-2 col-8 pl-0 pl-md-2 pt-3 pt-lg-0">
						<span class="h6 text-sm">Aaliyah Haworth</span>
					</div>
					<div class="col col-lg-1 text-right px-0 order-lg-4 pt-3 pt-lg-0">
						<span class="text-muted text-sm">Dec 25</span>
					</div>
					<div class="col-12 col-lg-8 d-flex align-items-center position-static pb-3 py-lg-3 px-0">
						<!-- Badge -->
						<!-- Subject + Body -->
						<div class="col col-lg-11 position-static px-0">
							<div class="d-flex flex-wrap flex-lg-nowrap align-items-center">
								<div class="col-12 col-lg-auto px-0 position-static">
									<a href="#" class="stretched-link h6 d-block mb-0 lh-140 text-sm font-weight-light">Purpose 2.0 is now released</a>
								</div>
								<div class="col-12 col-lg pl-0 text-limit text-sm text-muted d-none d-sm-block pl-lg-2">
									Today we are happy to announce Bit's public Beta support for Vue components between different apps.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 hover-shadow-lg">
				<div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
					<div class="col-auto col-lg-1 d-flex align-items-center px-0 pt-3 pt-lg-0 zindex-100">
						<!-- Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="chkInboxItem2">
							<label class="custom-control-label" for="chkInboxItem2"></label>
						</div>
						<!-- Star -->
						<div class="custom-rating d-none d-sm-inline-block">
							<input type="checkbox" id="chkInboxItemStar2" name="star" checked="">
							<label class="custom-rating-label" for="chkInboxItemStar2"><span class="sr-only">Star</span></label>
						</div>
					</div>
					<div class="col-lg-2 col-8 pl-0 pl-md-2 pt-3 pt-lg-0">
						<span class="h6 text-sm">Mila Bostock</span>
					</div>
					<div class="col col-lg-1 text-right px-0 order-lg-4 pt-3 pt-lg-0">
						<span class="text-muted text-sm">Dec 3</span>
					</div>
					<div class="col-12 col-lg-8 d-flex align-items-center position-static pb-3 py-lg-3 px-0">
						<!-- Badge -->
						<!-- Subject + Body -->
						<div class="col col-lg-11 position-static px-0">
							<div class="d-flex flex-wrap flex-lg-nowrap align-items-center">
								<div class="col-12 col-lg-auto px-0 position-static">
									<a href="#" class="stretched-link h6 d-block mb-0 lh-140 text-sm font-weight-light">Unlock your rewards now</a>
								</div>
								<div class="col-12 col-lg pl-0 text-limit text-sm text-muted d-none d-sm-block pl-lg-2">
									Bit makes it easier than ever to isolate and share Vue components between different projects and apps while keeping changes synced between them
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 hover-shadow-lg">
				<div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
					<div class="col-auto col-lg-1 d-flex align-items-center px-0 pt-3 pt-lg-0 zindex-100">
						<!-- Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="chkInboxItem3">
							<label class="custom-control-label" for="chkInboxItem3"></label>
						</div>
						<!-- Star -->
						<div class="custom-rating d-none d-sm-inline-block">
							<input type="checkbox" id="chkInboxItemStar3" name="star" checked="">
							<label class="custom-rating-label" for="chkInboxItemStar3"><span class="sr-only">Star</span></label>
						</div>
					</div>
					<div class="col-lg-2 col-8 pl-0 pl-md-2 pt-3 pt-lg-0">
						<span class="h6 text-sm">Caroline Gunn</span>
					</div>
					<div class="col col-lg-1 text-right px-0 order-lg-4 pt-3 pt-lg-0">
						<span class="text-muted text-sm">Nov 29</span>
					</div>
					<div class="col-12 col-lg-8 d-flex align-items-center position-static pb-3 py-lg-3 px-0">
						<!-- Badge -->
						<div class="col-auto px-0 d-none d-lg-block">
							<span class="badge badge-xs text-xs badge-light mr-2">Orders</span>
						</div>
						<!-- Subject + Body -->
						<div class="col col-lg-11 position-static px-0">
							<div class="d-flex flex-wrap flex-lg-nowrap align-items-center">
								<div class="col-12 col-lg-auto px-0 position-static">
									<a href="#" class="stretched-link h6 d-block mb-0 lh-140 text-sm">You got a new order for Purpose</a>
								</div>
								<div class="col-12 col-lg pl-0 text-limit text-sm text-muted d-none d-sm-block pl-lg-2">
									Collect your reusable components to Quick to create your very own developer-first component design system
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 hover-shadow-lg">
				<div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
					<div class="col-auto col-lg-1 d-flex align-items-center px-0 pt-3 pt-lg-0 zindex-100">
						<!-- Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="chkInboxItem4">
							<label class="custom-control-label" for="chkInboxItem4"></label>
						</div>
						<!-- Star -->
						<div class="custom-rating d-none d-sm-inline-block">
							<input type="checkbox" id="chkInboxItemStar4" name="star">
							<label class="custom-rating-label" for="chkInboxItemStar4"><span class="sr-only">Star</span></label>
						</div>
					</div>
					<div class="col-lg-2 col-8 pl-0 pl-md-2 pt-3 pt-lg-0">
						<span class="h6 text-sm">Stacey Foster</span>
					</div>
					<div class="col col-lg-1 text-right px-0 order-lg-4 pt-3 pt-lg-0">
						<span class="text-muted text-sm">Nov 23</span>
					</div>
					<div class="col-12 col-lg-8 d-flex align-items-center position-static pb-3 py-lg-3 px-0">
						<!-- Badge -->
						<div class="col-auto px-0 d-none d-lg-block">
							<span class="badge badge-xs text-xs badge-light mr-2">Projects</span>
						</div>
						<!-- Subject + Body -->
						<div class="col col-lg-11 position-static px-0">
							<div class="d-flex flex-wrap flex-lg-nowrap align-items-center">
								<div class="col-12 col-lg-auto px-0 position-static">
									<a href="#" class="stretched-link h6 d-block mb-0 lh-140 text-sm font-weight-light">Start over with a new website</a>
								</div>
								<div class="col-12 col-lg pl-0 text-limit text-sm text-muted d-none d-sm-block pl-lg-2">
									A room without books is like a text without a soul
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-3 hover-shadow-lg">
				<div class="card-body d-flex align-items-center flex-wrap flex-lg-nowrap py-0">
					<div class="col-auto col-lg-1 d-flex align-items-center px-0 pt-3 pt-lg-0 zindex-100">
						<!-- Checkbox -->
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="chkInboxItem5">
							<label class="custom-control-label" for="chkInboxItem5"></label>
						</div>
						<!-- Star -->
						<div class="custom-rating d-none d-sm-inline-block">
							<input type="checkbox" id="chkInboxItemStar5" name="star">
							<label class="custom-rating-label" for="chkInboxItemStar5"><span class="sr-only">Star</span></label>
						</div>
					</div>
					<div class="col-lg-2 col-8 pl-0 pl-md-2 pt-3 pt-lg-0">
						<span class="h6 text-sm">George Browning</span>
					</div>
					<div class="col col-lg-1 text-right px-0 order-lg-4 pt-3 pt-lg-0">
						<span class="text-muted text-sm">Nov 10</span>
					</div>
					<div class="col-12 col-lg-8 d-flex align-items-center position-static pb-3 py-lg-3 px-0">
						<!-- Badge -->
						<!-- Subject + Body -->
						<div class="col col-lg-11 position-static px-0">
							<div class="d-flex flex-wrap flex-lg-nowrap align-items-center">
								<div class="col-12 col-lg-auto px-0 position-static">
									<a href="#" class="stretched-link h6 d-block mb-0 lh-140 text-sm">Start over with a new website</a>
								</div>
								<div class="col-12 col-lg pl-0 text-limit text-sm text-muted d-none d-sm-block pl-lg-2">
									A room without books is like a text without a soul
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
