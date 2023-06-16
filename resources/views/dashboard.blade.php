@extends("layouts")
@section('title','login')

@section('content')
<div class="col-sm-6 col-xl-4 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-40">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
															<i class="ki-outline ki-chart-simple fs-2hx text-gray-600"></i>
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$count}}</span>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-400">DataList</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
													
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
@endsection
<script>var hostUrl = "/";</script>
	<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>

		 <script src="{{asset('assets/js/plugins.bundle.js')}}"></script>
		 <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>